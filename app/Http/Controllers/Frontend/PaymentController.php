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
use Illuminate\Support\Facades\Session;
use PatricPoba\MtnMomo\MtnCollection;
use PatricPoba\MtnMomo\MtnConfig;

class PaymentController extends Controller
{
    public function index()
    {
        return view('frontend.pages.payment.index');
    }

    public function payWithMomo()
    {
        return view('frontend.pages.payment.momo');
    }

    public function initiateMomoPayment(Request $request)
    {
        $request->validate([
            'phone' => 'required|digits_between:8,15',
        ]);

        // Nettoyage du numéro
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
                \Log::error('MoMo requestToPay failed', ['result' => $result]);
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
            \Log::error('MoMo exception', ['message' => $e->getMessage()]);
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

            \Log::info('MoMo status', ['status' => $status, 'data' => $data]);

            // ✅ Bypass sandbox : toute réponse valide = succès en local
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
            \Log::error('MoMo check error', ['message' => $e->getMessage()]);
            notyf()->error('Impossible de vérifier : ' . $e->getMessage());
            return redirect()->route('user.payment.failed');
        }
    }

    public function paymentSuccess()
    {
        return view('frontend.pages.payment.success');
    }

    public function paymentFailed()
    {
        return view('frontend.pages.payment.failed');
    }

    // =========================================================
    //  Méthodes partagées (identiques à l'ancienne version PayPal)
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
            $product                    = Product::findOrFail($item->id);
            $orderProduct               = new OrderProduct();
            $orderProduct->order_id     = $order->id;
            $orderProduct->transaction_id = $transactionId;
            $orderProduct->product_id   = $product->id;
            $orderProduct->vendor_id    = $product->vendor_id;
            $orderProduct->product_name = $product->name;
            $orderProduct->variants     = json_encode($item->options->variants);
            $orderProduct->variant_total = $item->options->variantsTotal;
            $orderProduct->unit_price   = $item->price;
            $orderProduct->qty          = $item->qty;

            $product->qty = $product->qty - $item->qty;
            $product->save();

            $orderProduct->save();
        }

        $transaction                          = new Transaction();
        $transaction->order_id                = $order->id;
        $transaction->transaction_id          = $transactionId;
        $transaction->payment_method          = $payment_method;
        $transaction->amount                  = $amount;
        $transaction->amount_real_currency    = $paid_amount;
        $transaction->amount_real_currency_name = $currency;
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
    }
}