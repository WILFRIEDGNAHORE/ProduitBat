@extends('frontend.layouts.master')
@section('content')
    <div class="container py-12">
        <div class="breadcrumb">
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li class="text-light-disabled-text">&#8226;</li>
                <li><a href="{{ route('user.payment.index') }}">Payment</a></li>
                <li class="text-light-disabled-text">&#8226;</li>
                <li><span class="text-sm">MTN MoMo</span></li>
            </ul>
        </div>
    </div>

    <div class="pb-[70px]">
        <div class="container">
            <div class="grid grid-cols-12 gap-6">

                {{-- Formulaire MoMo --}}
                <div class="xl:col-span-8 col-span-12">
                    <div class="border border-gray-300 rounded-2xl md:px-8 md:py-8 px-4 py-6">

                        <div class="flex items-center gap-3 mb-6">
                            <img src="{{ asset('frontend/assets/images/payment-gateway/MTN_MOMO.jpeg') }}" class="h-10">
                            <h5 class="text-lg font-semibold">Payer avec MTN MoMo</h5>
                        </div>

                        <form action="{{ route('user.payment.momo.initiate') }}" method="POST">
                            @csrf
                            <div class="mb-5">
                                <label class="block text-sm font-medium text-gray-700 mb-1">
                                    Numéro MoMo
                                </label>
                                <input type="text" name="phone" value="{{ old('phone') }}"
                                    placeholder="ex: 0500945542 ou 22500945542" maxlength="15"
                                    class="w-full border border-gray-300 rounded-xl px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-yellow-400">
                                @error('phone')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                                <p class="text-gray-400 text-xs mt-1">
                                    Tapez votre numéro local (ex: <strong>0500945542</strong>) ou international (ex:
                                    <strong>22500945542</strong>)
                                </p>
                            </div>

                            <button type="submit"
                                class="w-full bg-yellow-400 hover:bg-yellow-500 text-black font-semibold py-3 rounded-xl transition">
                                Confirmer le paiement — {{ $settings->currency_icon }}{{ finalCost() }}
                            </button>
                        </form>

                    </div>
                </div>

                {{-- Résumé commande --}}
                <div class="xl:col-span-4 col-span-12">
                    <div class="border border-gray-300 rounded-2xl md:px-6 md:py-6 px-3 py-4 sticky top-5">
                        <div class="bg-gray-100 md:px-6 px-4 py-6 rounded-2xl">
                            <div class="flex flex-col gap-y-4">
                                <h5 class="font-semibold">Order Summary</h5>
                                <div class="flex flex-col gap-y-3 pb-4 border-b border-gray-300">
                                    <p class="flex justify-between text-sm">
                                        Sub-Total <span>{{ $settings->currency_icon }}{{ getSubTotal() }}</span>
                                    </p>
                                    <p class="flex justify-between text-sm">
                                        Discount <span class="text-red-500">(-)
                                            {{ $settings->currency_icon }}{{ discount() }}</span>
                                    </p>
                                    <p class="flex justify-between text-sm">
                                        Shipping Fee <span class="text-green-600">(+)
                                            {{ $settings->currency_icon }}{{ shippingFee() }}</span>
                                    </p>
                                </div>
                                <p class="flex justify-between font-semibold pt-2">
                                    Total <span>{{ $settings->currency_icon }}{{ finalCost() }}</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
