@extends('frontend.layouts.master')
@section('content')

<div class="flex flex-col justify-center items-center min-h-[60vh] text-center px-4">

    <div class="animate-spin rounded-full h-14 w-14 border-4 border-yellow-400 border-t-transparent mb-6"></div>

    <h5 class="text-xl font-semibold mb-2">En attente de confirmation...</h5>
    <p class="text-gray-500 text-sm mb-6">
        Une demande de paiement a été envoyée sur votre téléphone MTN.<br>
        Veuillez l'approuver via le menu USSD.
    </p>

    {{-- Polling auto toutes les 5 secondes --}}
    <meta http-equiv="refresh" content="5;url={{ route('user.payment.momo.status') }}">

    <a href="{{ route('user.payment.momo.status') }}"
       class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-6 py-3 rounded-xl text-sm transition">
        Vérifier maintenant
    </a>

    <a href="{{ route('user.payment.index') }}" class="text-gray-400 text-xs mt-4 underline">
        Annuler et revenir
    </a>

</div>

@endsection