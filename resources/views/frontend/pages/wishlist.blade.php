@extends('frontend.layouts.master')

@section('title') Ma liste de souhaits @endsection

@section('content')

{{-- Breadcrumb --}}
<section class="py-10 bg-gray-100">
    <div class="container">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-y-2">
            <h2 class="text-2xl font-bold font-dm-sans">Ma liste de souhaits</h2>
            <ul class="flex items-center gap-x-2 text-sm text-light-secondary-text">
                <li><a href="{{ url('/') }}" class="hover:text-primary transition-colors">Accueil</a></li>
                <li><i class="hgi hgi-stroke hgi-arrow-right-01 text-xs"></i></li>
                <li class="text-primary font-medium">Favoris</li>
            </ul>
        </div>
    </div>
</section>

<div class="pb-[90px] pt-10">
    <div class="container">

        @if($items->isEmpty())
            <div class="flex flex-col items-center justify-center py-20 gap-y-4">
                <i class="hgi hgi-stroke hgi-favourite text-7xl text-gray-300"></i>
                <h4 class="text-light-secondary-text text-xl">Votre liste de souhaits est vide</h4>
                <a href="{{ route('shop.index') }}" class="btn btn-primary rounded-full px-8 py-3">
                    Découvrir nos produits
                </a>
            </div>
        @else
            <div class="flex items-center justify-between mb-6">
                <p class="text-light-secondary-text">{{ $items->count() }} produit(s) dans vos favoris</p>
                <form action="{{ route('wishlist.remove') }}" method="POST"
                      onsubmit="return confirm('Vider toute la liste de souhaits ?')">
                    @csrf
                    <input type="hidden" name="product_id" value="all">
                    {{-- bouton retirer tout, s'il y en a beaucoup --}}
                </form>
            </div>

            <div class="grid grid-cols-12 gap-6">
                @foreach($items as $item)
                    @php $product = $item->product; $pct = null;
                        if ($product->offer_price && $product->price > 0) {
                            $pct = round((($product->price - $product->offer_price) / $product->price) * 100);
                        }
                    @endphp
                    @if($product)
                    <div class="2xl:col-span-2 lg:col-span-3 md:col-span-4 sm:col-span-6 col-span-12">
                        <div class="border border-gray-300 rounded-2xl product-card-1 p-4 group relative">

                            {{-- Bouton retirer --}}
                            <form action="{{ route('wishlist.remove') }}" method="POST"
                                  class="absolute top-3 right-3 z-10">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                <button type="submit"
                                    class="size-8 flex items-center justify-center rounded-full bg-white border border-gray-200 shadow-sm hover:bg-red-50 hover:border-red-200 transition-colors"
                                    title="Retirer des favoris">
                                    <i class="hgi hgi-fill hgi-favourite text-error text-base"></i>
                                </button>
                            </form>

                            <div class="product-image-container relative">
                                <div class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden">
                                    <a href="{{ route('product-details.show', $product->id) }}">
                                        <img src="{{ asset($product->thumb_image) }}"
                                            alt="{{ $product->name }}"
                                            class="w-full h-[180px] object-cover group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300">
                                    </a>
                                </div>
                                @if($pct)
                                    <span class="product-discount-badge absolute top-[11px] left-0 bg-error text-warning-lighter font-medium text-sm leading-[22px] px-1">
                                        {{ $pct }}% OFF
                                    </span>
                                @endif
                                @if($product->qty <= 0)
                                    <span class="absolute top-[11px] right-0 bg-gray-500 text-white font-medium text-sm leading-[22px] px-2 rounded-r-none rounded-l-sm">
                                        Épuisé
                                    </span>
                                @endif
                            </div>

                            <div class="product-content">
                                <p class="text-xs text-light-secondary-text mb-1">{{ $product->category?->name }}</p>
                                <h5 class="text-base leading-6 font-semibold font-dm-sans mb-2 line-clamp-2">
                                    <a href="{{ route('product-details.show', $product->id) }}">{{ $product->name }}</a>
                                </h5>
                                <div class="price-section flex items-center gap-x-3 mb-3">
                                    <span class="current-price text-base font-semibold text-light-primary-text">
                                        {{ number_format($product->offer_price ?: $product->price) }} CFA
                                    </span>
                                    @if($product->offer_price)
                                        <span class="old-price text-sm leading-[22px] font-normal text-light-disabled-text line-through">
                                            {{ number_format($product->price) }} CFA
                                        </span>
                                    @endif
                                </div>
                                <div class="btn-section">
                                    @if($product->qty <= 0)
                                        <button type="button" onclick="notifyProduct(this, {{ $product->id }})"
                                            class="btn btn-error rounded-full font-semibold text-sm leading-6 px-4 py-2 w-full flex items-center justify-center gap-x-2">
                                            <i class="hgi hgi-stroke hgi-notification-01 text-base text-white"></i>
                                            <span>Notifier</span>
                                        </button>
                                    @else
                                        <form action="{{ route('add-to-cart') }}" method="POST" class="shopping_cart_form">
                                            @csrf
                                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                                            <input type="hidden" name="qty" value="1">
                                            <button type="submit" class="btn btn-primary rounded-full font-semibold text-sm leading-6 px-4 py-2 w-full flex items-center justify-center gap-x-2">
                                                <i class="hgi hgi-stroke hgi-shopping-cart-02 text-base text-white"></i>
                                                <span>Ajouter au panier</span>
                                            </button>
                                        </form>
                                    @endif
                                </div>
                            </div>

                        </div>
                    </div>
                    @endif
                @endforeach
            </div>
        @endif

    </div>
</div>

@endsection
