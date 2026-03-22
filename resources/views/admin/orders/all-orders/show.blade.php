@extends('admin.layouts.layout')

@section('content')

@php
    $address  = json_decode($order->order_address);
    $shipping = json_decode($order->shipping_method);
    $coupon   = json_decode(@$order->coupon);
@endphp

{{-- Page Header --}}
<div class="row mb-3">
    <div class="col">
        <h2 class="page-title">Invoice</h2>
        <p class="text-muted mt-1">Invoice #{{ $order->invoice_id }}</p>
    </div>
    <div class="col-auto ms-auto d-print-none">
        <a href="{{ route('admin.all-orders.index') }}" class="btn btn-secondary me-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M15 6l-6 6l6 6"/>
            </svg>
            Back
        </a>
        <button type="button" class="btn btn-primary" onclick="window.print();">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M17 17h2a2 2 0 0 0 2 -2v-4a2 2 0 0 0 -2 -2h-14a2 2 0 0 0 -2 2v4a2 2 0 0 0 2 2h2"/>
                <path d="M17 9v-4a2 2 0 0 0 -2 -2h-6a2 2 0 0 0 -2 2v4"/>
                <path d="M7 13m0 2a2 2 0 0 1 2 -2h6a2 2 0 0 1 2 2v4a2 2 0 0 1 -2 2h-6a2 2 0 0 1 -2 -2z"/>
            </svg>
            Print Invoice
        </button>
    </div>
</div>

{{-- Invoice Card --}}
<div class="card">
    <div class="card-body">

        {{-- Header: Company & Client --}}
        <div class="row mb-4">
            <div class="col-6">
                <div class="d-flex align-items-center mb-2">
                    <span class="avatar avatar-md me-3 bg-primary-lt">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon text-primary" width="24" height="24"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M3 21l18 0"/><path d="M9 8l1 0"/><path d="M9 12l1 0"/>
                            <path d="M9 16l1 0"/><path d="M14 8l1 0"/><path d="M14 12l1 0"/>
                            <path d="M14 16l1 0"/>
                            <path d="M5 21v-16a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v16"/>
                        </svg>
                    </span>
                    <div>
                        <h4 class="mb-0">{{ @$settings->site_name }}</h4>
                        <span class="text-muted">Vendor</span>
                    </div>
                </div>
                <address class="text-muted">
                    {!! strip_tags($settings->contact_address) !!}<br>
                    {{ @$settings->contact_email }}<br>
                    {{ @$settings->contact_phone }}
                </address>
            </div>

            <div class="col-6 text-end">
                <div class="d-flex align-items-center justify-content-end mb-2">
                    <div class="me-3">
                        <h4 class="mb-0">{{ $address->name }}</h4>
                        <span class="text-muted">Client</span>
                    </div>
                    <span class="avatar avatar-md bg-green-lt">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon text-green" width="24" height="24"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"/>
                            <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"/>
                        </svg>
                    </span>
                </div>
                <address class="text-muted">
                    {!! strip_tags($address->address) !!}<br>
                    {{ $address->state }}, {{ $address->city }}, {{ $address->country }}, {{ $address->zip }}<br>
                    {{ $address->email }}<br>
                    {{ $address->phone }}
                </address>
            </div>
        </div>

        <hr class="mb-4">

        {{-- Invoice Meta & Order Status --}}
        <div class="row mb-4">
            <div class="col-md-4">
                <div class="mb-2">
                    <span class="text-muted">Invoice number</span>
                    <div class="fw-bold fs-3">#{{ $order->invoice_id }}</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-2">
                    <span class="text-muted">Date issued</span>
                    <div class="fw-bold">{{ \Carbon\Carbon::parse($order->created_at)->format('d M Y') }}</div>
                </div>
            </div>
            <div class="col-md-4">
                <label class="form-label text-muted">Order Status</label>
                <select name="order_status" data-id="{{ $order->id }}" class="form-control order_status">
                                        <option @selected($order->order_status === 'pending') value="pending">Pending</option>
                                        <option @selected($order->order_status === 'processed_and_ready_to_ship') value="processed_and_ready_to_ship">Processed and Ready to Ship</option>
                                        <option @selected($order->order_status === 'dropped_off') value="dropped_off">Dropped Off</option>
                                        <option @selected($order->order_status === 'shipped') value="shipped">Shipped</option>
                                        <option @selected($order->order_status === 'out_for_delivery') value="out_for_delivery">Out For Delivery</option>
                                        <option @selected($order->order_status === 'delivered') value="delivered">Delivered</option>
                                        <option @selected($order->order_status === 'canceled') value="canceled">Canceled</option>
                                    </select>
            </div>
        </div>

        {{-- Products Table --}}
        <div class="table-responsive mb-4">
            <table class="table table-vcenter card-table">
                <thead>
                    <tr>
                        <th class="text-center" style="width:5%">#</th>
                        <th style="width:10%">Image</th>
                        <th>Product</th>
                        <th>Vendor</th>
                        <th class="text-center" style="width:8%">Qty</th>
                        <th class="text-end" style="width:10%">Unit Price</th>
                        <th class="text-end" style="width:12%">Amount</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($order->orderProducts as $product)
                        @php $variants = json_decode($product->variants, true) ?? []; @endphp
                        <tr>
                            <td class="text-center text-muted">{{ $loop->iteration }}</td>
                            <td>
                                <span class="avatar avatar-md rounded"
                                    style="background-image: url('{{ asset($product->product->thumb_image ?? 'admin_assets/images/placeholder.jpg') }}')">
                                </span>
                            </td>
                            <td>
                                <div class="fw-bold"><a href="{{ route('product-details.show', $product->product_id) }}"> <p class="strong mb-1">{{ $product->product_name }}</p></a></div>
                                @foreach ($variants as $key => $variant)
                                    <div class="text-muted small">
                                        {{ $key }}: {{ $variant['name'] }}
                                        <span class="text-green">(+{{ $order->currency_icon }}{{ $variant['price'] }})</span>
                                    </div>
                                @endforeach
                            </td>
                            <td>
                                <span class="badge bg-blue-lt">
                                    {{ $product->vendor_id === 0 ? 'Admin Vendor' : ($product->vendor->name ?? 'N/A') }}
                                </span>
                            </td>
                            <td class="text-center">{{ $product->qty }}</td>
                            <td class="text-end">{{ $order->currency_icon }}{{ number_format($product->unit_price, 2) }}</td>
                            <td class="text-end fw-bold">
                                {{ $order->currency_icon }}{{ number_format($product->unit_price * $product->qty + ($product->variant_total ?? 0), 2) }}
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center text-muted py-4">No products found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        {{-- Totals --}}
        <div class="row justify-content-end">
            <div class="col-md-4">
                <table class="table table-sm">
                    <tr>
                        <td class="text-muted">Subtotal</td>
                        <td class="text-end">{{ $order->currency_icon }}{{ number_format($order->sub_total, 2) }}</td>
                    </tr>
                    <tr>
                        <td class="text-muted">Shipping</td>
                        <td class="text-end text-orange">+{{ $order->currency_icon }}{{ number_format($shipping->cost, 2) }}</td>
                    </tr>
                    <tr>
                        <td class="text-muted">
                            Coupon
                            @if(@$coupon->code)
                                <span class="badge bg-green-lt ms-1">{{ $coupon->code }}</span>
                            @else
                                <span class="text-muted">(None)</span>
                            @endif
                        </td>
                        <td class="text-end text-green coupon-amount">
                            -{{ $order->currency_icon }}{{ number_format(@$coupon->code ? @$coupon->discount : 0, 2) }}
                        </td>
                    </tr>
                    <tr class="fw-bold fs-4">
                        <td>Total</td>
                        <td class="text-end text-primary">{{ $order->currency_icon }}{{ number_format($order->amount, 2) }}</td>
                    </tr>
                </table>
            </div>
        </div>

        {{-- Footer Note --}}
        <div class="text-center text-muted mt-4 pt-3 border-top">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon me-1 text-green" width="24" height="24"
                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"/>
                <path d="M9 12l2 2l4 -4"/>
            </svg>
            Thank you very much for doing business with us. We look forward to working with you again!
        </div>

    </div>
</div>

@endsection