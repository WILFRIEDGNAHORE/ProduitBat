@extends('frontend.layouts.master')

@section('content')

{{-- ========== Breadcrumb ========== --}}
<section class="py-10 bg-gray-100">
    <div class="container">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-y-2">
            <h2 class="text-2xl font-bold font-dm-sans">Nos Produits</h2>
            <ul class="flex items-center gap-x-2 text-sm text-light-secondary-text">
                <li><a href="{{ url('/') }}" class="hover:text-primary transition-colors">Accueil</a></li>
                <li><i class="hgi hgi-stroke hgi-arrow-right-01 text-xs"></i></li>
                <li class="text-primary font-medium">Nos Produits</li>
            </ul>
        </div>
    </div>
</section>

{{-- ========== Shop Layout ========== --}}
<div class="pb-[90px] pt-10">
    <div class="container">
        <div class="grid grid-cols-12 gap-x-6 gap-y-6">

            {{-- ===== Sidebar ===== --}}
            <div class="xl:col-span-3 lg:col-span-4 col-span-12 row-start-2 lg:row-start-auto">
                <div class="sidebar sticky top-20">
                    <form action="{{ route('shop.index') }}" method="GET" id="filter-form">
                        <div class="border border-gray-300 rounded-2xl">

                            {{-- Header --}}
                            <div class="px-6 py-4 bg-gray-200 rounded-t-2xl">
                                <div class="flex items-center justify-between">
                                    <h5 class="text-light-primary-text">Filtres</h5>
                                    <a href="{{ route('shop.index') }}" class="text-primary text-base leading-[26px] font-semibold hover:underline">Tout effacer</a>
                                </div>
                            </div>

                            <div class="px-6 py-6 flex flex-col gap-y-6">

                                {{-- Search --}}
                                <div class="relative">
                                    <div class="input-group medium pl-4 py-2 pr-2.5 rounded-[100px] relative w-full border border-gray-300 flex items-center gap-x-2">
                                        <i class="hgi hgi-stroke hgi-search-01 text-xl text-light-primary-text flex-none"></i>
                                        <input
                                            type="text"
                                            name="search"
                                            value="{{ request('search') }}"
                                            class="form-control border-0 p-0 focus:outline-none text-sm w-full"
                                            placeholder="Rechercher un produit…"
                                        />
                                    </div>
                                </div>

                                {{-- Categories --}}
                                <div class="widget-category">
                                    <div class="flex flex-col gap-y-4 pb-6 border-b border-gray-300">
                                        <div class="flex items-center justify-between">
                                            <h6>Catégorie</h6>
                                            @if(request('category'))
                                                <a href="{{ route('shop.index', request()->except('category', 'page')) }}" class="text-sm hover:underline hover:text-primary transition-colors">Reset</a>
                                            @endif
                                        </div>
                                        <div class="max-h-[200px] overflow-y-auto pr-1 flex flex-col gap-y-2">
                                            @foreach($categories as $cat)
                                                <label class="group flex items-center justify-between w-full cursor-pointer">
                                                    <span class="flex items-center gap-x-2">
                                                        <span class="group-has-[input:checked]:group-hover:bg-primary/8 flex items-center justify-center w-9 h-9 bg-transparent rounded-full group-hover:bg-[#919EAB]/8 transition-colors">
                                                            <span class="relative inline-flex w-5 h-5 items-center justify-center">
                                                                <input
                                                                    type="checkbox"
                                                                    name="category[]"
                                                                    value="{{ $cat->id }}"
                                                                    {{ in_array($cat->id, (array) request('category', [])) ? 'checked' : '' }}
                                                                    class="peer appearance-none w-full h-full border-2 focus:outline-none checked:border-none border-gray-300 rounded-sm bg-white checked:bg-primary transition-all"
                                                                />
                                                                <span class="absolute inset-0 inline-flex items-center justify-center text-white opacity-0 peer-checked:opacity-100 transition-all">
                                                                    <i class="hgi hgi-stroke hgi-tick-02 text-[18px] leading-[18px]"></i>
                                                                </span>
                                                            </span>
                                                        </span>
                                                        <span class="text-light-primary-text group-hover:text-primary transition-colors text-sm">{{ $cat->name }}</span>
                                                    </span>
                                                    <span class="text-xs text-light-disabled-text group-hover:text-primary transition-colors">({{ $cat->products_count }})</span>
                                                </label>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                                {{-- Price Range --}}
                                <div class="widget-price">
                                    <div class="flex flex-col gap-y-4 pb-6 border-b border-gray-300">
                                        <h6>Prix (CFA)</h6>
                                        <div class="flex items-center gap-x-3">
                                            <input
                                                type="number"
                                                name="min_price"
                                                value="{{ request('min_price', $minPrice) }}"
                                                class="form-control border border-gray-300 rounded-lg px-3 py-2 text-sm w-full"
                                                placeholder="Min"
                                            />
                                            <span class="text-light-disabled-text">—</span>
                                            <input
                                                type="number"
                                                name="max_price"
                                                value="{{ request('max_price', $maxPrice) }}"
                                                class="form-control border border-gray-300 rounded-lg px-3 py-2 text-sm w-full"
                                                placeholder="Max"
                                            />
                                        </div>
                                    </div>
                                </div>

                                {{-- Brands --}}
                                @if($brands->count())
                                <div class="widget-brand">
                                    <div class="flex flex-col gap-y-4 pb-6 border-b border-gray-300">
                                        <div class="flex items-center justify-between">
                                            <h6>Marque</h6>
                                            @if(request('brand'))
                                                <a href="{{ route('shop.index', request()->except('brand', 'page')) }}" class="text-sm hover:underline hover:text-primary transition-colors">Reset</a>
                                            @endif
                                        </div>
                                        <div class="max-h-[170px] overflow-y-auto pr-1 flex flex-col gap-y-2">
                                            @foreach($brands as $brand)
                                                <label class="group flex items-center justify-between w-full cursor-pointer">
                                                    <span class="flex items-center gap-x-2">
                                                        <span class="group-has-[input:checked]:group-hover:bg-primary/8 flex items-center justify-center w-9 h-9 bg-transparent rounded-full group-hover:bg-[#919EAB]/8 transition-colors">
                                                            <span class="relative inline-flex w-5 h-5 items-center justify-center">
                                                                <input
                                                                    type="checkbox"
                                                                    name="brand[]"
                                                                    value="{{ $brand->id }}"
                                                                    {{ in_array($brand->id, (array) request('brand', [])) ? 'checked' : '' }}
                                                                    class="peer appearance-none w-full h-full border-2 focus:outline-none checked:border-none border-gray-300 rounded-sm bg-white checked:bg-primary transition-all"
                                                                />
                                                                <span class="absolute inset-0 inline-flex items-center justify-center text-white opacity-0 peer-checked:opacity-100 transition-all">
                                                                    <i class="hgi hgi-stroke hgi-tick-02 text-[18px] leading-[18px]"></i>
                                                                </span>
                                                            </span>
                                                        </span>
                                                        <span class="text-light-primary-text group-hover:text-primary transition-colors text-sm">{{ $brand->name }}</span>
                                                    </span>
                                                    <span class="text-xs text-light-disabled-text group-hover:text-primary transition-colors">({{ $brand->products_count }})</span>
                                                </label>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                @endif

                                {{-- Apply button --}}
                                <button type="submit" class="btn btn-primary rounded-full w-full py-2.5 font-semibold text-sm">
                                    Appliquer les filtres
                                </button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>

            {{-- ===== Product Grid ===== --}}
            <div class="xl:col-span-9 lg:col-span-8 col-span-12">

                {{-- Toolbar --}}
                <div class="flex flex-wrap items-center justify-between gap-y-4 mb-6 pb-4 border-b border-gray-200">
                    <p class="text-light-secondary-text text-sm">
                        Affichage {{ $products->firstItem() }}–{{ $products->lastItem() }} sur {{ $products->total() }} résultats
                    </p>
                    <div class="relative min-w-[160px]">
                        <select
                            id="sorting"
                            name="sort"
                            onchange="this.form && this.form.submit(); var url=new URL(window.location); url.searchParams.set('sort',this.value); window.location=url.toString();"
                            class="filter-select label w-full border border-gray-300 rounded-[80px] px-4 py-2 text-sm pr-8 appearance-none focus:outline-none"
                        >
                            <option value="latest"     {{ $sort === 'latest'     ? 'selected' : '' }}>Plus récents</option>
                            <option value="price_asc"  {{ $sort === 'price_asc'  ? 'selected' : '' }}>Prix croissant</option>
                            <option value="price_desc" {{ $sort === 'price_desc' ? 'selected' : '' }}>Prix décroissant</option>
                            <option value="name_asc"   {{ $sort === 'name_asc'   ? 'selected' : '' }}>A → Z</option>
                            <option value="name_desc"  {{ $sort === 'name_desc'  ? 'selected' : '' }}>Z → A</option>
                        </select>
                    </div>
                </div>

                {{-- Grid --}}
                <div class="grid 2xl:grid-cols-5 xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-6 pb-10">
                    @forelse($products as $product)
                        @php
                            $pct = ($product->offer_price && $product->price > 0)
                                ? round((($product->price - $product->offer_price) / $product->price) * 100)
                                : null;
                        @endphp
                        <div class="wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                            <div class="border border-gray-300 rounded-2xl product-card-1 p-4 group h-full flex flex-col">
                                <div class="product-image-container relative mb-4">
                                    <div class="product-image rounded-xl bg-[#F4F3F5] overflow-hidden">
                                        <a href="{{ route('product-details.show', $product->id) }}">
                                            <img
                                                src="{{ asset($product->thumb_image) }}"
                                                alt="{{ $product->name }}"
                                                class="w-full h-[200px] object-cover group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300"
                                            />
                                        </a>
                                    </div>
                                    @if($pct)
                                        <span class="product-discount-badge absolute top-[11px] left-0 bg-error text-warning-lighter font-medium text-sm leading-[22px] px-1">
                                            {{ $pct }}% OFF
                                        </span>
                                    @endif
                                    <div class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3">
                                        <ul class="flex items-center gap-x-px">
                                            <li>
                                                <a aria-label="Add to Wishlist"
                                                    class="product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                                                    href="#">
                                                    <i class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a aria-label="Quick view"
                                                    class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                                                    href="#">
                                                    <i class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content flex flex-col flex-1">
                                    <h5 class="text-base leading-6 font-semibold font-dm-sans mb-2 line-clamp-2 flex-1">
                                        <a href="{{ route('product-details.show', $product->id) }}">{{ $product->name }}</a>
                                    </h5>
                                    <div class="price-section flex items-center gap-x-3 mb-3 flex-wrap">
                                        <span class="current-price text-base font-semibold text-light-primary-text">
                                            {{ number_format($product->offer_price ?: $product->price) }} CFA
                                        </span>
                                        @if($product->offer_price)
                                            <span class="old-price text-sm font-normal text-light-disabled-text line-through">
                                                {{ number_format($product->price) }} CFA
                                            </span>
                                        @endif
                                        @if($pct)
                                            <span class="text-sm font-semibold text-error">{{ $pct }}% OFF</span>
                                        @endif
                                    </div>
                                    <div class="btn-section flex items-center gap-x-3">
                                        <a class="size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300" href="#">
                                            <i class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"></i>
                                        </a>
                                        <form action="{{ route('add-to-cart') }}" method="POST" class="flex-1 shopping_cart_form">
                                            @csrf
                                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                                            <input type="hidden" name="qty" value="1">
                                            <button type="submit" class="btn btn-primary rounded-full font-semibold text-sm leading-6 px-4 py-2 w-full flex items-center justify-center gap-x-2">
                                                <i class="hgi hgi-stroke hgi-shopping-cart-02 text-base text-white"></i>
                                                <span>Ajouter</span>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-span-full text-center py-20 text-light-secondary-text">
                            <i class="hgi hgi-stroke hgi-package text-5xl mb-4 block"></i>
                            <p class="text-lg">Aucun produit trouvé.</p>
                            <a href="{{ route('shop.index') }}" class="btn btn-primary rounded-full mt-4 px-6 py-2 inline-block">Voir tous les produits</a>
                        </div>
                    @endforelse
                </div>

                {{-- Pagination --}}
                @if($products->hasPages())
                    <div class="flex justify-center">
                        <ul class="flex items-center gap-x-2 flex-wrap">
                            {{-- Previous --}}
                            <li class="group blog-pagination-item">
                                @if($products->onFirstPage())
                                    <span class="inline-flex items-center justify-center md:size-10 size-9 rounded-[50px] bg-white border border-gray-200 opacity-40 cursor-not-allowed">
                                        <i class="hgi hgi-stroke hgi-arrow-left-01 text-[20px] leading-5 text-light-primary-text"></i>
                                    </span>
                                @else
                                    <a href="{{ $products->previousPageUrl() }}" class="inline-flex items-center justify-center md:size-10 size-9 rounded-[50px] bg-white cursor-pointer border border-gray-300 hover:border-primary hover:bg-[rgba(0,171,85,0.08)] transition-colors">
                                        <i class="hgi hgi-stroke hgi-arrow-left-01 text-[20px] leading-5 text-light-primary-text hover:text-primary"></i>
                                    </a>
                                @endif
                            </li>

                            {{-- Pages --}}
                            @foreach($products->getUrlRange(max(1, $products->currentPage()-2), min($products->lastPage(), $products->currentPage()+2)) as $page => $url)
                                <li class="group blog-pagination-item">
                                    <a
                                        href="{{ $url }}"
                                        class="inline-flex items-center justify-center md:size-10 size-9 rounded-[50px] text-base leading-6 cursor-pointer border transition-colors duration-300
                                            {{ $page === $products->currentPage()
                                                ? 'bg-primary text-white border-primary font-semibold'
                                                : 'bg-white border-gray-300 text-light-primary-text hover:text-primary hover:font-semibold hover:border-primary hover:bg-[rgba(0,171,85,0.08)]'
                                            }}"
                                    >{{ $page }}</a>
                                </li>
                            @endforeach

                            {{-- Next --}}
                            <li class="group blog-pagination-item">
                                @if($products->hasMorePages())
                                    <a href="{{ $products->nextPageUrl() }}" class="inline-flex items-center justify-center md:size-10 size-9 rounded-[50px] bg-white cursor-pointer border border-gray-300 hover:border-primary hover:bg-[rgba(0,171,85,0.08)] transition-colors">
                                        <i class="hgi hgi-stroke hgi-arrow-right-01 text-[20px] leading-5 text-light-primary-text hover:text-primary"></i>
                                    </a>
                                @else
                                    <span class="inline-flex items-center justify-center md:size-10 size-9 rounded-[50px] bg-white border border-gray-200 opacity-40 cursor-not-allowed">
                                        <i class="hgi hgi-stroke hgi-arrow-right-01 text-[20px] leading-5 text-light-primary-text"></i>
                                    </span>
                                @endif
                            </li>
                        </ul>
                    </div>
                @endif

            </div>
            {{-- ===== End Product Grid ===== --}}

        </div>
    </div>
</div>

@endsection
