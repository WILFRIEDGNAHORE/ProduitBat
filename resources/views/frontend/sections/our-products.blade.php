@php
    $discountPct = function($product) {
        if ($product->offer_price && $product->price > 0) {
            return round((($product->price - $product->offer_price) / $product->price) * 100);
        }
        return null;
    };
@endphp

<!-- ========== Our Products Section Start ========== -->
<section class="pb-[70px]">
  <div class="container">
    <div
      class="mb-10 flex xl:flex-row flex-col gap-y-4 items-center xl:justify-between wow animate__animated animate__fadeInUp"
      data-wow-delay=".2s"
    >
      <h3>Our Products</h3>
      <div class="flex gap-x-4 overflow-x-scroll lg:overflow-x-visible home-one-product-filter max-w-full">
        <button data-tab="all-products" class="btn btn-default outline btn-large py-2.5 px-[22px] rounded-full">
          All Products
        </button>
        @foreach($productsByCategory as $item)
          <button
            data-tab="cat-{{ $item['category']->id }}"
            class="btn btn-default outline btn-large py-2.5 px-[22px] rounded-full shadow-none"
          >
            {{ $item['category']->name }}
          </button>
        @endforeach
      </div>
    </div>

    <div class="tab-content">
      <!-- All Products Tab -->
      <div class="tab-pane" id="all-products">
        <div class="grid grid-cols-12 gap-6">
          @forelse($allProducts as $product)
            @php $pct = $discountPct($product); @endphp
            <div
              class="2xl:col-span-2 lg:col-span-4 md:col-span-6 col-span-12 wow animate__animated animate__fadeInUp"
              data-wow-delay=".2s"
            >
              <div class="border border-gray-300 rounded-2xl product-card-1 p-4 group">
                <div class="product-image-container relative">
                  <div class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden">
                    <a href="{{ route('product-details.show', $product->id) }}">
                      <img
                        src="{{ asset($product->thumb_image) }}"
                        alt="{{ $product->name }}"
                        class="w-full h-[180px] object-cover group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300"
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
                          class="product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm"
                          href="#">
                          <i class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"></i>
                        </a>
                      </li>
                      <li>
                        <a aria-label="Quick view"
                          class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm"
                          href="#">
                          <i class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="product-content">
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
                    @if($pct)
                      <span class="discount-percentage text-sm leading-[22px] font-semibold text-error">
                        {{ $pct }}% OFF
                      </span>
                    @endif
                  </div>
                  <div class="btn-section flex items-center gap-x-4">
                    <a class="size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300" href="#">
                      <i class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"></i>
                    </a>
                    <form action="{{ route('add-to-cart') }}" method="POST" class="flex-1 shopping_cart_form">
                      @csrf
                      <input type="hidden" name="product_id" value="{{ $product->id }}">
                      <input type="hidden" name="qty" value="1">
                      <button type="submit" class="btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 w-full flex items-center justify-center gap-x-2">
                        <i class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"></i>
                        <span>Add to Cart</span>
                      </button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          @empty
            <div class="col-span-12 text-center py-10 text-gray-500">No products available.</div>
          @endforelse
        </div>
      </div>

      <!-- Category Tabs -->
      @foreach($productsByCategory as $item)
        <div class="tab-pane" id="cat-{{ $item['category']->id }}">
          <div class="grid grid-cols-12 gap-6">
            @forelse($item['products'] as $product)
              @php $pct = $discountPct($product); @endphp
              <div
                class="2xl:col-span-2 lg:col-span-4 md:col-span-6 col-span-12 wow animate__animated animate__fadeInUp"
                data-wow-delay=".2s"
              >
                <div class="border border-gray-300 rounded-2xl product-card-1 p-4 group">
                  <div class="product-image-container relative">
                    <div class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden">
                      <a href="{{ route('product-details.show', $product->id) }}">
                        <img
                          src="{{ asset($product->thumb_image) }}"
                          alt="{{ $product->name }}"
                          class="w-full h-[180px] object-cover group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300"
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
                            class="product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm"
                            href="#">
                            <i class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"></i>
                          </a>
                        </li>
                        <li>
                          <a aria-label="Quick view"
                            class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm"
                            href="#">
                            <i class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="product-content">
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
                      @if($pct)
                        <span class="discount-percentage text-sm leading-[22px] font-semibold text-error">
                          {{ $pct }}% OFF
                        </span>
                      @endif
                    </div>
                    <div class="btn-section flex items-center gap-x-4">
                      <a class="size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300" href="#">
                        <i class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"></i>
                      </a>
                      <form action="{{ route('add-to-cart') }}" method="POST" class="flex-1 shopping_cart_form">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <input type="hidden" name="qty" value="1">
                        <button type="submit" class="btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 w-full flex items-center justify-center gap-x-2">
                          <i class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"></i>
                          <span>Add to Cart</span>
                        </button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            @empty
              <div class="col-span-12 text-center py-10 text-gray-500">No products in this category.</div>
            @endforelse
          </div>
        </div>
      @endforeach

    </div>
  </div>
</section>
<!-- ========== Our Products Section End ========== -->
