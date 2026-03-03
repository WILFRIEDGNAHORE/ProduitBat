    <!-- ========== Hot Deals Section Start ========== -->
    @if($flashSaleDate && $flashSaleItemsSliders->isNotEmpty())
    <section class="pb-[70px]">
      <div class="container">
        <div
          class="grid grid-cols-12 lg:gap-x-10 xl:gap-x-[76px] items-center gap-y-12"
        >
          <div
            class="lg:col-span-4 col-span-12 wow animate__animated animate__fadeInUp"
            data-wow-delay=".2s"
            >
            <div class="hot-deal-content">
              <h5 class="text-primary">Limited Time Offer</h5>
              <h2 class="my-4">Hot Deals This Week</h2>
              <p class="mb-4">
                Weekly deals are back and better than ever, bringing fresh new
                offers. Your daily routine and elevate your beauty experience.
                Don&apos;t miss out on these limited-time savings!
              </p>

              <div
                class="home-one-hot-deal-countdown flex items-center justify-between mb-10 gap-x-3 sellzy-countdown"
                data-countdown-date="{{ $flashSaleDate->end_date }}"
              >
                <div
                  class="countdown-item flex flex-col items-center justify-center w-[90px] h-[86px] bg-white shadow-light-z-12 text-center"
                >
                  <h5 class="days text-error">00</h5>
                  <p class="pt-2">Days</p>
                </div>
                <p class="font-semibold">:</p>
                <div
                  class="countdown-item flex flex-col items-center justify-center w-[90px] h-[86px] bg-white shadow-light-z-12 text-center"
                >
                  <h5 class="hours text-error">00</h5>
                  <p class="pt-2">Hours</p>
                </div>
                <p class="font-semibold">:</p>
                <div
                  class="countdown-item flex flex-col items-center justify-center w-[90px] h-[86px] bg-white shadow-light-z-12 text-center"
                >
                  <h5 class="minutes text-error">00</h5>
                  <p class="pt-2">Min</p>
                </div>
                <p class="font-semibold">:</p>
                <div
                  class="countdown-item flex flex-col items-center justify-center w-[90px] h-[86px] bg-white shadow-light-z-12 text-center"
                >
                  <h5 class="seconds text-error">00</h5>
                  <p class="pt-2">Sec</p>
                </div>
              </div>

              {{-- TODO: remplacer par route('frontend.shop') quand la page boutique existera --}}
              <a
                href="#"
                class="btn btn-large btn-primary rounded-[60px] group py-2 pl-5 pr-3"
              >
                View All Products
                <span
                  class="size-8 bg-white inline-flex items-center justify-center rounded-full rotate-[-40deg] transform group-hover:rotate-0 transition-all duration-300"
                >
                  <i
                    class="hgi hgi-stroke hgi-arrow-right-02 text-xl text-primary-darker"
                  ></i>
                </span>
              </a>
            </div>
          </div>

          <div class="lg:col-span-8 col-span-12">
            <div
              data-slick='{"slidesToShow": 4, "slidesToScroll": 1, "infinite": true, "arrows": false, "dots": true, "autoplay": true, "autoplaySpeed": 7000, "loop": true, "responsive": [{"breakpoint": 1441, "settings": {"slidesToShow": 4}}, {"breakpoint": 1025, "settings": {"slidesToShow": 2}}, {"breakpoint": 769, "settings": {"slidesToShow": 2}}, {"breakpoint": 480, "settings": {"slidesToShow": 1}}]}'
              class="home-one-hot-deals-slider -mx-4 sellzy-slider"
            >
              @foreach($flashSaleItemsSliders as $item)
                @php $product = $item->product; @endphp
                @if($product)
                  @php
                    $hasDiscount = $product->offer_price && $product->offer_price < $product->price;
                    $discountPct = $hasDiscount
                        ? round((($product->price - $product->offer_price) / $product->price) * 100)
                        : 0;
                    $displayPrice = $hasDiscount ? $product->offer_price : $product->price;
                  @endphp
                <div
                  class="single-hot-deal-item wow animate__animated animate__fadeInUp"
                  data-wow-delay=".2s"
                >
                  <div class="rounded-2xl product-card-1 p-4 group bg-white">
                    <div class="product-image-container relative">
                      <div
                        class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden"
                      >
                        {{-- TODO: remplacer par route('frontend.product.show', $product->slug) --}}
                        <a href="#">
                          <img
                            src="{{ asset($product->thumb_image) }}"
                            alt="{{ $product->name }}"
                            class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300"
                          />
                        </a>
                      </div>
                      @if($hasDiscount)
                      <span
                        class="product-discount-badge absolute top-[11px] left-0 bg-error text-warning-lighter font-medium text-sm leading-[22px] px-1 after:absolute after:top-0 after:left-full after:z-10 after:w-1 after:h-full after:bg-[url('images/discount-shape.html')] after:bg-contain"
                        >{{ $discountPct }}% OFF</span
                      >
                      @endif

                      {{-- TODO: wishlist / compare / quick-view (fonctionnalités à implémenter)
                      <div
                        class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3"
                      >
                        <ul class="flex items-center gap-x-px">
                          <li>
                            <a aria-label='Add to Wishlist' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm ...' href='#'>
                              <i class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"></i>
                            </a>
                          </li>
                          <li>
                            <a aria-label='Compare' class='product-btn-action-item ...' href='#'>
                              <i class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"></i>
                            </a>
                          </li>
                          <li>
                            <a aria-label="Quick view" class="quick-view-sidebar-btn product-btn-action-item ..." href="#">
                              <i class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"></i>
                            </a>
                          </li>
                        </ul>
                      </div>
                      --}}
                    </div>

                    <div class="product-content">
                      {{-- TODO: délai de livraison (logistique à implémenter)
                      <p class="inline-flex items-center gap-x-1 px-1 py-0.5 bg-gray-200 rounded-sm mb-4">
                        <i class="hgi hgi-stroke hgi-delivery-truck-02 text-base text-light-secondary-text"></i>
                        <span class="text-sm leading-[18px]">12-48 hours</span>
                      </p>
                      --}}

                      @if($product->category)
                      <p class="text-sm leading-[22px] mb-4">
                        {{ $product->category->name }}
                      </p>
                      @endif

                      <h5
                        class="text-base leading-6 font-semibold font-dm-sans mb-4"
                      >
                        {{-- TODO: remplacer par route('frontend.product.show', $product->slug) --}}
                        <a href="#">{{ $product->name }}</a>
                      </h5>

                      {{-- TODO: système de notation (à implémenter)
                      <div class="rating-section flex items-center mb-4">
                        <div class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]">
                          <div style="width: 80%" class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]"></div>
                        </div>
                        <span class="text-sm leading-[22px] font-normal inline-block ml-1">(189)</span>
                      </div>
                      --}}

                      <div class="price-section flex items-center gap-x-3 mb-2">
                        <span
                          class="current-price text-base font-semibold text-light-primary-text"
                          >{{ number_format($displayPrice, 2) }} €</span
                        >
                        @if($hasDiscount)
                        <span
                          class="old-price text-sm leading-[22px] font-normal text-light-disabled-text line-through"
                          >{{ number_format($product->price, 2) }} €</span
                        >
                        <span
                          class="discount-percentage text-sm leading-[22px] font-semibold text-error"
                          >{{ $discountPct }}% OFF</span
                        >
                        @endif
                      </div>

                      {{-- TODO: panier (fonctionnalité à implémenter)
                      <div class="btn-section flex items-center gap-x-4">
                        <a class='size-10 flex items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 transition-all duration-300 border border-gray-300' href='#'>
                          <i class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"></i>
                        </a>
                        <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1' href='#'>
                          <i class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"></i>
                          <span>Add to Cart</span>
                        </a>
                      </div>
                      --}}
                    </div>
                  </div>
                </div>
                @endif
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </section>
    @endif
    <!-- ========== Hot Deals Section End ========== -->
