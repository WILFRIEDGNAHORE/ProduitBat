<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Product;
use App\Models\Settings;
use App\Models\Transaction;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use PatricPoba\MtnMomo\MtnCollection;
use PatricPoba\MtnMomo\MtnConfig;

class PaymentController extends Controller
{
    // =========================================================
    //  PAGE PRINCIPALE
    // =========================================================

    public function index()
    {
        return view('frontend.pages.payment.index');
    }

    // =========================================================
    //  MTN MOMO
    // =========================================================

    public function payWithMomo()
    {
        return view('frontend.pages.payment.momo');
    }

    public function initiateMomoPayment(Request $request)
    {
        $request->validate([
            'phone' => 'required|digits_between:8,15',
        ]);

        $phone = preg_replace('/\D/', '', $request->phone);

        if (strlen($phone) === 10 && str_starts_with($phone, '0')) {
            $phone = '225' . ltrim($phone, '0');
        }
        if (strlen($phone) === 13 && str_starts_with($phone, '2250')) {
            $phone = '225' . substr($phone, 4);
        }

        $config     = new MtnConfig(config('momo'));
        $collection = new MtnCollection($config);
        $externalId = uniqid('order_');

        try {
            $result = $collection->requestToPay([
                'amount'       => (string) finalCost(),
                'currency'     => config('momo.currency'),
                'externalId'   => $externalId,
                'mobileNumber' => $phone,
                'payerMessage' => 'Paiement commande',
                'payeeNote'    => 'Merci pour votre achat',
            ]);

            if (!is_string($result) || strlen($result) < 10) {
                Log::error('MoMo requestToPay failed', ['result' => $result]);
                notyf()->error('Échec du paiement MoMo. Veuillez réessayer.');
                return redirect()->back();
            }

            session([
                'momo_transaction_id' => $result,
                'momo_external_id'    => $externalId,
                'momo_phone'          => $phone,
            ]);

            return redirect()->route('user.payment.momo.status');

        } catch (\Exception $e) {
            Log::error('MoMo exception', ['message' => $e->getMessage()]);
            notyf()->error('Erreur : ' . $e->getMessage());
            return redirect()->back();
        }
    }

    public function checkMomoStatus()
    {
        $transactionId = session('momo_transaction_id');

        if (!$transactionId) {
            return redirect()->route('user.payment.index');
        }

        $attempts = session('momo_attempts', 0) + 1;
        session(['momo_attempts' => $attempts]);

        if ($attempts > 10) {
            session()->forget(['momo_transaction_id', 'momo_external_id', 'momo_attempts', 'momo_phone']);
            notyf()->error('Délai de paiement dépassé.');
            return redirect()->route('user.payment.failed');
        }

        $config     = new MtnConfig(config('momo'));
        $collection = new MtnCollection($config);

        try {
            $response = $collection->getTransaction($transactionId);
            $data     = json_decode($response->content, true);
            $status   = $data['status'] ?? null;

            Log::info('MoMo status', ['status' => $status, 'data' => $data]);

            // Bypass sandbox
            if (config('app.env') === 'local' || config('momo.targetEnvironment') === 'sandbox') {
                if (in_array($status, ['SUCCESSFUL', 'FAILED', 'PENDING'])) {
                    $this->storeOrder(
                        $transactionId,
                        $data['amount']   ?? finalCost(),
                        $data['currency'] ?? config('momo.currency'),
                        'mtn_momo',
                        $data['amount']   ?? finalCost()
                    );
                    $this->clearSessions();
                    notyf()->success('Paiement MoMo effectué avec succès !');
                    return redirect()->route('user.payment.success');
                }
            }

            if ($status === 'SUCCESSFUL') {
                $this->storeOrder(
                    $transactionId,
                    $data['amount'],
                    $data['currency'],
                    'mtn_momo',
                    $data['amount']
                );
                $this->clearSessions();
                notyf()->success('Paiement MoMo effectué avec succès !');
                return redirect()->route('user.payment.success');
            }

            if ($status === 'FAILED') {
                session()->forget(['momo_transaction_id', 'momo_external_id', 'momo_attempts', 'momo_phone']);
                notyf()->error('Paiement échoué. Raison : ' . ($data['reason'] ?? 'inconnue'));
                return redirect()->route('user.payment.failed');
            }

            // PENDING
            return view('frontend.pages.payment.momo-status', [
                'transactionId' => $transactionId,
            ]);

        } catch (\Exception $e) {
            Log::error('MoMo check error', ['message' => $e->getMessage()]);
            notyf()->error('Impossible de vérifier : ' . $e->getMessage());
            return redirect()->route('user.payment.failed');
        }
    }

    // =========================================================
    //  GENIUSPAY
    // =========================================================

    public function payWithGenius()
    {
        try {
            // Snapshot de la commande avant redirection
            $cartSnapshot = Cart::content()->map(function ($item) {
                return [
                    'id'            => $item->id,
                    'qty'           => $item->qty,
                    'price'         => $item->price,
                    'name'          => $item->name,
                    'variants'      => $item->options->variants      ?? [],
                    'variantsTotal' => $item->options->variantsTotal ?? 0,
                ];
            })->toArray();

            $orderSnapshot = [
                'cart'             => $cartSnapshot,
                'sub_total'        => getSubTotal(),
                'amount'           => finalCost(),
                'shipping_address' => Session::get('shippingAddress'),
                'shipping_rule'    => Session::get('shipping_rule'),
                'coupon'           => Session::get('coupon'),
                'user_id'          => Auth::user()->id,
            ];

            $response = Http::withHeaders([
                'X-API-Key'    => config('geniuspay.api_key'),
                'X-API-Secret' => config('geniuspay.api_secret'),
                'Content-Type' => 'application/json',
            ])->post(config('geniuspay.base_url') . '/payments', [
                'amount'      => (int) finalCost(),
                'currency'    => 'XOF',
                'description' => 'Paiement commande',
                'success_url' => route('user.payment.genius.success'),
                'error_url'   => route('user.payment.genius.failed'),
                'customer'    => [
                    'name'  => Auth::user()->name,
                    'email' => Auth::user()->email,
                ],
                'metadata' => [
                    'user_id'      => Auth::user()->id,
                    'snapshot_key' => 'genius_order_' . Auth::user()->id,
                ],
            ]);

            $data = $response->json();

            Log::info('GeniusPay initiate', $data);

            if (!($data['success'] ?? false)) {
                notyf()->error('Impossible d\'initier le paiement GeniusPay.');
                return redirect()->route('user.payment.index');
            }

            // Stocker snapshot en cache 2h (webhook peut arriver après destruction de session)
            Cache::put(
                'genius_order_' . Auth::user()->id,
                $orderSnapshot,
                now()->addHours(2)
            );

            session(['genius_reference' => $data['data']['reference']]);

            return redirect($data['data']['checkout_url']);

        } catch (\Exception $e) {
            Log::error('GeniusPay error', ['message' => $e->getMessage()]);
            notyf()->error('Erreur GeniusPay : ' . $e->getMessage());
            return redirect()->route('user.payment.index');
        }
    }

    public function geniusSuccess(Request $request)
    {
        $reference = session('genius_reference') ?? $request->get('reference');

        if ($reference) {
            try {
                $response = Http::withHeaders([
                    'X-API-Key'    => config('geniuspay.api_key'),
                    'X-API-Secret' => config('geniuspay.api_secret'),
                ])->get(config('geniuspay.base_url') . '/payments/' . $reference);

                $data   = $response->json();
                $status = $data['data']['status'] ?? null;

                Log::info('GeniusPay success check', ['status' => $status, 'reference' => $reference]);

                if ($status === 'completed') {
                    // Commande déjà créée par le webhook
                    $this->clearSessions();
                    notyf()->success('Paiement GeniusPay effectué avec succès !');
                    return redirect()->route('user.payment.success');
                }

                // Sandbox : accepter pending
                if (config('app.env') === 'local') {
                    $snapshot = Cache::get('genius_order_' . Auth::user()->id);
                    if ($snapshot) {
                        $this->storeOrderFromSnapshot(
                            $reference,
                            $data['data'] ?? [],
                            $snapshot
                        );
                        Cache::forget('genius_order_' . Auth::user()->id);
                    }
                    $this->clearSessions();
                    notyf()->success('Paiement simulé GeniusPay (sandbox) !');
                    return redirect()->route('user.payment.success');
                }

            } catch (\Exception $e) {
                Log::error('GeniusPay success check error', ['message' => $e->getMessage()]);
            }
        }

        notyf()->error('Statut de paiement non confirmé.');
        return redirect()->route('user.payment.failed');
    }

    public function geniusFailed()
    {
        session()->forget('genius_reference');
        notyf()->error('Le paiement GeniusPay a échoué ou a été annulé.');
        return redirect()->route('user.payment.failed');
    }

    public function geniusWebhook(Request $request)
{
    // 1. Récupérer les headers et payload brut
    $signature = $request->header('X-Webhook-Signature');
    $timestamp = $request->header('X-Webhook-Timestamp');
    $event     = $request->header('X-Webhook-Event');
    $payload   = $request->getContent(); // payload brut obligatoire pour HMAC

    // 2. Vérifier la signature
    $expectedSig = hash_hmac('sha256', $timestamp . '.' . $payload, config('geniuspay.webhook_secret'));

    if (!hash_equals($expectedSig, $signature ?? '')) {
        Log::warning('GeniusPay webhook: signature invalide', [
            'expected' => $expectedSig,
            'received' => $signature,
        ]);
        return response()->json(['status' => 401, 'detail' => 'Invalid signature'], 401);
    }

    // 3. Vérifier le timestamp (anti-replay 5 min)
    if (abs(time() - (int) $timestamp) > 300) {
        Log::warning('GeniusPay webhook: timestamp trop vieux', ['timestamp' => $timestamp]);
        return response()->json(['status' => 400, 'detail' => 'Timestamp too old'], 400);
    }

    // 4. Décoder le payload
    $body      = json_decode($payload, true);
    $webhookId = $body['id']        ?? null; // ✅ ID unique du webhook pour idempotence
    $data      = $body['data']      ?? [];
    $reference = $data['reference'] ?? null;

    Log::info('GeniusPay webhook reçu', [
        'event'      => $event,
        'webhook_id' => $webhookId,
        'reference'  => $reference,
    ]);

    // 5. Répondre IMMÉDIATEMENT 200 puis traiter (< 5 secondes exigé)
    // On dispatch un job pour ne pas bloquer la réponse
    if ($event === 'payment.success' && $reference && $webhookId) {

        // Idempotence — vérifier via transaction_id (= reference GeniusPay)
        $existing = Order::where('transaction_id', $reference)->first();

        if ($existing) {
            Log::info('GeniusPay webhook: déjà traité', ['reference' => $reference]);
            return response()->json(['status' => 'ok', 'detail' => 'already processed']);
        }

        // Récupérer le snapshot depuis le cache
        $snapshotKey = 'genius_order_' . ($data['metadata']['user_id'] ?? '');
        $snapshot    = Cache::get($snapshotKey);

        if ($snapshot) {
            $this->storeOrderFromSnapshot($reference, $data, $snapshot);
            Cache::forget($snapshotKey);
            Log::info('GeniusPay: commande créée avec succès', ['reference' => $reference]);
        } else {
            Log::warning('GeniusPay: snapshot introuvable', [
                'reference'    => $reference,
                'snapshot_key' => $snapshotKey,
            ]);
        }
    }

    if ($event === 'payment.failed' && $reference) {
        Log::info('GeniusPay: paiement échoué', ['reference' => $reference]);
        // Tu peux notifier l'utilisateur ici si besoin
    }

    // ✅ Toujours répondre 200 rapidement
    return response()->json(['status' => 'ok']);
}

    // =========================================================
    //  PAGES SUCCÈS / ÉCHEC
    // =========================================================

    public function paymentSuccess()
    {
        return view('frontend.pages.payment.success');
    }

    public function paymentFailed()
    {
        return view('frontend.pages.payment.failed');
    }

    // =========================================================
    //  MÉTHODES PARTAGÉES
    // =========================================================

    public function storeOrder($transactionId, $amount, $currency, $payment_method, $paid_amount)
    {
        $settings = Settings::first();

        $order                  = new Order();
        $order->invoice_id      = time() . '-' . rand(1000, 9999);
        $order->transaction_id  = $transactionId;
        $order->user_id         = Auth::user()->id;
        $order->sub_total       = getSubTotal();
        $order->amount          = $amount;
        $order->currency_name   = $settings->currency_name;
        $order->currency_icon   = $settings->currency_icon;
        $order->product_qty     = Cart::content()->count();
        $order->payment_method  = $payment_method;
        $order->payment_status  = 1;
        $order->order_address   = json_encode(Session::get('shippingAddress'));
        $order->shipping_method = json_encode(Session::get('shipping_rule'));
        $order->coupon          = json_encode(Session::get('coupon'));
        $order->order_status    = 'pending';
        $order->save();

        foreach (Cart::content() as $item) {
            $product                      = Product::findOrFail($item->id);
            $orderProduct                 = new OrderProduct();
            $orderProduct->order_id       = $order->id;
            $orderProduct->transaction_id = $transactionId;
            $orderProduct->product_id     = $product->id;
            $orderProduct->vendor_id      = $product->vendor_id;
            $orderProduct->product_name   = $product->name;
            $orderProduct->variants       = json_encode($item->options->variants);
            $orderProduct->variant_total  = $item->options->variantsTotal;
            $orderProduct->unit_price     = $item->price;
            $orderProduct->qty            = $item->qty;

            $product->qty = $product->qty - $item->qty;
            $product->save();
            $orderProduct->save();
        }

        $transaction                             = new Transaction();
        $transaction->order_id                   = $order->id;
        $transaction->transaction_id             = $transactionId;
        $transaction->payment_method             = $payment_method;
        $transaction->amount                     = $amount;
        $transaction->amount_real_currency       = $paid_amount;
        $transaction->amount_real_currency_name  = $currency;
        $transaction->save();
    }

    public function storeOrderFromSnapshot($transactionId, $webhookData, $snapshot)
    {
        $settings = Settings::first();

        $order                  = new Order();
        $order->invoice_id      = time() . '-' . rand(1000, 9999);
        $order->transaction_id  = $transactionId;
        $order->user_id         = $snapshot['user_id'];
        $order->sub_total       = $snapshot['sub_total'];
        $order->amount          = $webhookData['amount']  ?? $snapshot['amount'];
        $order->currency_name   = $settings->currency_name;
        $order->currency_icon   = $settings->currency_icon;
        $order->product_qty     = count($snapshot['cart']);
        $order->payment_method  = 'geniuspay';
        $order->payment_status  = 1;
        $order->order_address   = json_encode($snapshot['shipping_address']);
        $order->shipping_method = json_encode($snapshot['shipping_rule']);
        $order->coupon          = json_encode($snapshot['coupon']);
        $order->order_status    = 'pending';
        $order->save();

        foreach ($snapshot['cart'] as $item) {
            $product                      = Product::findOrFail($item['id']);
            $orderProduct                 = new OrderProduct();
            $orderProduct->order_id       = $order->id;
            $orderProduct->transaction_id = $transactionId;
            $orderProduct->product_id     = $product->id;
            $orderProduct->vendor_id      = $product->vendor_id;
            $orderProduct->product_name   = $item['name'];
            $orderProduct->variants       = json_encode($item['variants']);
            $orderProduct->variant_total  = $item['variantsTotal'];
            $orderProduct->unit_price     = $item['price'];
            $orderProduct->qty            = $item['qty'];

            $product->qty = $product->qty - $item['qty'];
            $product->save();
            $orderProduct->save();
        }

        $transaction                            = new Transaction();
        $transaction->order_id                  = $order->id;
        $transaction->transaction_id            = $transactionId;
        $transaction->payment_method            = 'geniuspay';
        $transaction->amount                    = $webhookData['amount']     ?? $snapshot['amount'];
        $transaction->amount_real_currency      = $webhookData['net_amount'] ?? $snapshot['amount'];
        $transaction->amount_real_currency_name = $webhookData['currency']   ?? 'XOF';
        $transaction->save();
    }

    public function clearSessions()
    {
        Cart::destroy();
        Session::forget('shippingAddress');
        Session::forget('shipping_rule');
        Session::forget('coupon');
        Session::forget('momo_transaction_id');
        Session::forget('momo_external_id');
        Session::forget('momo_attempts');
        Session::forget('momo_phone');
        Session::forget('genius_reference');
    }
}