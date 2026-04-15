@php
    $statusConfig = [
        'pending'                    => ['label' => 'Pending',      'class' => 'bg-[rgba(255,193,7,0.16)] text-warning-dark'],
        'processed_and_ready_to_ship'=> ['label' => 'Processing',   'class' => 'bg-[rgba(255,193,7,0.16)] text-warning-dark'],
        'dropped_off'                => ['label' => 'Dropped Off',  'class' => 'bg-[rgba(255,193,7,0.16)] text-warning-dark'],
        'shipped'                    => ['label' => 'Shipped',      'class' => 'bg-[rgba(24,144,255,0.16)] text-info-dark'],
        'out_for_delivery'           => ['label' => 'Out for Delivery', 'class' => 'bg-[rgba(24,144,255,0.16)] text-info-dark'],
        'delivered'                  => ['label' => 'Delivered',    'class' => 'bg-[rgba(84,214,44,0.16)] text-success-dark'],
        'canceled'                   => ['label' => 'Cancelled',    'class' => 'bg-[rgba(255,72,66,0.16)] text-error-dark'],
    ];
    $cfg = $statusConfig[$order->order_status] ?? ['label' => ucfirst(str_replace('_', ' ', $order->order_status)), 'class' => 'bg-gray-200 text-gray-600'];
    $paymentLabel = $order->payment_status == 1 ? 'Paid' : 'Unpaid';
    $paymentClass = $order->payment_status == 1 ? 'text-success-dark' : 'text-error-dark';
@endphp

<div class="order-history-table-wrapper border-gray-300 rounded-2xl border overflow-x-auto">
  <table class="w-full order-history-table">
    <thead>
      <tr class="border-b border-gray-300">
        <th class="py-5 px-6">
          <div class="flex items-center justify-between">
            <span>Order ID : #{{ $order->invoice_id }}</span>
            <button class="btn btn-small {{ $cfg['class'] }} py-[7px] px-2 text-xs leading-[18px] font-normal rounded-[90px]">
              {{ $cfg['label'] }}
            </button>
          </div>
        </th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="lg:px-6 px-4 py-6 border-b border-gray-300">
          <ul class="flex flex-col gap-y-4">
            <li class="flex items-center justify-between">
              <p class="text-light-primary-text font-normal inline-flex items-center md:gap-x-4 gap-x-2">
                <span class="inline-flex items-center justify-center">
                  <i class="hgi hgi-stroke hgi-calendar-03 text-2xl leading-6"></i>
                </span>
                Order Date:
              </p>
              <span class="font-semibold text-light-primary-text">
                {{ $order->created_at->format('h:i A, d F, Y') }}
              </span>
            </li>
            <li class="flex items-center justify-between">
              <p class="text-light-primary-text font-normal inline-flex items-center md:gap-x-4 gap-x-2">
                <span class="inline-flex items-center justify-center">
                  <i class="hgi hgi-stroke hgi-delivery-box-01 text-2xl leading-6"></i>
                </span>
                Order Items
              </p>
              <span class="font-semibold text-light-primary-text">
                {{ $order->product_qty }} {{ Str::plural('Product', $order->product_qty) }}
              </span>
            </li>
            <li class="flex items-center justify-between">
              <p class="text-light-primary-text font-normal inline-flex items-center md:gap-x-4 gap-x-2">
                <span class="inline-flex items-center justify-center">
                  <i class="hgi hgi-stroke hgi-truck text-2xl leading-6"></i>
                </span>
                Delivery Method
              </p>
              <p class="font-semibold text-light-primary-text">
                {{ $order->shipping_method ?? 'Standard Delivery' }}
              </p>
            </li>
            <li class="flex items-center justify-between">
              <p class="text-light-primary-text font-normal inline-flex items-center md:gap-x-4 gap-x-2">
                <span class="inline-flex items-center justify-center">
                  <i class="hgi hgi-stroke hgi-payment-success-01 text-2xl leading-6"></i>
                </span>
                Amount Payable
              </p>
              <p class="font-semibold text-light-primary-text">
                {{ $order->currency_icon }}{{ number_format($order->amount, 2) }}
                <span class="{{ $paymentClass }} ml-0.5">({{ $paymentLabel }})</span>
              </p>
            </li>
          </ul>
        </td>
      </tr>
      <tr>
        <td class="p-4">
          <div class="flex items-center justify-between">
            <a href="{{ route('user.order.show', $order->id) }}"
               class="btn btn-large btn-default outline py-1.5 px-7 text-sm leading-[22px] font-semibold rounded-[80px] shadow-none">
              View Details
            </a>
            <a href="{{ route('home') }}" class="btn btn-large btn-primary py-[7px] px-[25px] text-sm leading-[22px] font-semibold rounded-[80px]">
              Order Again
            </a>
          </div>
        </td>
      </tr>
    </tbody>
  </table>
</div>
