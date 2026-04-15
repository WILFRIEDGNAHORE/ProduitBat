@extends('frontend.layouts.master')

@section('title', 'Order #' . $order->invoice_id)

@section('content')

@php
    $address  = json_decode($order->order_address);
    $shipping = json_decode($order->shipping_method);
    $coupon   = json_decode(@$order->coupon);

    $statusSteps = [
        'pending'                     => 0,
        'processed_and_ready_to_ship' => 1,
        'dropped_off'                 => 2,
        'shipped'                     => 3,
        'out_for_delivery'            => 4,
        'delivered'                   => 5,
    ];
    $currentStep = $statusSteps[$order->order_status] ?? -1;

    $timeline = [
        ['key' => 'pending',                     'label' => 'Order Placed',        'desc'  => 'Your order has been successfully placed and is being reviewed.'],
        ['key' => 'processed_and_ready_to_ship', 'label' => 'Processing',           'desc'  => 'We are reviewing your order details and checking item availability.'],
        ['key' => 'dropped_off',                 'label' => 'Dropped Off',          'desc'  => 'Your order has been dropped off at the shipping facility.'],
        ['key' => 'shipped',                     'label' => 'Shipped',              'desc'  => 'Your order is on its way to the delivery hub.'],
        ['key' => 'out_for_delivery',            'label' => 'Out for Delivery',     'desc'  => 'Your order is out for delivery and will arrive soon.'],
        ['key' => 'delivered',                   'label' => 'Delivered',            'desc'  => 'Your order has been successfully delivered. Enjoy your purchase!'],
    ];
@endphp

<!-- Breadcrumb -->
<div class="container py-12">
    <div class="breadcrumb">
        <ul>
            <li>
                <a href="{{ route('home') }}">
                    <span class="inline-flex items-center justify-center">
                        <i class="hgi hgi-stroke hgi-home-01 text-2xl leading-6"></i>
                    </span>
                    Home
                </a>
            </li>
            <li class="text-light-disabled-text">&#8226;</li>
            <li>
                <a href="{{ route('user.dashboard') }}" class="text-sm! leading-[22px]! text-light-primary-text! font-normal">
                    Dashboard
                </a>
            </li>
            <li class="text-light-disabled-text">&#8226;</li>
            <li><span class="text-sm leading-[22px]">Order #{{ $order->invoice_id }}</span></li>
        </ul>
    </div>
</div>

<section class="pb-[74px]">
    <div class="container">

        <!-- Header -->
        <div class="flex items-center justify-between mb-8">
            <div class="flex items-center gap-x-6">
                <a href="{{ route('user.dashboard') }}"
                   class="btn btn-default outline size-12 rounded-[80px] shadow-none inline-flex items-center justify-center">
                    <i class="hgi hgi-stroke hgi-arrow-left-02 text-2xl leading-6"></i>
                </a>
                <div>
                    <h3 class="text-light-primary-text">Order #{{ $order->invoice_id }}</h3>
                    <p class="text-sm text-light-secondary-text mt-1">
                        Placed on {{ $order->created_at->format('d F, Y \a\t h:i A') }}
                    </p>
                </div>
            </div>
            <div class="flex items-center gap-x-3">
                @php
                    $statusConfig = [
                        'pending'                     => ['label' => 'Pending',           'class' => 'bg-[rgba(255,193,7,0.16)] text-warning-dark'],
                        'processed_and_ready_to_ship' => ['label' => 'Processing',        'class' => 'bg-[rgba(255,193,7,0.16)] text-warning-dark'],
                        'dropped_off'                 => ['label' => 'Dropped Off',       'class' => 'bg-[rgba(255,193,7,0.16)] text-warning-dark'],
                        'shipped'                     => ['label' => 'Shipped',           'class' => 'bg-[rgba(24,144,255,0.16)] text-info-dark'],
                        'out_for_delivery'            => ['label' => 'Out for Delivery',  'class' => 'bg-[rgba(24,144,255,0.16)] text-info-dark'],
                        'delivered'                   => ['label' => 'Delivered',         'class' => 'bg-[rgba(84,214,44,0.16)] text-success-dark'],
                        'canceled'                    => ['label' => 'Cancelled',         'class' => 'bg-[rgba(255,72,66,0.16)] text-error-dark'],
                    ];
                    $cfg = $statusConfig[$order->order_status] ?? ['label' => ucfirst(str_replace('_',' ',$order->order_status)), 'class' => 'bg-gray-200 text-gray-600'];
                @endphp
                <span class="btn btn-small {{ $cfg['class'] }} py-[7px] px-4 text-sm font-semibold rounded-[90px]">
                    {{ $cfg['label'] }}
                </span>
                <button onclick="window.print()"
                    class="btn btn-default outline btn-large py-[11px] px-6 rounded-[80px] shadow-none inline-flex items-center gap-x-2">
                    <i class="hgi hgi-stroke hgi-printer text-xl leading-5"></i>
                    Invoice
                </button>
            </div>
        </div>

        <div class="flex flex-col gap-y-6">

            <!-- ===== Timeline ===== -->
            @if($order->order_status !== 'canceled')
            <div class="order-history-table-wrapper border border-gray-300 rounded-2xl overflow-x-auto">
                <table class="w-full order-history-table">
                    <thead>
                        <tr class="border-b border-gray-300">
                            <th class="text-left py-4 px-6 bg-gray-200 lg:text-xl lg:leading-[30px] text-lg leading-7 font-bold text-light-primary-text">
                                Order Timeline
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="lg:px-6 px-4 pb-6 pt-8">
                                <div>
                                    @foreach($timeline as $step)
                                    @php
                                        $stepIndex  = $statusSteps[$step['key']];
                                        $isDone     = $currentStep >= $stepIndex;
                                        $isLast     = $loop->last;
                                        $lineColor  = $isDone ? 'bg-primary' : 'bg-gray-300';
                                        $dotClass   = $isDone
                                            ? 'bg-primary-light border border-primary-dark'
                                            : 'bg-white border border-gray-300';
                                        $dateLabel  = $isDone && $stepIndex === $currentStep
                                            ? $order->updated_at->format('M d h:i A')
                                            : ($isDone ? '✓' : '—');
                                    @endphp
                                    <div class="flex gap-x-6">
                                        <!-- Date -->
                                        <div class="min-h-[90px] text-end">
                                            <p class="text-xs leading-[18px] w-[60px] text-light-secondary-text">
                                                {{ $dateLabel }}
                                            </p>
                                        </div>
                                        <!-- Line + dot -->
                                        <div class="relative {{ $isLast ? '' : 'last:after:hidden' }} after:absolute after:top-2 after:bottom-0 after:start-3.5 after:w-px after:-translate-x-1 after:{{ $lineColor }}">
                                            <div class="relative z-10 size-5 flex justify-center items-center">
                                                <div class="size-5 rounded-full {{ $dotClass }} inline-flex items-center justify-center">
                                                    @if($isDone)
                                                        <i class="hgi hgi-stroke hgi-tick-02 text-primary-dark text-[10px] leading-[10px]"></i>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Content -->
                                        <div class="grow pt-0.5 pb-8">
                                            <p class="font-semibold {{ $isDone ? 'text-light-primary-text' : 'text-light-disabled-text' }}">
                                                {{ $step['label'] }}
                                            </p>
                                            <p class="text-light-secondary-text text-sm leading-[22px]">
                                                {{ $step['desc'] }}
                                            </p>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            @endif

            <!-- ===== Shipment Address ===== -->
            @if($address)
            <div class="order-history-table-wrapper border border-gray-300 rounded-2xl overflow-x-auto">
                <table class="w-full order-history-table">
                    <thead>
                        <tr class="border-b border-gray-300">
                            <th class="text-left py-4 px-6 bg-gray-200 lg:text-xl lg:leading-[30px] text-lg leading-7 font-bold text-light-primary-text">
                                Shipment Address
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="lg:px-6 px-4 py-6">
                                <ul class="flex flex-col gap-y-4">
                                    <li class="flex items-center gap-x-2.5 text-light-primary-text">
                                        <span class="inline-flex items-center justify-center">
                                            <i class="hgi hgi-stroke hgi-user-square text-2xl leading-6"></i>
                                        </span>
                                        {{ $address->name ?? '—' }}
                                    </li>
                                    @if(!empty($address->phone))
                                    <li class="flex items-center gap-x-2.5 text-light-primary-text">
                                        <span class="inline-flex items-center justify-center">
                                            <i class="hgi hgi-stroke hgi-call text-2xl leading-6"></i>
                                        </span>
                                        {{ $address->phone }}
                                    </li>
                                    @endif
                                    @if(!empty($address->email))
                                    <li class="flex items-center gap-x-2.5 text-light-primary-text">
                                        <span class="inline-flex items-center justify-center">
                                            <i class="hgi hgi-stroke hgi-mail-01 text-2xl leading-6"></i>
                                        </span>
                                        {{ $address->email }}
                                    </li>
                                    @endif
                                    <li class="flex items-center gap-x-2.5 text-light-primary-text">
                                        <span class="inline-flex items-center justify-center">
                                            <i class="hgi hgi-stroke hgi-location-06 text-2xl leading-6"></i>
                                        </span>
                                        {{ implode(', ', array_filter([
                                            $address->address ?? null,
                                            $address->city    ?? null,
                                            $address->state   ?? null,
                                            $address->zip     ?? null,
                                            $address->country ?? null,
                                        ])) }}
                                    </li>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            @endif

            <!-- ===== Order Items ===== -->
            <div class="order-history-table-wrapper border border-gray-300 rounded-2xl overflow-x-auto">
                <table class="w-full order-history-table">
                    <thead>
                        <tr class="border-b border-gray-300">
                            <th class="text-left py-4 px-6 bg-gray-200 lg:text-xl lg:leading-[30px] text-lg leading-7 font-bold text-light-primary-text">
                                Order Items
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="lg:px-6 px-4 pt-6">
                                <ul class="flex flex-col gap-y-4">
                                    @forelse($order->orderProducts as $item)
                                    @php
                                        $variants = json_decode($item->variants, true) ?? [];
                                        $thumb    = $item->product->thumb_image ?? null;
                                        $lineTotal = $item->unit_price * $item->qty + ($item->variant_total ?? 0);
                                    @endphp
                                    <li class="py-4 border-b border-gray-300 last:border-b-0 first:pt-0 last:pb-0">
                                        <div class="flex flex-col md:flex-row gap-x-4">
                                            <!-- Thumb -->
                                            <div class="w-[120px] h-[120px] bg-gray-200 rounded-lg mx-auto mb-4 md:mb-0 flex-shrink-0 overflow-hidden">
                                                @if($thumb)
                                                    <img src="{{ asset($thumb) }}" alt="{{ $item->product_name }}"
                                                         class="w-full h-full rounded-lg object-cover" />
                                                @else
                                                    <div class="w-full h-full flex items-center justify-center bg-gray-100">
                                                        <i class="hgi hgi-stroke hgi-image-not-found-01 text-3xl text-gray-400"></i>
                                                    </div>
                                                @endif
                                            </div>
                                            <!-- Info -->
                                            <div class="flex flex-col gap-y-2 flex-1">
                                                <div class="flex items-start justify-between">
                                                    <p class="text-light-primary-text font-semibold">
                                                        {{ $item->product_name }}
                                                    </p>
                                                    <div class="text-right">
                                                        <p class="font-semibold text-light-primary-text">
                                                            {{ $order->currency_icon }}{{ number_format($lineTotal, 2) }}
                                                        </p>
                                                        <p class="text-xs text-light-secondary-text">
                                                            {{ $order->currency_icon }}{{ number_format($item->unit_price, 2) }} × {{ $item->qty }}
                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- Variants -->
                                                @if(!empty($variants))
                                                <div class="flex flex-wrap gap-x-3 gap-y-1">
                                                    @foreach($variants as $key => $variant)
                                                    <span class="text-sm text-light-secondary-text">
                                                        {{ $key }}: <strong>{{ $variant['name'] }}</strong>
                                                        <span class="text-success-dark">(+{{ $order->currency_icon }}{{ $variant['price'] }})</span>
                                                    </span>
                                                    @endforeach
                                                </div>
                                                @endif
                                                <!-- Quantity badge -->
                                                <div class="flex items-center gap-x-2 mt-1">
                                                    <span class="text-sm text-light-secondary-text">Qty:</span>
                                                    <span class="font-semibold text-light-primary-text">{{ $item->qty }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    @empty
                                    <li class="py-6 text-center text-light-secondary-text">No products found.</li>
                                    @endforelse
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- ===== Order Summary ===== -->
            <div class="order-history-table-wrapper border border-gray-300 rounded-2xl overflow-x-auto">
                <table class="w-full order-history-table">
                    <thead>
                        <tr class="border-b border-gray-300">
                            <th class="text-left py-4 px-6 bg-gray-200 lg:text-xl lg:leading-[30px] text-lg leading-7 font-bold text-light-primary-text">
                                Order Summary
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="lg:px-6 px-4 py-6">
                                <ul class="flex flex-col gap-y-4 border-b border-gray-300 pb-5">
                                    <li class="flex items-center justify-between">
                                        <p class="text-light-secondary-text">Invoice #</p>
                                        <span class="text-light-primary-text font-semibold">{{ $order->invoice_id }}</span>
                                    </li>
                                    <li class="flex items-center justify-between">
                                        <p class="text-light-secondary-text">Order Date</p>
                                        <span class="text-light-primary-text">{{ $order->created_at->format('d M, Y') }}</span>
                                    </li>
                                    <li class="flex items-center justify-between">
                                        <p class="text-light-secondary-text">Payment Method</p>
                                        <span class="text-light-primary-text capitalize">{{ str_replace('_', ' ', $order->payment_method) }}</span>
                                    </li>
                                    <li class="flex items-center justify-between">
                                        <p class="text-light-secondary-text">Subtotal (MRP)</p>
                                        <span class="text-light-primary-text">{{ $order->currency_icon }}{{ number_format($order->sub_total, 2) }}</span>
                                    </li>
                                    @if($shipping && isset($shipping->cost))
                                    <li class="flex items-center justify-between">
                                        <p class="text-light-secondary-text">Delivery Charge</p>
                                        <span class="{{ $shipping->cost > 0 ? 'text-light-primary-text' : 'text-success-dark' }}">
                                            {{ $shipping->cost > 0 ? $order->currency_icon . number_format($shipping->cost, 2) : 'Free' }}
                                        </span>
                                    </li>
                                    @endif
                                    @if($coupon && !empty($coupon->code))
                                    <li class="flex items-center justify-between">
                                        <p class="text-light-secondary-text">
                                            Coupon
                                            <span class="inline-block bg-[rgba(84,214,44,0.16)] text-success-dark text-xs px-2 py-0.5 rounded-full ml-1">
                                                {{ $coupon->code }}
                                            </span>
                                        </p>
                                        <span class="text-error">-{{ $order->currency_icon }}{{ number_format($coupon->discount, 2) }}</span>
                                    </li>
                                    @endif
                                </ul>

                                <div class="flex items-center justify-between py-5 border-b border-gray-300">
                                    <h5 class="font-bold text-light-primary-text">Amount Payable</h5>
                                    <h5 class="font-bold text-primary">
                                        {{ $order->currency_icon }}{{ number_format($order->amount, 2) }}
                                    </h5>
                                </div>

                                <div class="flex items-center justify-between pt-4">
                                    <p class="text-light-secondary-text text-sm">Payment Status</p>
                                    @if($order->payment_status == 1)
                                        <span class="inline-flex items-center gap-x-1 bg-[rgba(84,214,44,0.16)] text-success-dark text-sm font-semibold px-3 py-1 rounded-full">
                                            <i class="hgi hgi-stroke hgi-tick-02 text-base"></i> Paid
                                        </span>
                                    @else
                                        <span class="inline-flex items-center gap-x-1 bg-[rgba(255,72,66,0.16)] text-error-dark text-sm font-semibold px-3 py-1 rounded-full">
                                            <i class="hgi hgi-stroke hgi-alert-02 text-base"></i> Unpaid
                                        </span>
                                    @endif
                                </div>

                                <div class="flex items-center justify-end gap-x-4 pt-8">
                                    <a href="{{ route('home') }}"
                                       class="btn btn-primary outline btn-large py-[11px] flex-1 md:flex-none md:px-8 rounded-[80px] transition-colors duration-300 ease-in-out shadow-none">
                                        Order Again
                                    </a>
                                    <button onclick="window.print()"
                                        class="btn btn-primary btn-large py-[11px] flex-1 md:flex-none md:px-8 rounded-[80px] inline-flex items-center justify-center gap-x-2">
                                        <i class="hgi hgi-stroke hgi-printer text-xl leading-5"></i>
                                        Download Invoice
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</section>

@endsection
