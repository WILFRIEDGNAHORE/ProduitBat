@extends('frontend.layouts.master')
@section('content')

<!-- ========== Breadcrumb Section Start ========== -->
<div class="container py-12">
  <div class="breadcrumb">
    <ul>
      <li>
        <a href='{{ url('/') }}'>
          <span class="inline-flex items-center justify-center">
            <i class="hgi hgi-stroke hgi-home-01 text-2xl leading-6"></i>
          </span>
          Home
        </a>
      </li>
      <li class="text-light-disabled-text">&#8226;</li>
      <li><span class="text-sm leading-[22px]">Payment</span></li>
    </ul>
  </div>
</div>
<!-- ========== Breadcrumb Section End ========== -->

<!-- ========== PAYMENT Section Start ========== -->
<div class="pb-[70px]">
  <div class="container">
    <div class="grid grid-cols-12 gap-x-6 gap-y-6">

      <!-- Payment Gateways -->
      <div class="xl:col-span-8 col-span-12">
        <div class="flex flex-wrap gap-4">

          <div class="w-[180px]">
            <a href="{{ route('user.payment.momo') }}">
              <img src="{{ asset('frontend/assets/images/payment-gateway/MTN_MOMO.jpeg') }}" class="w-full">
            </a>
          </div>

          <div class="w-[180px]">
            <a href="">
              <img src="{{ asset('frontend/assets/images/payment-gateway/MTN_MOMO.jpeg') }}" class="w-full">
            </a>
          </div>

          <div class="w-[180px]">
            <a href="">
              <img src="{{ asset('frontend/assets/images/payment-gateway/MTN_MOMO.jpeg') }}" class="w-full">
            </a>
          </div>

        </div>
      </div>

      <!-- Order Summary -->
      <div class="xl:col-span-4 col-span-12">
        <div class="border border-gray-300 rounded-2xl md:px-6 md:py-6 px-3 py-4 flex flex-col gap-y-6 sticky top-5">

          <div class="bg-gray-100 md:px-6 px-4 py-6 rounded-2xl">
            <div class="flex flex-col gap-y-6">
              <h5>Order Summary</h5>
              <div>
                <div class="flex flex-col gap-y-4 pb-4 border-b border-gray-300">
                  <p class="flex items-center justify-between">
                    Sub-Total<span class="text-gray-900">{{ $settings->currency_icon }}{{ getSubTotal() }}</span>
                  </p>
                  <p class="flex items-center justify-between">
                    Discount<span class="text-gray-900">(-) {{ $settings->currency_icon }}{{ discount() }}</span>
                  </p>
                  <p class="flex items-center justify-between">
                    Shipping Fee<span class="text-gray-900">(+) {{ $settings->currency_icon }}{{ shippingFee() }}</span>
                  </p>
                </div>
                <h6 class="flex items-center justify-between text-light-primary-text pt-4">
                  Total<span class="text-gray-900">{{ $settings->currency_icon }}{{ finalCost() }}</span>
                </h6>
              </div>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</div>
<!-- ========== PAYMENT Section End ========== -->

@endsection