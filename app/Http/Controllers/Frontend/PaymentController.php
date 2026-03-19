<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PatricPoba\MtnMomo\MtnConfig;
use PatricPoba\MtnMomo\MtnCollection;

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
            'currency'     => config('momo.currency'), // EUR en sandbox
            'externalId'   => $externalId,
            'mobileNumber' => $phone,
            'payerMessage' => 'Paiement commande',
            'payeeNote'    => 'Merci pour votre achat',
        ]);

        // ✅ Vérifier que c'est bien un UUID et pas une erreur
        if (!is_string($result) || strlen($result) < 10) {
            \Log::error('MoMo requestToPay failed', ['result' => $result]);
            notyf()->error('Échec du paiement MoMo. Veuillez réessayer.');
            return redirect()->back();
        }

        session([
            'momo_transaction_id' => $result,
            'momo_external_id'    => $externalId,
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
        session()->forget(['momo_transaction_id', 'momo_external_id', 'momo_attempts']);
        notyf()->error('Délai de paiement dépassé.');
        return redirect()->route('user.payment.failed');
    }

    $config     = new MtnConfig(config('momo'));
    $collection = new MtnCollection($config);

    try {
        $response = $collection->getTransaction($transactionId);

        // ✅ Décoder le contenu JSON de la réponse
        $data   = json_decode($response->content, true);
        $status = $data['status'] ?? null;

        \Log::info('MoMo status', ['status' => $status, 'data' => $data]);

        if ($status === 'SUCCESSFUL') {
            session()->forget(['momo_transaction_id', 'momo_external_id', 'momo_attempts']);
            notyf()->success('Paiement MoMo effectué avec succès !');
            return redirect()->route('user.payment.success');
        }

        if ($status === 'FAILED') {
            session()->forget(['momo_transaction_id', 'momo_external_id', 'momo_attempts']);
            notyf()->error('Le paiement MoMo a échoué. Raison : ' . ($data['reason'] ?? 'inconnue'));
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
}