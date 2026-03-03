@extends('frontend.layouts.master')

@section('content')

    <!-- ========== Page Banner Start ========== -->
    <section class="py-10 bg-gray-100">
        <div class="container">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-y-2">
                <h2 class="text-2xl font-bold font-dm-sans">Flash Sale</h2>
                <ul class="flex items-center gap-x-2 text-sm text-light-secondary-text">
                    <li><a href="{{ url('/') }}" class="hover:text-primary transition-colors">Home</a></li>
                    <li><i class="hgi hgi-stroke hgi-arrow-right-01 text-xs"></i></li>
                    <li class="text-primary font-medium">Flash Sale</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- ========== Page Banner End ========== -->

    <!-- ========== Flash Sale Countdown Start ========== -->
    @if($flashSaleDate)
    <section class="py-10 bg-white border-b border-gray-200">
        <div class="container">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-y-6">
                <div>
                    <h5 class="text-primary font-semibold mb-1">Limited Time Offer</h5>
                    <h2 class="text-2xl font-bold font-dm-sans">Hot Deals — Ends Soon</h2>
                </div>
                <div
                    class="sellzy-countdown flex items-center gap-x-3"
                    data-countdown-date="{{ $flashSaleDate->end_date }}"
                >
                    <div class="flex flex-col items-center justify-center w-[80px] h-[76px] bg-primary-lighter rounded-xl text-center">
                        <h5 class="days text-error font-bold text-xl">00</h5>
                        <p class="text-xs text-light-secondary-text pt-1">Jours</p>
                    </div>
                    <p class="font-bold text-xl text-light-secondary-text">:</p>
                    <div class="flex flex-col items-center justify-center w-[80px] h-[76px] bg-primary-lighter rounded-xl text-center">
                        <h5 class="hours text-error font-bold text-xl">00</h5>
                        <p class="text-xs text-light-secondary-text pt-1">Heures</p>
                    </div>
                    <p class="font-bold text-xl text-light-secondary-text">:</p>
                    <div class="flex flex-col items-center justify-center w-[80px] h-[76px] bg-primary-lighter rounded-xl text-center">
                        <h5 class="minutes text-error font-bold text-xl">00</h5>
                        <p class="text-xs text-light-secondary-text pt-1">Min</p>
                    </div>
                    <p class="font-bold text-xl text-light-secondary-text">:</p>
                    <div class="flex flex-col items-center justify-center w-[80px] h-[76px] bg-primary-lighter rounded-xl text-center">
                        <h5 class="seconds text-error font-bold text-xl">00</h5>
                        <p class="text-xs text-light-secondary-text pt-1">Sec</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif
    <!-- ========== Flash Sale Countdown End ========== -->

    <!-- ========== Flash Sale Products Start ========== -->
    <section class="py-[70px]">
        <div class="container">

            @if($flashSaleItems->isNotEmpty())
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4 md:gap-6">

                @foreach($flashSaleItems as $item)
                @php
                    $product = $item->product;
                    if (!$product) continue;
                    $hasDiscount = $product->offer_price > 0
                        && $product->offer_start_date <= now()
                        && $product->offer_end_date >= now();
                    $displayPrice = $hasDiscount ? $product->offer_price : $product->price;
                    $discountPct  = $hasDiscount
                        ? round((($product->price - $product->offer_price) / $product->price) * 100)
                        : 0;
                @endphp
                <div class="rounded-2xl product-card-1 p-4 group bg-white wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                    <div class="product-image-container relative">
                        <div class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden">
                            {{-- TODO: route('frontend.product.show', $product->slug) --}}
                            <a href="#">
                                <img
                                    src="{{ asset($product->thumb_image) }}"
                                    alt="{{ $product->name }}"
                                    class="w-full group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300"
                                />
                            </a>
                        </div>

                        @if($hasDiscount)
                        <span class="product-discount-badge absolute top-[11px] left-0 bg-error text-warning-lighter font-medium text-sm leading-[22px] px-1 after:absolute after:top-0 after:left-full after:z-10 after:w-1 after:h-full after:bg-[url('images/discount-shape.html')] after:bg-contain">
                            -{{ $discountPct }}%
                        </span>
                        @endif

                        {{-- TODO: wishlist / compare / quick-view (fonctionnalités à implémenter)
                        <div class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 ...">
                            <ul class="flex items-center gap-x-px">
                                <li><a aria-label="Add to Wishlist" class="product-btn-action-item ..." href="#"><i class="hgi hgi-stroke hgi-favourite text-2xl"></i></a></li>
                                <li><a aria-label="Quick view" class="quick-view-sidebar-btn product-btn-action-item ..." href="#"><i class="hgi hgi-stroke hgi-view text-2xl"></i></a></li>
                            </ul>
                        </div>
                        --}}
                    </div>

                    <div class="product-content">
                        @if($product->category)
                        <p class="text-sm leading-[22px] mb-2 text-light-secondary-text">
                            {{ $product->category->name }}
                        </p>
                        @endif

                        <h5 class="text-sm leading-6 font-semibold font-dm-sans mb-3 line-clamp-2">
                            {{-- TODO: route('frontend.product.show', $product->slug) --}}
                            <a href="#" class="hover:text-primary transition-colors">{{ $product->name }}</a>
                        </h5>

                        {{-- TODO: système de notation (à implémenter)
                        <div class="rating-section flex items-center mb-3"> ... </div>
                        --}}

                        <div class="price-section flex items-center gap-x-2 flex-wrap mb-3">
                            <span class="current-price text-base font-bold text-light-primary-text">
                                {{ number_format($displayPrice, 2) }} €
                            </span>
                            @if($hasDiscount)
                            <span class="old-price text-sm font-normal text-light-disabled-text line-through">
                                {{ number_format($product->price, 2) }} €
                            </span>
                            @endif
                        </div>

                        {{-- TODO: panier (fonctionnalité à implémenter)
                        <a class="btn btn-primary rounded-full text-sm w-full py-2" href="#">
                            <i class="hgi hgi-stroke hgi-shopping-cart-02 text-white"></i>
                            <span>Add to Cart</span>
                        </a>
                        --}}
                    </div>
                </div>
                @endforeach

            </div>

            {{-- Pagination --}}
            @if($flashSaleItems->hasPages())
            <div class="flex justify-center mt-10">
                {{ $flashSaleItems->links() }}
            </div>
            @endif

            @else
            <div class="text-center py-20">
                <i class="hgi hgi-stroke hgi-sale-tag-02 text-6xl text-gray-300 mb-4 block"></i>
                <h3 class="text-xl font-semibold text-light-secondary-text mb-2">Aucune promotion en cours</h3>
                <p class="text-light-disabled-text">Revenez bientôt pour découvrir nos offres flash.</p>
                <a href="{{ url('/') }}" class="btn btn-primary rounded-full px-8 py-3 mt-6 inline-block">
                    Retour à l'accueil
                </a>
            </div>
            @endif

        </div>
    </section>
    <!-- ========== Flash Sale Products End ========== -->

    @include('frontend.sections.subscribe')

@endsection
