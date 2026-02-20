    <!-- ========== Our Products Section Start ========== -->
    <section class="pb-[70px]">
      <div class="container">
        <div
          class="mb-10 flex xl:flex-row flex-col gap-y-4 items-center xl:justify-between wow animate__animated animate__fadeInUp"
          data-wow-delay=".2s"
        >
          <h3>Our Products</h3>
          <div
            class="flex gap-x-4 overflow-x-scroll lg:overflow-x-visible home-one-product-filter max-w-full"
          >
            <button
              data-tab="all-products"
              class="btn btn-default outline btn-large py-2.5 px-[22px] rounded-full"
            >
              All Products
            </button>
            <button
              data-tab="medical-device"
              class="btn btn-default outline btn-large py-2.5 px-[22px] rounded-full shadow-none"
            >
              Medical Device
            </button>
            <button
              data-tab="first-aid"
              class="btn btn-default outline btn-large py-2.5 px-[22px] rounded-full shadow-none"
            >
              First Aid
            </button>
            <button
              data-tab="diabetic-care"
              class="btn btn-default outline btn-large py-2.5 px-[22px] rounded-full shadow-none"
            >
              Diabetic Care
            </button>
            <button
              data-tab="herbal"
              class="btn btn-default outline btn-large py-2.5 px-[22px] rounded-full shadow-none"
            >
              Herbal
            </button>
            <button
              data-tab="heath-care"
              class="btn btn-default outline btn-large py-2.5 px-[22px] rounded-full shadow-none"
            >
              Health Care
            </button>
          </div>
        </div>
        <div class="tab-content">
          <!-- ========== All Products Tab Start ========== -->
          <div class="tab-pane" id="all-products">
            <div class="grid grid-cols-12 gap-6">
              <!-- ========== Single Product Card Start ========== -->
              <div
                class="2xl:col-span-2 lg:col-span-4 md:col-span-6 col-span-12 wow animate__animated animate__fadeInUp"
                data-wow-delay=".2s"
              >
                <div
                  class="border border-gray-300 rounded-2xl product-card-1 p-4 group"
                >
                  <div class="product-image-container relative">
                    <div
                      class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden"
                    >
                      <a href='product-details.html'>
                        <img
                          src="assets/images/softovac.png"
                          alt="product-1"
                          class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300"
                        />
                      </a>
                    </div>
                    <span
                      class="product-discount-badge absolute top-[11px] left-0 bg-error text-warning-lighter font-medium text-sm leading-[22px] px-1 after:absolute after:top-0 after:left-full after:z-10 after:w-1 after:h-full after:bg-[url('images/discount-shape.html')] after:bg-contain"
                      >15% OFF</span
                    >
                    <div
                      class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3"
                    >
                      <ul class="flex items-center gap-x-px">
                        <li>
                          <a aria-label='Add to Wishlist' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='wishlist-style-v1.html'>
                            <i
                              class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a aria-label='Compare' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='compare.html'>
                            <i
                              class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a
                            aria-label="Quick view"
                            class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                            href="#"
                          >
                            <i
                              class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="product-content">
                    <h5
                      class="text-base leading-6 font-semibold font-dm-sans mb-4"
                    >
                      <a href='product-details.html'>VitaLife Omega-3 Softgels Heart Support Max Strength</a
                      >
                    </h5>
                    <div class="rating-section flex items-center mb-4">
                      <div
                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]"
                      >
                        <div
                          style="width: 80%"
                          class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]"
                        ></div>
                      </div>
                      <span
                        class="text-sm leading-[22px] font-normal inline-block ml-1"
                        >(189)</span
                      >
                    </div>
                    <div class="price-section flex items-center gap-x-3 mb-2">
                      <span
                        class="current-price text-base font-semibold text-light-primary-text"
                        >$27.49</span
                      >
                      <span
                        class="old-price text-sm leading-[22px] font-normal text-light-disabled-text line-through"
                        >$39.99</span
                      >
                      <span
                        class="discount-percentage text-sm leading-[22px] font-semibold text-error"
                        >10% OFF</span
                      >
                    </div>
                    <div class="btn-section flex items-center gap-x-4">
                      <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300' href='wishlist-style-v1.html'>
                        <i
                          class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"
                        ></i>
                      </a>
                      <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1' href='cart-single-vendor.html'>
                        <i
                          class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"
                        ></i>

                        <span>Add to Cart</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ========== Single Product Card End ========== -->
              <!-- ========== Single Product Card Start ========== -->
              <div
                class="2xl:col-span-2 lg:col-span-4 md:col-span-6 col-span-12 wow animate__animated animate__fadeInUp"
                data-wow-delay=".3s"
              >
                <div
                  class="border border-gray-300 rounded-2xl product-card-1 p-4 group"
                >
                  <div class="product-image-container relative">
                    <div
                      class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden"
                    >
                      <a href='product-details.html'>
                        <img
                          src="assets/images/vitamin-c.png"
                          alt="product-1"
                          class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300"
                        />
                      </a>
                    </div>
                    <span
                      class="product-discount-badge absolute top-[11px] left-0 bg-error text-warning-lighter font-medium text-sm leading-[22px] px-1 after:absolute after:top-0 after:left-full after:z-10 after:w-1 after:h-full after:bg-[url('images/discount-shape.html')] after:bg-contain"
                      >15% OFF</span
                    >
                    <div
                      class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3"
                    >
                      <ul class="flex items-center gap-x-px">
                        <li>
                          <a aria-label='Add to Wishlist' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='wishlist-style-v1.html'>
                            <i
                              class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a aria-label='Compare' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='compare.html'>
                            <i
                              class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a
                            aria-label="Quick view"
                            class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                            href="#"
                          >
                            <i
                              class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="product-content">
                    <h5
                      class="text-base leading-6 font-semibold font-dm-sans mb-4"
                    >
                      <a href='product-details.html'>VitaLife Omega-3 Softgels Heart Support Max Strength</a
                      >
                    </h5>
                    <div class="rating-section flex items-center mb-4">
                      <div
                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]"
                      >
                        <div
                          style="width: 80%"
                          class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]"
                        ></div>
                      </div>
                      <span
                        class="text-sm leading-[22px] font-normal inline-block ml-1"
                        >(189)</span
                      >
                    </div>
                    <div class="price-section flex items-center gap-x-3 mb-2">
                      <span
                        class="current-price text-base font-semibold text-light-primary-text"
                        >$27.49</span
                      >
                      <span
                        class="old-price text-sm leading-[22px] font-normal text-light-disabled-text line-through"
                        >$39.99</span
                      >
                      <span
                        class="discount-percentage text-sm leading-[22px] font-semibold text-error"
                        >10% OFF</span
                      >
                    </div>
                    <div class="btn-section flex items-center gap-x-4">
                      <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300' href='wishlist-style-v1.html'>
                        <i
                          class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"
                        ></i>
                      </a>
                      <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1' href='cart-single-vendor.html'>
                        <i
                          class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"
                        ></i>

                        <span>Add to Cart</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ========== Single Product Card End ========== -->
              <!-- ========== Single Product Card Start ========== -->
              <div
                class="2xl:col-span-2 lg:col-span-4 md:col-span-6 col-span-12 wow animate__animated animate__fadeInUp"
                data-wow-delay=".4s"
              >
                <div
                  class="border border-gray-300 rounded-2xl product-card-1 p-4 group"
                >
                  <div class="product-image-container relative">
                    <div
                      class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden"
                    >
                      <a href='product-details.html'>
                        <img
                          src="assets/images/temperature-gun-3.png"
                          alt="product-1"
                          class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300"
                        />
                      </a>
                    </div>
                    <span
                      class="product-discount-badge absolute top-[11px] left-0 bg-error text-warning-lighter font-medium text-sm leading-[22px] px-1 after:absolute after:top-0 after:left-full after:z-10 after:w-1 after:h-full after:bg-[url('images/discount-shape.html')] after:bg-contain"
                      >15% OFF</span
                    >
                    <div
                      class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3"
                    >
                      <ul class="flex items-center gap-x-px">
                        <li>
                          <a aria-label='Add to Wishlist' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='wishlist-style-v1.html'>
                            <i
                              class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a aria-label='Compare' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='compare.html'>
                            <i
                              class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a
                            aria-label="Quick view"
                            class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                            href="#"
                          >
                            <i
                              class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="product-content">
                    <h5
                      class="text-base leading-6 font-semibold font-dm-sans mb-4"
                    >
                      <a href='product-details.html'>VitaLife Omega-3 Softgels Heart Support Max Strength</a
                      >
                    </h5>
                    <div class="rating-section flex items-center mb-4">
                      <div
                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]"
                      >
                        <div
                          style="width: 80%"
                          class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]"
                        ></div>
                      </div>
                      <span
                        class="text-sm leading-[22px] font-normal inline-block ml-1"
                        >(189)</span
                      >
                    </div>
                    <div class="price-section flex items-center gap-x-3 mb-2">
                      <span
                        class="current-price text-base font-semibold text-light-primary-text"
                        >$27.49</span
                      >
                      <span
                        class="old-price text-sm leading-[22px] font-normal text-light-disabled-text line-through"
                        >$39.99</span
                      >
                      <span
                        class="discount-percentage text-sm leading-[22px] font-semibold text-error"
                        >10% OFF</span
                      >
                    </div>
                    <div class="btn-section flex items-center gap-x-4">
                      <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300' href='wishlist-style-v1.html'>
                        <i
                          class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"
                        ></i>
                      </a>
                      <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1' href='cart-single-vendor.html'>
                        <i
                          class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"
                        ></i>

                        <span>Add to Cart</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ========== Single Product Card End ========== -->
              <!-- ========== Single Product Card Start ========== -->
              <div
                class="2xl:col-span-2 lg:col-span-4 md:col-span-6 col-span-12 wow animate__animated animate__fadeInUp"
                data-wow-delay=".5s"
              >
                <div
                  class="border border-gray-300 rounded-2xl product-card-1 p-4 group"
                >
                  <div class="product-image-container relative">
                    <div
                      class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden"
                    >
                      <a href='product-details.html'>
                        <img
                          src="assets/images/hand-sanitizer-1.png"
                          alt="product-1"
                          class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300"
                        />
                      </a>
                    </div>
                    <span
                      class="product-discount-badge absolute top-[11px] left-0 bg-error text-warning-lighter font-medium text-sm leading-[22px] px-1 after:absolute after:top-0 after:left-full after:z-10 after:w-1 after:h-full after:bg-[url('images/discount-shape.html')] after:bg-contain"
                      >15% OFF</span
                    >
                    <div
                      class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3"
                    >
                      <ul class="flex items-center gap-x-px">
                        <li>
                          <a aria-label='Add to Wishlist' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='wishlist-style-v1.html'>
                            <i
                              class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a aria-label='Compare' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='compare.html'>
                            <i
                              class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a
                            aria-label="Quick view"
                            class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                            href="#"
                          >
                            <i
                              class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="product-content">
                    <h5
                      class="text-base leading-6 font-semibold font-dm-sans mb-4"
                    >
                      <a href='product-details.html'>VitaLife Omega-3 Softgels Heart Support Max Strength</a
                      >
                    </h5>
                    <div class="rating-section flex items-center mb-4">
                      <div
                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]"
                      >
                        <div
                          style="width: 80%"
                          class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]"
                        ></div>
                      </div>
                      <span
                        class="text-sm leading-[22px] font-normal inline-block ml-1"
                        >(189)</span
                      >
                    </div>
                    <div class="price-section flex items-center gap-x-3 mb-2">
                      <span
                        class="current-price text-base font-semibold text-light-primary-text"
                        >$27.49</span
                      >
                      <span
                        class="old-price text-sm leading-[22px] font-normal text-light-disabled-text line-through"
                        >$39.99</span
                      >
                      <span
                        class="discount-percentage text-sm leading-[22px] font-semibold text-error"
                        >10% OFF</span
                      >
                    </div>
                    <div class="btn-section flex items-center gap-x-4">
                      <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300' href='wishlist-style-v1.html'>
                        <i
                          class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"
                        ></i>
                      </a>
                      <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1' href='cart-single-vendor.html'>
                        <i
                          class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"
                        ></i>

                        <span>Add to Cart</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ========== Single Product Card End ========== -->
              <!-- ========== Single Product Card Start ========== -->
              <div
                class="2xl:col-span-2 lg:col-span-4 md:col-span-6 col-span-12 wow animate__animated animate__fadeInUp"
                data-wow-delay=".6s"
              >
                <div
                  class="border border-gray-300 rounded-2xl product-card-1 p-4 group"
                >
                  <div class="product-image-container relative">
                    <div
                      class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden"
                    >
                      <a href='product-details.html'>
                        <img
                          src="assets/images/vitamin-b12.png"
                          alt="product-1"
                          class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300"
                        />
                      </a>
                    </div>
                    <span
                      class="product-discount-badge absolute top-[11px] left-0 bg-error text-warning-lighter font-medium text-sm leading-[22px] px-1 after:absolute after:top-0 after:left-full after:z-10 after:w-1 after:h-full after:bg-[url('images/discount-shape.html')] after:bg-contain"
                      >15% OFF</span
                    >
                    <div
                      class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3"
                    >
                      <ul class="flex items-center gap-x-px">
                        <li>
                          <a aria-label='Add to Wishlist' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='wishlist-style-v1.html'>
                            <i
                              class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a aria-label='Compare' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='compare.html'>
                            <i
                              class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a
                            aria-label="Quick view"
                            class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                            href="#"
                          >
                            <i
                              class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="product-content">
                    <h5
                      class="text-base leading-6 font-semibold font-dm-sans mb-4"
                    >
                      <a href='product-details.html'>VitaLife Omega-3 Softgels Heart Support Max Strength</a
                      >
                    </h5>
                    <div class="rating-section flex items-center mb-4">
                      <div
                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]"
                      >
                        <div
                          style="width: 80%"
                          class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]"
                        ></div>
                      </div>
                      <span
                        class="text-sm leading-[22px] font-normal inline-block ml-1"
                        >(189)</span
                      >
                    </div>
                    <div class="price-section flex items-center gap-x-3 mb-2">
                      <span
                        class="current-price text-base font-semibold text-light-primary-text"
                        >$27.49</span
                      >
                      <span
                        class="old-price text-sm leading-[22px] font-normal text-light-disabled-text line-through"
                        >$39.99</span
                      >
                      <span
                        class="discount-percentage text-sm leading-[22px] font-semibold text-error"
                        >10% OFF</span
                      >
                    </div>
                    <div class="btn-section flex items-center gap-x-4">
                      <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300' href='wishlist-style-v1.html'>
                        <i
                          class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"
                        ></i>
                      </a>
                      <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1' href='cart-single-vendor.html'>
                        <i
                          class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"
                        ></i>

                        <span>Add to Cart</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ========== Single Product Card End ========== -->
              <!-- ========== Single Product Card Start ========== -->
              <div
                class="2xl:col-span-2 lg:col-span-4 md:col-span-6 col-span-12 wow animate__animated animate__fadeInUp"
                data-wow-delay=".7s"
              >
                <div
                  class="border border-gray-300 rounded-2xl product-card-1 p-4 group"
                >
                  <div class="product-image-container relative">
                    <div
                      class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden"
                    >
                      <a href='product-details.html'>
                        <img
                          src="assets/images/ever-herb.png"
                          alt="product-1"
                          class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300"
                        />
                      </a>
                    </div>
                    <span
                      class="product-discount-badge absolute top-[11px] left-0 bg-error text-warning-lighter font-medium text-sm leading-[22px] px-1 after:absolute after:top-0 after:left-full after:z-10 after:w-1 after:h-full after:bg-[url('images/discount-shape.html')] after:bg-contain"
                      >15% OFF</span
                    >
                    <div
                      class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3"
                    >
                      <ul class="flex items-center gap-x-px">
                        <li>
                          <a aria-label='Add to Wishlist' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='wishlist-style-v1.html'>
                            <i
                              class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a aria-label='Compare' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='compare.html'>
                            <i
                              class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a
                            aria-label="Quick view"
                            class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                            href="#"
                          >
                            <i
                              class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="product-content">
                    <h5
                      class="text-base leading-6 font-semibold font-dm-sans mb-4"
                    >
                      <a href='product-details.html'>VitaLife Omega-3 Softgels Heart Support Max Strength</a
                      >
                    </h5>
                    <div class="rating-section flex items-center mb-4">
                      <div
                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]"
                      >
                        <div
                          style="width: 80%"
                          class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]"
                        ></div>
                      </div>
                      <span
                        class="text-sm leading-[22px] font-normal inline-block ml-1"
                        >(189)</span
                      >
                    </div>
                    <div class="price-section flex items-center gap-x-3 mb-2">
                      <span
                        class="current-price text-base font-semibold text-light-primary-text"
                        >$27.49</span
                      >
                      <span
                        class="old-price text-sm leading-[22px] font-normal text-light-disabled-text line-through"
                        >$39.99</span
                      >
                      <span
                        class="discount-percentage text-sm leading-[22px] font-semibold text-error"
                        >10% OFF</span
                      >
                    </div>
                    <div class="btn-section flex items-center gap-x-4">
                      <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300' href='wishlist-style-v1.html'>
                        <i
                          class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"
                        ></i>
                      </a>
                      <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1' href='cart-single-vendor.html'>
                        <i
                          class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"
                        ></i>

                        <span>Add to Cart</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ========== Single Product Card End ========== -->
              <!-- ========== Single Product Card Start ========== -->
              <div
                class="2xl:col-span-2 lg:col-span-4 md:col-span-6 col-span-12 wow animate__animated animate__fadeInUp"
                data-wow-delay=".2s"
              >
                <div
                  class="border border-gray-300 rounded-2xl product-card-1 p-4 group"
                >
                  <div class="product-image-container relative">
                    <div
                      class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden"
                    >
                      <a href='product-details.html'>
                        <img
                          src="assets/images/hand-sanitizer-2.png"
                          alt="product-1"
                          class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300"
                        />
                      </a>
                    </div>
                    <span
                      class="product-discount-badge absolute top-[11px] left-0 bg-error text-warning-lighter font-medium text-sm leading-[22px] px-1 after:absolute after:top-0 after:left-full after:z-10 after:w-1 after:h-full after:bg-[url('images/discount-shape.html')] after:bg-contain"
                      >15% OFF</span
                    >
                    <div
                      class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3"
                    >
                      <ul class="flex items-center gap-x-px">
                        <li>
                          <a aria-label='Add to Wishlist' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='wishlist-style-v1.html'>
                            <i
                              class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a aria-label='Compare' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='compare.html'>
                            <i
                              class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a
                            aria-label="Quick view"
                            class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                            href="#"
                          >
                            <i
                              class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="product-content">
                    <h5
                      class="text-base leading-6 font-semibold font-dm-sans mb-4"
                    >
                      <a href='product-details.html'>VitaLife Omega-3 Softgels Heart Support Max Strength</a
                      >
                    </h5>
                    <div class="rating-section flex items-center mb-4">
                      <div
                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]"
                      >
                        <div
                          style="width: 80%"
                          class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]"
                        ></div>
                      </div>
                      <span
                        class="text-sm leading-[22px] font-normal inline-block ml-1"
                        >(189)</span
                      >
                    </div>
                    <div class="price-section flex items-center gap-x-3 mb-2">
                      <span
                        class="current-price text-base font-semibold text-light-primary-text"
                        >$27.49</span
                      >
                      <span
                        class="old-price text-sm leading-[22px] font-normal text-light-disabled-text line-through"
                        >$39.99</span
                      >
                      <span
                        class="discount-percentage text-sm leading-[22px] font-semibold text-error"
                        >10% OFF</span
                      >
                    </div>
                    <div class="btn-section flex items-center gap-x-4">
                      <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300' href='wishlist-style-v1.html'>
                        <i
                          class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"
                        ></i>
                      </a>
                      <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1' href='cart-single-vendor.html'>
                        <i
                          class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"
                        ></i>

                        <span>Add to Cart</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ========== Single Product Card End ========== -->
              <!-- ========== Single Product Card Start ========== -->
              <div
                class="2xl:col-span-2 lg:col-span-4 md:col-span-6 col-span-12 wow animate__animated animate__fadeInUp"
                data-wow-delay=".3s"
              >
                <div
                  class="border border-gray-300 rounded-2xl product-card-1 p-4 group"
                >
                  <div class="product-image-container relative">
                    <div
                      class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden"
                    >
                      <a href='product-details.html'>
                        <img
                          src="assets/images/gillette.png"
                          alt="product-1"
                          class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300"
                        />
                      </a>
                    </div>
                    <span
                      class="product-discount-badge absolute top-[11px] left-0 bg-error text-warning-lighter font-medium text-sm leading-[22px] px-1 after:absolute after:top-0 after:left-full after:z-10 after:w-1 after:h-full after:bg-[url('images/discount-shape.html')] after:bg-contain"
                      >15% OFF</span
                    >
                    <div
                      class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3"
                    >
                      <ul class="flex items-center gap-x-px">
                        <li>
                          <a aria-label='Add to Wishlist' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='wishlist-style-v1.html'>
                            <i
                              class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a aria-label='Compare' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='compare.html'>
                            <i
                              class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a
                            aria-label="Quick view"
                            class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                            href="#"
                          >
                            <i
                              class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="product-content">
                    <h5
                      class="text-base leading-6 font-semibold font-dm-sans mb-4"
                    >
                      <a href='product-details.html'>VitaLife Omega-3 Softgels Heart Support Max Strength</a
                      >
                    </h5>
                    <div class="rating-section flex items-center mb-4">
                      <div
                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]"
                      >
                        <div
                          style="width: 80%"
                          class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]"
                        ></div>
                      </div>
                      <span
                        class="text-sm leading-[22px] font-normal inline-block ml-1"
                        >(189)</span
                      >
                    </div>
                    <div class="price-section flex items-center gap-x-3 mb-2">
                      <span
                        class="current-price text-base font-semibold text-light-primary-text"
                        >$27.49</span
                      >
                      <span
                        class="old-price text-sm leading-[22px] font-normal text-light-disabled-text line-through"
                        >$39.99</span
                      >
                      <span
                        class="discount-percentage text-sm leading-[22px] font-semibold text-error"
                        >10% OFF</span
                      >
                    </div>
                    <div class="btn-section flex items-center gap-x-4">
                      <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300' href='wishlist-style-v1.html'>
                        <i
                          class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"
                        ></i>
                      </a>
                      <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1' href='cart-single-vendor.html'>
                        <i
                          class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"
                        ></i>

                        <span>Add to Cart</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ========== Single Product Card End ========== -->
              <!-- ========== Single Product Card Start ========== -->
              <div
                class="2xl:col-span-2 lg:col-span-4 md:col-span-6 col-span-12 wow animate__animated animate__fadeInUp"
                data-wow-delay=".4s"
              >
                <div
                  class="border border-gray-300 rounded-2xl product-card-1 p-4 group"
                >
                  <div class="product-image-container relative">
                    <div
                      class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden"
                    >
                      <a href='product-details.html'>
                        <img
                          src="assets/images/honitus.png"
                          alt="product-1"
                          class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300"
                        />
                      </a>
                    </div>
                    <span
                      class="product-discount-badge absolute top-[11px] left-0 bg-error text-warning-lighter font-medium text-sm leading-[22px] px-1 after:absolute after:top-0 after:left-full after:z-10 after:w-1 after:h-full after:bg-[url('images/discount-shape.html')] after:bg-contain"
                      >15% OFF</span
                    >
                    <div
                      class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3"
                    >
                      <ul class="flex items-center gap-x-px">
                        <li>
                          <a aria-label='Add to Wishlist' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='wishlist-style-v1.html'>
                            <i
                              class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a aria-label='Compare' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='compare.html'>
                            <i
                              class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a
                            aria-label="Quick view"
                            class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                            href="#"
                          >
                            <i
                              class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="product-content">
                    <h5
                      class="text-base leading-6 font-semibold font-dm-sans mb-4"
                    >
                      <a href='product-details.html'>VitaLife Omega-3 Softgels Heart Support Max Strength</a
                      >
                    </h5>
                    <div class="rating-section flex items-center mb-4">
                      <div
                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]"
                      >
                        <div
                          style="width: 80%"
                          class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]"
                        ></div>
                      </div>
                      <span
                        class="text-sm leading-[22px] font-normal inline-block ml-1"
                        >(189)</span
                      >
                    </div>
                    <div class="price-section flex items-center gap-x-3 mb-2">
                      <span
                        class="current-price text-base font-semibold text-light-primary-text"
                        >$27.49</span
                      >
                      <span
                        class="old-price text-sm leading-[22px] font-normal text-light-disabled-text line-through"
                        >$39.99</span
                      >
                      <span
                        class="discount-percentage text-sm leading-[22px] font-semibold text-error"
                        >10% OFF</span
                      >
                    </div>
                    <div class="btn-section flex items-center gap-x-4">
                      <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300' href='wishlist-style-v1.html'>
                        <i
                          class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"
                        ></i>
                      </a>
                      <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1' href='cart-single-vendor.html'>
                        <i
                          class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"
                        ></i>

                        <span>Add to Cart</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ========== Single Product Card End ========== -->
              <!-- ========== Single Product Card Start ========== -->
              <div
                class="2xl:col-span-2 lg:col-span-4 md:col-span-6 col-span-12 wow animate__animated animate__fadeInUp"
                data-wow-delay=".5s"
              >
                <div
                  class="border border-gray-300 rounded-2xl product-card-1 p-4 group"
                >
                  <div class="product-image-container relative">
                    <div
                      class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden"
                    >
                      <a href='product-details.html'>
                        <img
                          src="assets/images/liveasy.png"
                          alt="product-1"
                          class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300"
                        />
                      </a>
                    </div>
                    <span
                      class="product-discount-badge absolute top-[11px] left-0 bg-error text-warning-lighter font-medium text-sm leading-[22px] px-1 after:absolute after:top-0 after:left-full after:z-10 after:w-1 after:h-full after:bg-[url('images/discount-shape.html')] after:bg-contain"
                      >15% OFF</span
                    >
                    <div
                      class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3"
                    >
                      <ul class="flex items-center gap-x-px">
                        <li>
                          <a aria-label='Add to Wishlist' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='wishlist-style-v1.html'>
                            <i
                              class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a aria-label='Compare' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='compare.html'>
                            <i
                              class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a
                            aria-label="Quick view"
                            class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                            href="#"
                          >
                            <i
                              class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="product-content">
                    <h5
                      class="text-base leading-6 font-semibold font-dm-sans mb-4"
                    >
                      <a href='product-details.html'>VitaLife Omega-3 Softgels Heart Support Max Strength</a
                      >
                    </h5>
                    <div class="rating-section flex items-center mb-4">
                      <div
                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]"
                      >
                        <div
                          style="width: 80%"
                          class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]"
                        ></div>
                      </div>
                      <span
                        class="text-sm leading-[22px] font-normal inline-block ml-1"
                        >(189)</span
                      >
                    </div>
                    <div class="price-section flex items-center gap-x-3 mb-2">
                      <span
                        class="current-price text-base font-semibold text-light-primary-text"
                        >$27.49</span
                      >
                      <span
                        class="old-price text-sm leading-[22px] font-normal text-light-disabled-text line-through"
                        >$39.99</span
                      >
                      <span
                        class="discount-percentage text-sm leading-[22px] font-semibold text-error"
                        >10% OFF</span
                      >
                    </div>
                    <div class="btn-section flex items-center gap-x-4">
                      <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300' href='wishlist-style-v1.html'>
                        <i
                          class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"
                        ></i>
                      </a>
                      <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1' href='cart-single-vendor.html'>
                        <i
                          class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"
                        ></i>

                        <span>Add to Cart</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ========== Single Product Card End ========== -->
              <!-- ========== Single Product Card Start ========== -->
              <div
                class="2xl:col-span-2 lg:col-span-4 md:col-span-6 col-span-12 wow animate__animated animate__fadeInUp"
                data-wow-delay=".6s"
              >
                <div
                  class="border border-gray-300 rounded-2xl product-card-1 p-4 group"
                >
                  <div class="product-image-container relative">
                    <div
                      class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden"
                    >
                      <a href='product-details.html'>
                        <img
                          src="assets/images/aooca.png"
                          alt="product-1"
                          class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300"
                        />
                      </a>
                    </div>
                    <span
                      class="product-discount-badge absolute top-[11px] left-0 bg-error text-warning-lighter font-medium text-sm leading-[22px] px-1 after:absolute after:top-0 after:left-full after:z-10 after:w-1 after:h-full after:bg-[url('images/discount-shape.html')] after:bg-contain"
                      >15% OFF</span
                    >
                    <div
                      class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3"
                    >
                      <ul class="flex items-center gap-x-px">
                        <li>
                          <a aria-label='Add to Wishlist' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='wishlist-style-v1.html'>
                            <i
                              class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a aria-label='Compare' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='compare.html'>
                            <i
                              class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a
                            aria-label="Quick view"
                            class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                            href="#"
                          >
                            <i
                              class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="product-content">
                    <h5
                      class="text-base leading-6 font-semibold font-dm-sans mb-4"
                    >
                      <a href='product-details.html'>VitaLife Omega-3 Softgels Heart Support Max Strength</a
                      >
                    </h5>
                    <div class="rating-section flex items-center mb-4">
                      <div
                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]"
                      >
                        <div
                          style="width: 80%"
                          class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]"
                        ></div>
                      </div>
                      <span
                        class="text-sm leading-[22px] font-normal inline-block ml-1"
                        >(189)</span
                      >
                    </div>
                    <div class="price-section flex items-center gap-x-3 mb-2">
                      <span
                        class="current-price text-base font-semibold text-light-primary-text"
                        >$27.49</span
                      >
                      <span
                        class="old-price text-sm leading-[22px] font-normal text-light-disabled-text line-through"
                        >$39.99</span
                      >
                      <span
                        class="discount-percentage text-sm leading-[22px] font-semibold text-error"
                        >10% OFF</span
                      >
                    </div>
                    <div class="btn-section flex items-center gap-x-4">
                      <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300' href='wishlist-style-v1.html'>
                        <i
                          class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"
                        ></i>
                      </a>
                      <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1' href='cart-single-vendor.html'>
                        <i
                          class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"
                        ></i>

                        <span>Add to Cart</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ========== Single Product Card End ========== -->
              <!-- ========== Single Product Card Start ========== -->
              <div
                class="2xl:col-span-2 lg:col-span-4 md:col-span-6 col-span-12 wow animate__animated animate__fadeInUp"
                data-wow-delay=".7s"
              >
                <div
                  class="border border-gray-300 rounded-2xl product-card-1 p-4 group"
                >
                  <div class="product-image-container relative">
                    <div
                      class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden"
                    >
                      <a href='product-details.html'>
                        <img
                          src="assets/images/aacka.png"
                          alt="product-1"
                          class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300"
                        />
                      </a>
                    </div>
                    <span
                      class="product-discount-badge absolute top-[11px] left-0 bg-error text-warning-lighter font-medium text-sm leading-[22px] px-1 after:absolute after:top-0 after:left-full after:z-10 after:w-1 after:h-full after:bg-[url('images/discount-shape.html')] after:bg-contain"
                      >15% OFF</span
                    >
                    <div
                      class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3"
                    >
                      <ul class="flex items-center gap-x-px">
                        <li>
                          <a aria-label='Add to Wishlist' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='wishlist-style-v1.html'>
                            <i
                              class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a aria-label='Compare' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='compare.html'>
                            <i
                              class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a
                            aria-label="Quick view"
                            class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                            href="#"
                          >
                            <i
                              class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="product-content">
                    <h5
                      class="text-base leading-6 font-semibold font-dm-sans mb-4"
                    >
                      <a href='product-details.html'>VitaLife Omega-3 Softgels Heart Support Max Strength</a
                      >
                    </h5>
                    <div class="rating-section flex items-center mb-4">
                      <div
                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]"
                      >
                        <div
                          style="width: 80%"
                          class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]"
                        ></div>
                      </div>
                      <span
                        class="text-sm leading-[22px] font-normal inline-block ml-1"
                        >(189)</span
                      >
                    </div>
                    <div class="price-section flex items-center gap-x-3 mb-2">
                      <span
                        class="current-price text-base font-semibold text-light-primary-text"
                        >$27.49</span
                      >
                      <span
                        class="old-price text-sm leading-[22px] font-normal text-light-disabled-text line-through"
                        >$39.99</span
                      >
                      <span
                        class="discount-percentage text-sm leading-[22px] font-semibold text-error"
                        >10% OFF</span
                      >
                    </div>
                    <div class="btn-section flex items-center gap-x-4">
                      <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300' href='wishlist-style-v1.html'>
                        <i
                          class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"
                        ></i>
                      </a>
                      <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1' href='cart-single-vendor.html'>
                        <i
                          class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"
                        ></i>

                        <span>Add to Cart</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ========== Single Product Card End ========== -->
            </div>
          </div>
          <!-- ========== All Products Tab End ========== -->

          <!-- ========== Medical Device Tab Start ========== -->
          <div class="tab-pane" id="medical-device">
            <div class="grid grid-cols-12 gap-6">
              <div
                class="2xl:col-span-2 lg:col-span-4 md:col-span-6 col-span-12"
              >
                <div
                  class="border border-gray-300 rounded-2xl product-card-1 p-4 group"
                >
                  <div class="product-image-container relative">
                    <div
                      class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden"
                    >
                      <a href='product-details.html'>
                        <img
                          src="assets/images/hand-sanitizer-2.png"
                          alt="product-1"
                          class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300"
                        />
                      </a>
                    </div>
                    <span
                      class="product-discount-badge absolute top-[11px] left-0 bg-error text-warning-lighter font-medium text-sm leading-[22px] px-1 after:absolute after:top-0 after:left-full after:z-10 after:w-1 after:h-full after:bg-[url('images/discount-shape.html')] after:bg-contain"
                      >15% OFF</span
                    >
                    <div
                      class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3"
                    >
                      <ul class="flex items-center gap-x-px">
                        <li>
                          <a aria-label='Add to Wishlist' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='wishlist-style-v1.html'>
                            <i
                              class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a aria-label='Compare' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='compare.html'>
                            <i
                              class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a
                            aria-label="Quick view"
                            class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                            href="#"
                          >
                            <i
                              class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="product-content">
                    <h5
                      class="text-base leading-6 font-semibold font-dm-sans mb-4"
                    >
                      <a href='product-details.html'>VitaLife Omega-3 Softgels Heart Support Max Strength</a
                      >
                    </h5>
                    <div class="rating-section flex items-center mb-4">
                      <div
                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]"
                      >
                        <div
                          style="width: 80%"
                          class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]"
                        ></div>
                      </div>
                      <span
                        class="text-sm leading-[22px] font-normal inline-block ml-1"
                        >(189)</span
                      >
                    </div>
                    <div class="price-section flex items-center gap-x-3 mb-2">
                      <span
                        class="current-price text-base font-semibold text-light-primary-text"
                        >$27.49</span
                      >
                      <span
                        class="old-price text-sm leading-[22px] font-normal text-light-disabled-text line-through"
                        >$39.99</span
                      >
                      <span
                        class="discount-percentage text-sm leading-[22px] font-semibold text-error"
                        >10% OFF</span
                      >
                    </div>
                    <div class="btn-section flex items-center gap-x-4">
                      <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300' href='wishlist-style-v1.html'>
                        <i
                          class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"
                        ></i>
                      </a>
                      <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1' href='cart-single-vendor.html'>
                        <i
                          class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"
                        ></i>

                        <span>Add to Cart</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ========== Single Product Card End ========== -->
              <!-- ========== Single Product Card Start ========== -->
              <div
                class="2xl:col-span-2 lg:col-span-4 md:col-span-6 col-span-12"
              >
                <div
                  class="border border-gray-300 rounded-2xl product-card-1 p-4 group"
                >
                  <div class="product-image-container relative">
                    <div
                      class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden"
                    >
                      <a href='product-details.html'>
                        <img
                          src="assets/images/gillette.png"
                          alt="product-1"
                          class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300"
                        />
                      </a>
                    </div>
                    <span
                      class="product-discount-badge absolute top-[11px] left-0 bg-error text-warning-lighter font-medium text-sm leading-[22px] px-1 after:absolute after:top-0 after:left-full after:z-10 after:w-1 after:h-full after:bg-[url('images/discount-shape.html')] after:bg-contain"
                      >15% OFF</span
                    >
                    <div
                      class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3"
                    >
                      <ul class="flex items-center gap-x-px">
                        <li>
                          <a aria-label='Add to Wishlist' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='wishlist-style-v1.html'>
                            <i
                              class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a aria-label='Compare' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='compare.html'>
                            <i
                              class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a
                            aria-label="Quick view"
                            class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                            href="#"
                          >
                            <i
                              class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="product-content">
                    <h5
                      class="text-base leading-6 font-semibold font-dm-sans mb-4"
                    >
                      <a href='product-details.html'>VitaLife Omega-3 Softgels Heart Support Max Strength</a
                      >
                    </h5>
                    <div class="rating-section flex items-center mb-4">
                      <div
                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]"
                      >
                        <div
                          style="width: 80%"
                          class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]"
                        ></div>
                      </div>
                      <span
                        class="text-sm leading-[22px] font-normal inline-block ml-1"
                        >(189)</span
                      >
                    </div>
                    <div class="price-section flex items-center gap-x-3 mb-2">
                      <span
                        class="current-price text-base font-semibold text-light-primary-text"
                        >$27.49</span
                      >
                      <span
                        class="old-price text-sm leading-[22px] font-normal text-light-disabled-text line-through"
                        >$39.99</span
                      >
                      <span
                        class="discount-percentage text-sm leading-[22px] font-semibold text-error"
                        >10% OFF</span
                      >
                    </div>
                    <div class="btn-section flex items-center gap-x-4">
                      <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300' href='wishlist-style-v1.html'>
                        <i
                          class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"
                        ></i>
                      </a>
                      <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1' href='cart-single-vendor.html'>
                        <i
                          class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"
                        ></i>

                        <span>Add to Cart</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ========== Single Product Card End ========== -->
              <!-- ========== Single Product Card Start ========== -->
              <div
                class="2xl:col-span-2 lg:col-span-4 md:col-span-6 col-span-12"
              >
                <div
                  class="border border-gray-300 rounded-2xl product-card-1 p-4 group"
                >
                  <div class="product-image-container relative">
                    <div
                      class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden"
                    >
                      <a href='product-details.html'>
                        <img
                          src="assets/images/honitus.png"
                          alt="product-1"
                          class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300"
                        />
                      </a>
                    </div>
                    <span
                      class="product-discount-badge absolute top-[11px] left-0 bg-error text-warning-lighter font-medium text-sm leading-[22px] px-1 after:absolute after:top-0 after:left-full after:z-10 after:w-1 after:h-full after:bg-[url('images/discount-shape.html')] after:bg-contain"
                      >15% OFF</span
                    >
                    <div
                      class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3"
                    >
                      <ul class="flex items-center gap-x-px">
                        <li>
                          <a aria-label='Add to Wishlist' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='wishlist-style-v1.html'>
                            <i
                              class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a aria-label='Compare' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='compare.html'>
                            <i
                              class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a
                            aria-label="Quick view"
                            class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                            href="#"
                          >
                            <i
                              class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="product-content">
                    <h5
                      class="text-base leading-6 font-semibold font-dm-sans mb-4"
                    >
                      <a href='product-details.html'>VitaLife Omega-3 Softgels Heart Support Max Strength</a
                      >
                    </h5>
                    <div class="rating-section flex items-center mb-4">
                      <div
                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]"
                      >
                        <div
                          style="width: 80%"
                          class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]"
                        ></div>
                      </div>
                      <span
                        class="text-sm leading-[22px] font-normal inline-block ml-1"
                        >(189)</span
                      >
                    </div>
                    <div class="price-section flex items-center gap-x-3 mb-2">
                      <span
                        class="current-price text-base font-semibold text-light-primary-text"
                        >$27.49</span
                      >
                      <span
                        class="old-price text-sm leading-[22px] font-normal text-light-disabled-text line-through"
                        >$39.99</span
                      >
                      <span
                        class="discount-percentage text-sm leading-[22px] font-semibold text-error"
                        >10% OFF</span
                      >
                    </div>
                    <div class="btn-section flex items-center gap-x-4">
                      <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300' href='wishlist-style-v1.html'>
                        <i
                          class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"
                        ></i>
                      </a>
                      <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1' href='cart-single-vendor.html'>
                        <i
                          class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"
                        ></i>

                        <span>Add to Cart</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ========== Single Product Card End ========== -->
              <!-- ========== Single Product Card Start ========== -->
              <div
                class="2xl:col-span-2 lg:col-span-4 md:col-span-6 col-span-12"
              >
                <div
                  class="border border-gray-300 rounded-2xl product-card-1 p-4 group"
                >
                  <div class="product-image-container relative">
                    <div
                      class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden"
                    >
                      <a href='product-details.html'>
                        <img
                          src="assets/images/liveasy.png"
                          alt="product-1"
                          class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300"
                        />
                      </a>
                    </div>
                    <span
                      class="product-discount-badge absolute top-[11px] left-0 bg-error text-warning-lighter font-medium text-sm leading-[22px] px-1 after:absolute after:top-0 after:left-full after:z-10 after:w-1 after:h-full after:bg-[url('images/discount-shape.html')] after:bg-contain"
                      >15% OFF</span
                    >
                    <div
                      class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3"
                    >
                      <ul class="flex items-center gap-x-px">
                        <li>
                          <a aria-label='Add to Wishlist' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='wishlist-style-v1.html'>
                            <i
                              class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a aria-label='Compare' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='compare.html'>
                            <i
                              class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a
                            aria-label="Quick view"
                            class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                            href="#"
                          >
                            <i
                              class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="product-content">
                    <h5
                      class="text-base leading-6 font-semibold font-dm-sans mb-4"
                    >
                      <a href='product-details.html'>VitaLife Omega-3 Softgels Heart Support Max Strength</a
                      >
                    </h5>
                    <div class="rating-section flex items-center mb-4">
                      <div
                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]"
                      >
                        <div
                          style="width: 80%"
                          class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]"
                        ></div>
                      </div>
                      <span
                        class="text-sm leading-[22px] font-normal inline-block ml-1"
                        >(189)</span
                      >
                    </div>
                    <div class="price-section flex items-center gap-x-3 mb-2">
                      <span
                        class="current-price text-base font-semibold text-light-primary-text"
                        >$27.49</span
                      >
                      <span
                        class="old-price text-sm leading-[22px] font-normal text-light-disabled-text line-through"
                        >$39.99</span
                      >
                      <span
                        class="discount-percentage text-sm leading-[22px] font-semibold text-error"
                        >10% OFF</span
                      >
                    </div>
                    <div class="btn-section flex items-center gap-x-4">
                      <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300' href='wishlist-style-v1.html'>
                        <i
                          class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"
                        ></i>
                      </a>
                      <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1' href='cart-single-vendor.html'>
                        <i
                          class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"
                        ></i>

                        <span>Add to Cart</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ========== Single Product Card End ========== -->
              <!-- ========== Single Product Card Start ========== -->
              <div
                class="2xl:col-span-2 lg:col-span-4 md:col-span-6 col-span-12"
              >
                <div
                  class="border border-gray-300 rounded-2xl product-card-1 p-4 group"
                >
                  <div class="product-image-container relative">
                    <div
                      class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden"
                    >
                      <a href='product-details.html'>
                        <img
                          src="assets/images/aooca.png"
                          alt="product-1"
                          class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300"
                        />
                      </a>
                    </div>
                    <span
                      class="product-discount-badge absolute top-[11px] left-0 bg-error text-warning-lighter font-medium text-sm leading-[22px] px-1 after:absolute after:top-0 after:left-full after:z-10 after:w-1 after:h-full after:bg-[url('images/discount-shape.html')] after:bg-contain"
                      >15% OFF</span
                    >
                    <div
                      class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3"
                    >
                      <ul class="flex items-center gap-x-px">
                        <li>
                          <a aria-label='Add to Wishlist' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='wishlist-style-v1.html'>
                            <i
                              class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a aria-label='Compare' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='compare.html'>
                            <i
                              class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a
                            aria-label="Quick view"
                            class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                            href="#"
                          >
                            <i
                              class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="product-content">
                    <h5
                      class="text-base leading-6 font-semibold font-dm-sans mb-4"
                    >
                      <a href='product-details.html'>VitaLife Omega-3 Softgels Heart Support Max Strength</a
                      >
                    </h5>
                    <div class="rating-section flex items-center mb-4">
                      <div
                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]"
                      >
                        <div
                          style="width: 80%"
                          class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]"
                        ></div>
                      </div>
                      <span
                        class="text-sm leading-[22px] font-normal inline-block ml-1"
                        >(189)</span
                      >
                    </div>
                    <div class="price-section flex items-center gap-x-3 mb-2">
                      <span
                        class="current-price text-base font-semibold text-light-primary-text"
                        >$27.49</span
                      >
                      <span
                        class="old-price text-sm leading-[22px] font-normal text-light-disabled-text line-through"
                        >$39.99</span
                      >
                      <span
                        class="discount-percentage text-sm leading-[22px] font-semibold text-error"
                        >10% OFF</span
                      >
                    </div>
                    <div class="btn-section flex items-center gap-x-4">
                      <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300' href='wishlist-style-v1.html'>
                        <i
                          class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"
                        ></i>
                      </a>
                      <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1' href='cart-single-vendor.html'>
                        <i
                          class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"
                        ></i>

                        <span>Add to Cart</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ========== Single Product Card End ========== -->
              <!-- ========== Single Product Card Start ========== -->
              <div
                class="2xl:col-span-2 lg:col-span-4 md:col-span-6 col-span-12"
              >
                <div
                  class="border border-gray-300 rounded-2xl product-card-1 p-4 group"
                >
                  <div class="product-image-container relative">
                    <div
                      class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden"
                    >
                      <a href='product-details.html'>
                        <img
                          src="assets/images/aacka.png"
                          alt="product-1"
                          class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300"
                        />
                      </a>
                    </div>
                    <span
                      class="product-discount-badge absolute top-[11px] left-0 bg-error text-warning-lighter font-medium text-sm leading-[22px] px-1 after:absolute after:top-0 after:left-full after:z-10 after:w-1 after:h-full after:bg-[url('images/discount-shape.html')] after:bg-contain"
                      >15% OFF</span
                    >
                    <div
                      class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3"
                    >
                      <ul class="flex items-center gap-x-px">
                        <li>
                          <a aria-label='Add to Wishlist' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='wishlist-style-v1.html'>
                            <i
                              class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a aria-label='Compare' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='compare.html'>
                            <i
                              class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a
                            aria-label="Quick view"
                            class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                            href="#"
                          >
                            <i
                              class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="product-content">
                    <h5
                      class="text-base leading-6 font-semibold font-dm-sans mb-4"
                    >
                      <a href='product-details.html'>VitaLife Omega-3 Softgels Heart Support Max Strength</a
                      >
                    </h5>
                    <div class="rating-section flex items-center mb-4">
                      <div
                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]"
                      >
                        <div
                          style="width: 80%"
                          class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]"
                        ></div>
                      </div>
                      <span
                        class="text-sm leading-[22px] font-normal inline-block ml-1"
                        >(189)</span
                      >
                    </div>
                    <div class="price-section flex items-center gap-x-3 mb-2">
                      <span
                        class="current-price text-base font-semibold text-light-primary-text"
                        >$27.49</span
                      >
                      <span
                        class="old-price text-sm leading-[22px] font-normal text-light-disabled-text line-through"
                        >$39.99</span
                      >
                      <span
                        class="discount-percentage text-sm leading-[22px] font-semibold text-error"
                        >10% OFF</span
                      >
                    </div>
                    <div class="btn-section flex items-center gap-x-4">
                      <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300' href='wishlist-style-v1.html'>
                        <i
                          class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"
                        ></i>
                      </a>
                      <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1' href='cart-single-vendor.html'>
                        <i
                          class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"
                        ></i>

                        <span>Add to Cart</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ========== Single Product Card End ========== -->
              <!-- ========== Single Product Card Start ========== -->
              <div
                class="2xl:col-span-2 lg:col-span-4 md:col-span-6 col-span-12"
              >
                <div
                  class="border border-gray-300 rounded-2xl product-card-1 p-4 group"
                >
                  <div class="product-image-container relative">
                    <div
                      class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden"
                    >
                      <a href='product-details.html'>
                        <img
                          src="assets/images/softovac.png"
                          alt="product-1"
                          class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300"
                        />
                      </a>
                    </div>
                    <span
                      class="product-discount-badge absolute top-[11px] left-0 bg-error text-warning-lighter font-medium text-sm leading-[22px] px-1 after:absolute after:top-0 after:left-full after:z-10 after:w-1 after:h-full after:bg-[url('images/discount-shape.html')] after:bg-contain"
                      >15% OFF</span
                    >
                    <div
                      class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3"
                    >
                      <ul class="flex items-center gap-x-px">
                        <li>
                          <a aria-label='Add to Wishlist' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='wishlist-style-v1.html'>
                            <i
                              class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a aria-label='Compare' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='compare.html'>
                            <i
                              class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a
                            aria-label="Quick view"
                            class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                            href="#"
                          >
                            <i
                              class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="product-content">
                    <h5
                      class="text-base leading-6 font-semibold font-dm-sans mb-4"
                    >
                      <a href='product-details.html'>VitaLife Omega-3 Softgels Heart Support Max Strength</a
                      >
                    </h5>
                    <div class="rating-section flex items-center mb-4">
                      <div
                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]"
                      >
                        <div
                          style="width: 80%"
                          class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]"
                        ></div>
                      </div>
                      <span
                        class="text-sm leading-[22px] font-normal inline-block ml-1"
                        >(189)</span
                      >
                    </div>
                    <div class="price-section flex items-center gap-x-3 mb-2">
                      <span
                        class="current-price text-base font-semibold text-light-primary-text"
                        >$27.49</span
                      >
                      <span
                        class="old-price text-sm leading-[22px] font-normal text-light-disabled-text line-through"
                        >$39.99</span
                      >
                      <span
                        class="discount-percentage text-sm leading-[22px] font-semibold text-error"
                        >10% OFF</span
                      >
                    </div>
                    <div class="btn-section flex items-center gap-x-4">
                      <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300' href='wishlist-style-v1.html'>
                        <i
                          class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"
                        ></i>
                      </a>
                      <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1' href='cart-single-vendor.html'>
                        <i
                          class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"
                        ></i>

                        <span>Add to Cart</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ========== Single Product Card End ========== -->
              <!-- ========== Single Product Card Start ========== -->
              <div
                class="2xl:col-span-2 lg:col-span-4 md:col-span-6 col-span-12"
              >
                <div
                  class="border border-gray-300 rounded-2xl product-card-1 p-4 group"
                >
                  <div class="product-image-container relative">
                    <div
                      class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden"
                    >
                      <a href='product-details.html'>
                        <img
                          src="assets/images/vitamin-c.png"
                          alt="product-1"
                          class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300"
                        />
                      </a>
                    </div>
                    <span
                      class="product-discount-badge absolute top-[11px] left-0 bg-error text-warning-lighter font-medium text-sm leading-[22px] px-1 after:absolute after:top-0 after:left-full after:z-10 after:w-1 after:h-full after:bg-[url('images/discount-shape.html')] after:bg-contain"
                      >15% OFF</span
                    >
                    <div
                      class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3"
                    >
                      <ul class="flex items-center gap-x-px">
                        <li>
                          <a aria-label='Add to Wishlist' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='wishlist-style-v1.html'>
                            <i
                              class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a aria-label='Compare' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='compare.html'>
                            <i
                              class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a
                            aria-label="Quick view"
                            class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                            href="#"
                          >
                            <i
                              class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="product-content">
                    <h5
                      class="text-base leading-6 font-semibold font-dm-sans mb-4"
                    >
                      <a href='product-details.html'>VitaLife Omega-3 Softgels Heart Support Max Strength</a
                      >
                    </h5>
                    <div class="rating-section flex items-center mb-4">
                      <div
                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]"
                      >
                        <div
                          style="width: 80%"
                          class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]"
                        ></div>
                      </div>
                      <span
                        class="text-sm leading-[22px] font-normal inline-block ml-1"
                        >(189)</span
                      >
                    </div>
                    <div class="price-section flex items-center gap-x-3 mb-2">
                      <span
                        class="current-price text-base font-semibold text-light-primary-text"
                        >$27.49</span
                      >
                      <span
                        class="old-price text-sm leading-[22px] font-normal text-light-disabled-text line-through"
                        >$39.99</span
                      >
                      <span
                        class="discount-percentage text-sm leading-[22px] font-semibold text-error"
                        >10% OFF</span
                      >
                    </div>
                    <div class="btn-section flex items-center gap-x-4">
                      <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300' href='wishlist-style-v1.html'>
                        <i
                          class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"
                        ></i>
                      </a>
                      <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1' href='cart-single-vendor.html'>
                        <i
                          class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"
                        ></i>

                        <span>Add to Cart</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ========== Single Product Card End ========== -->
              <!-- ========== Single Product Card Start ========== -->
              <div
                class="2xl:col-span-2 lg:col-span-4 md:col-span-6 col-span-12"
              >
                <div
                  class="border border-gray-300 rounded-2xl product-card-1 p-4 group"
                >
                  <div class="product-image-container relative">
                    <div
                      class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden"
                    >
                      <a href='product-details.html'>
                        <img
                          src="assets/images/temperature-gun-3.png"
                          alt="product-1"
                          class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300"
                        />
                      </a>
                    </div>
                    <span
                      class="product-discount-badge absolute top-[11px] left-0 bg-error text-warning-lighter font-medium text-sm leading-[22px] px-1 after:absolute after:top-0 after:left-full after:z-10 after:w-1 after:h-full after:bg-[url('images/discount-shape.html')] after:bg-contain"
                      >15% OFF</span
                    >
                    <div
                      class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3"
                    >
                      <ul class="flex items-center gap-x-px">
                        <li>
                          <a aria-label='Add to Wishlist' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='wishlist-style-v1.html'>
                            <i
                              class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a aria-label='Compare' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='compare.html'>
                            <i
                              class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a
                            aria-label="Quick view"
                            class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                            href="#"
                          >
                            <i
                              class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="product-content">
                    <h5
                      class="text-base leading-6 font-semibold font-dm-sans mb-4"
                    >
                      <a href='product-details.html'>VitaLife Omega-3 Softgels Heart Support Max Strength</a
                      >
                    </h5>
                    <div class="rating-section flex items-center mb-4">
                      <div
                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]"
                      >
                        <div
                          style="width: 80%"
                          class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]"
                        ></div>
                      </div>
                      <span
                        class="text-sm leading-[22px] font-normal inline-block ml-1"
                        >(189)</span
                      >
                    </div>
                    <div class="price-section flex items-center gap-x-3 mb-2">
                      <span
                        class="current-price text-base font-semibold text-light-primary-text"
                        >$27.49</span
                      >
                      <span
                        class="old-price text-sm leading-[22px] font-normal text-light-disabled-text line-through"
                        >$39.99</span
                      >
                      <span
                        class="discount-percentage text-sm leading-[22px] font-semibold text-error"
                        >10% OFF</span
                      >
                    </div>
                    <div class="btn-section flex items-center gap-x-4">
                      <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300' href='wishlist-style-v1.html'>
                        <i
                          class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"
                        ></i>
                      </a>
                      <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1' href='cart-single-vendor.html'>
                        <i
                          class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"
                        ></i>

                        <span>Add to Cart</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ========== Single Product Card End ========== -->
              <!-- ========== Single Product Card Start ========== -->
              <div
                class="2xl:col-span-2 lg:col-span-4 md:col-span-6 col-span-12"
              >
                <div
                  class="border border-gray-300 rounded-2xl product-card-1 p-4 group"
                >
                  <div class="product-image-container relative">
                    <div
                      class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden"
                    >
                      <a href='product-details.html'>
                        <img
                          src="assets/images/hand-sanitizer-1.png"
                          alt="product-1"
                          class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300"
                        />
                      </a>
                    </div>
                    <span
                      class="product-discount-badge absolute top-[11px] left-0 bg-error text-warning-lighter font-medium text-sm leading-[22px] px-1 after:absolute after:top-0 after:left-full after:z-10 after:w-1 after:h-full after:bg-[url('images/discount-shape.html')] after:bg-contain"
                      >15% OFF</span
                    >
                    <div
                      class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3"
                    >
                      <ul class="flex items-center gap-x-px">
                        <li>
                          <a aria-label='Add to Wishlist' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='wishlist-style-v1.html'>
                            <i
                              class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a aria-label='Compare' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='compare.html'>
                            <i
                              class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a
                            aria-label="Quick view"
                            class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                            href="#"
                          >
                            <i
                              class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="product-content">
                    <h5
                      class="text-base leading-6 font-semibold font-dm-sans mb-4"
                    >
                      <a href='product-details.html'>VitaLife Omega-3 Softgels Heart Support Max Strength</a
                      >
                    </h5>
                    <div class="rating-section flex items-center mb-4">
                      <div
                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]"
                      >
                        <div
                          style="width: 80%"
                          class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]"
                        ></div>
                      </div>
                      <span
                        class="text-sm leading-[22px] font-normal inline-block ml-1"
                        >(189)</span
                      >
                    </div>
                    <div class="price-section flex items-center gap-x-3 mb-2">
                      <span
                        class="current-price text-base font-semibold text-light-primary-text"
                        >$27.49</span
                      >
                      <span
                        class="old-price text-sm leading-[22px] font-normal text-light-disabled-text line-through"
                        >$39.99</span
                      >
                      <span
                        class="discount-percentage text-sm leading-[22px] font-semibold text-error"
                        >10% OFF</span
                      >
                    </div>
                    <div class="btn-section flex items-center gap-x-4">
                      <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300' href='wishlist-style-v1.html'>
                        <i
                          class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"
                        ></i>
                      </a>
                      <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1' href='cart-single-vendor.html'>
                        <i
                          class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"
                        ></i>

                        <span>Add to Cart</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ========== Single Product Card End ========== -->
              <!-- ========== Single Product Card Start ========== -->
              <div
                class="2xl:col-span-2 lg:col-span-4 md:col-span-6 col-span-12"
              >
                <div
                  class="border border-gray-300 rounded-2xl product-card-1 p-4 group"
                >
                  <div class="product-image-container relative">
                    <div
                      class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden"
                    >
                      <a href='product-details.html'>
                        <img
                          src="assets/images/vitamin-b12.png"
                          alt="product-1"
                          class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300"
                        />
                      </a>
                    </div>
                    <span
                      class="product-discount-badge absolute top-[11px] left-0 bg-error text-warning-lighter font-medium text-sm leading-[22px] px-1 after:absolute after:top-0 after:left-full after:z-10 after:w-1 after:h-full after:bg-[url('images/discount-shape.html')] after:bg-contain"
                      >15% OFF</span
                    >
                    <div
                      class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3"
                    >
                      <ul class="flex items-center gap-x-px">
                        <li>
                          <a aria-label='Add to Wishlist' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='wishlist-style-v1.html'>
                            <i
                              class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a aria-label='Compare' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='compare.html'>
                            <i
                              class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a
                            aria-label="Quick view"
                            class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                            href="#"
                          >
                            <i
                              class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="product-content">
                    <h5
                      class="text-base leading-6 font-semibold font-dm-sans mb-4"
                    >
                      <a href='product-details.html'>VitaLife Omega-3 Softgels Heart Support Max Strength</a
                      >
                    </h5>
                    <div class="rating-section flex items-center mb-4">
                      <div
                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]"
                      >
                        <div
                          style="width: 80%"
                          class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]"
                        ></div>
                      </div>
                      <span
                        class="text-sm leading-[22px] font-normal inline-block ml-1"
                        >(189)</span
                      >
                    </div>
                    <div class="price-section flex items-center gap-x-3 mb-2">
                      <span
                        class="current-price text-base font-semibold text-light-primary-text"
                        >$27.49</span
                      >
                      <span
                        class="old-price text-sm leading-[22px] font-normal text-light-disabled-text line-through"
                        >$39.99</span
                      >
                      <span
                        class="discount-percentage text-sm leading-[22px] font-semibold text-error"
                        >10% OFF</span
                      >
                    </div>
                    <div class="btn-section flex items-center gap-x-4">
                      <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300' href='wishlist-style-v1.html'>
                        <i
                          class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"
                        ></i>
                      </a>
                      <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1' href='cart-single-vendor.html'>
                        <i
                          class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"
                        ></i>

                        <span>Add to Cart</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ========== Single Product Card End ========== -->
              <!-- ========== Single Product Card Start ========== -->
              <div
                class="2xl:col-span-2 lg:col-span-4 md:col-span-6 col-span-12"
              >
                <div
                  class="border border-gray-300 rounded-2xl product-card-1 p-4 group"
                >
                  <div class="product-image-container relative">
                    <div
                      class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden"
                    >
                      <a href='product-details.html'>
                        <img
                          src="assets/images/ever-herb.png"
                          alt="product-1"
                          class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300"
                        />
                      </a>
                    </div>
                    <span
                      class="product-discount-badge absolute top-[11px] left-0 bg-error text-warning-lighter font-medium text-sm leading-[22px] px-1 after:absolute after:top-0 after:left-full after:z-10 after:w-1 after:h-full after:bg-[url('images/discount-shape.html')] after:bg-contain"
                      >15% OFF</span
                    >
                    <div
                      class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3"
                    >
                      <ul class="flex items-center gap-x-px">
                        <li>
                          <a aria-label='Add to Wishlist' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='wishlist-style-v1.html'>
                            <i
                              class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a aria-label='Compare' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='compare.html'>
                            <i
                              class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a
                            aria-label="Quick view"
                            class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                            href="#"
                          >
                            <i
                              class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="product-content">
                    <h5
                      class="text-base leading-6 font-semibold font-dm-sans mb-4"
                    >
                      <a href='product-details.html'>VitaLife Omega-3 Softgels Heart Support Max Strength</a
                      >
                    </h5>
                    <div class="rating-section flex items-center mb-4">
                      <div
                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]"
                      >
                        <div
                          style="width: 80%"
                          class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]"
                        ></div>
                      </div>
                      <span
                        class="text-sm leading-[22px] font-normal inline-block ml-1"
                        >(189)</span
                      >
                    </div>
                    <div class="price-section flex items-center gap-x-3 mb-2">
                      <span
                        class="current-price text-base font-semibold text-light-primary-text"
                        >$27.49</span
                      >
                      <span
                        class="old-price text-sm leading-[22px] font-normal text-light-disabled-text line-through"
                        >$39.99</span
                      >
                      <span
                        class="discount-percentage text-sm leading-[22px] font-semibold text-error"
                        >10% OFF</span
                      >
                    </div>
                    <div class="btn-section flex items-center gap-x-4">
                      <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300' href='wishlist-style-v1.html'>
                        <i
                          class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"
                        ></i>
                      </a>
                      <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1' href='cart-single-vendor.html'>
                        <i
                          class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"
                        ></i>

                        <span>Add to Cart</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ========== Single Product Card End ========== -->
            </div>
          </div>
          <!-- ========== Medical Device Tab End ========== -->

          <!-- ========== First Aid Tab Start ========== -->
          <div class="tab-pane" id="first-aid">
            <div class="grid grid-cols-12 gap-6">
              <!-- ========== Single Product Card Start ========== -->
              <div
                class="2xl:col-span-2 lg:col-span-4 md:col-span-6 col-span-12"
              >
                <div
                  class="border border-gray-300 rounded-2xl product-card-1 p-4 group"
                >
                  <div class="product-image-container relative">
                    <div
                      class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden"
                    >
                      <a href='product-details.html'>
                        <img
                          src="assets/images/softovac.png"
                          alt="product-1"
                          class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300"
                        />
                      </a>
                    </div>
                    <span
                      class="product-discount-badge absolute top-[11px] left-0 bg-error text-warning-lighter font-medium text-sm leading-[22px] px-1 after:absolute after:top-0 after:left-full after:z-10 after:w-1 after:h-full after:bg-[url('images/discount-shape.html')] after:bg-contain"
                      >15% OFF</span
                    >
                    <div
                      class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3"
                    >
                      <ul class="flex items-center gap-x-px">
                        <li>
                          <a aria-label='Add to Wishlist' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='wishlist-style-v1.html'>
                            <i
                              class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a aria-label='Compare' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='compare.html'>
                            <i
                              class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a
                            aria-label="Quick view"
                            class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                            href="#"
                          >
                            <i
                              class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="product-content">
                    <h5
                      class="text-base leading-6 font-semibold font-dm-sans mb-4"
                    >
                      <a href='product-details.html'>VitaLife Omega-3 Softgels Heart Support Max Strength</a
                      >
                    </h5>
                    <div class="rating-section flex items-center mb-4">
                      <div
                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]"
                      >
                        <div
                          style="width: 80%"
                          class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]"
                        ></div>
                      </div>
                      <span
                        class="text-sm leading-[22px] font-normal inline-block ml-1"
                        >(189)</span
                      >
                    </div>
                    <div class="price-section flex items-center gap-x-3 mb-2">
                      <span
                        class="current-price text-base font-semibold text-light-primary-text"
                        >$27.49</span
                      >
                      <span
                        class="old-price text-sm leading-[22px] font-normal text-light-disabled-text line-through"
                        >$39.99</span
                      >
                      <span
                        class="discount-percentage text-sm leading-[22px] font-semibold text-error"
                        >10% OFF</span
                      >
                    </div>
                    <div class="btn-section flex items-center gap-x-4">
                      <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300' href='wishlist-style-v1.html'>
                        <i
                          class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"
                        ></i>
                      </a>
                      <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1' href='cart-single-vendor.html'>
                        <i
                          class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"
                        ></i>

                        <span>Add to Cart</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ========== Single Product Card End ========== -->
              <!-- ========== Single Product Card Start ========== -->
              <div
                class="2xl:col-span-2 lg:col-span-4 md:col-span-6 col-span-12"
              >
                <div
                  class="border border-gray-300 rounded-2xl product-card-1 p-4 group"
                >
                  <div class="product-image-container relative">
                    <div
                      class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden"
                    >
                      <a href='product-details.html'>
                        <img
                          src="assets/images/vitamin-c.png"
                          alt="product-1"
                          class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300"
                        />
                      </a>
                    </div>
                    <span
                      class="product-discount-badge absolute top-[11px] left-0 bg-error text-warning-lighter font-medium text-sm leading-[22px] px-1 after:absolute after:top-0 after:left-full after:z-10 after:w-1 after:h-full after:bg-[url('images/discount-shape.html')] after:bg-contain"
                      >15% OFF</span
                    >
                    <div
                      class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3"
                    >
                      <ul class="flex items-center gap-x-px">
                        <li>
                          <a aria-label='Add to Wishlist' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='wishlist-style-v1.html'>
                            <i
                              class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a aria-label='Compare' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='compare.html'>
                            <i
                              class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a
                            aria-label="Quick view"
                            class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                            href="#"
                          >
                            <i
                              class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="product-content">
                    <h5
                      class="text-base leading-6 font-semibold font-dm-sans mb-4"
                    >
                      <a href='product-details.html'>VitaLife Omega-3 Softgels Heart Support Max Strength</a
                      >
                    </h5>
                    <div class="rating-section flex items-center mb-4">
                      <div
                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]"
                      >
                        <div
                          style="width: 80%"
                          class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]"
                        ></div>
                      </div>
                      <span
                        class="text-sm leading-[22px] font-normal inline-block ml-1"
                        >(189)</span
                      >
                    </div>
                    <div class="price-section flex items-center gap-x-3 mb-2">
                      <span
                        class="current-price text-base font-semibold text-light-primary-text"
                        >$27.49</span
                      >
                      <span
                        class="old-price text-sm leading-[22px] font-normal text-light-disabled-text line-through"
                        >$39.99</span
                      >
                      <span
                        class="discount-percentage text-sm leading-[22px] font-semibold text-error"
                        >10% OFF</span
                      >
                    </div>
                    <div class="btn-section flex items-center gap-x-4">
                      <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300' href='wishlist-style-v1.html'>
                        <i
                          class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"
                        ></i>
                      </a>
                      <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1' href='cart-single-vendor.html'>
                        <i
                          class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"
                        ></i>

                        <span>Add to Cart</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ========== Single Product Card End ========== -->
              <!-- ========== Single Product Card Start ========== -->
              <div
                class="2xl:col-span-2 lg:col-span-4 md:col-span-6 col-span-12"
              >
                <div
                  class="border border-gray-300 rounded-2xl product-card-1 p-4 group"
                >
                  <div class="product-image-container relative">
                    <div
                      class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden"
                    >
                      <a href='product-details.html'>
                        <img
                          src="assets/images/temperature-gun-3.png"
                          alt="product-1"
                          class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300"
                        />
                      </a>
                    </div>
                    <span
                      class="product-discount-badge absolute top-[11px] left-0 bg-error text-warning-lighter font-medium text-sm leading-[22px] px-1 after:absolute after:top-0 after:left-full after:z-10 after:w-1 after:h-full after:bg-[url('images/discount-shape.html')] after:bg-contain"
                      >15% OFF</span
                    >
                    <div
                      class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3"
                    >
                      <ul class="flex items-center gap-x-px">
                        <li>
                          <a aria-label='Add to Wishlist' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='wishlist-style-v1.html'>
                            <i
                              class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a aria-label='Compare' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='compare.html'>
                            <i
                              class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a
                            aria-label="Quick view"
                            class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                            href="#"
                          >
                            <i
                              class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="product-content">
                    <h5
                      class="text-base leading-6 font-semibold font-dm-sans mb-4"
                    >
                      <a href='product-details.html'>VitaLife Omega-3 Softgels Heart Support Max Strength</a
                      >
                    </h5>
                    <div class="rating-section flex items-center mb-4">
                      <div
                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]"
                      >
                        <div
                          style="width: 80%"
                          class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]"
                        ></div>
                      </div>
                      <span
                        class="text-sm leading-[22px] font-normal inline-block ml-1"
                        >(189)</span
                      >
                    </div>
                    <div class="price-section flex items-center gap-x-3 mb-2">
                      <span
                        class="current-price text-base font-semibold text-light-primary-text"
                        >$27.49</span
                      >
                      <span
                        class="old-price text-sm leading-[22px] font-normal text-light-disabled-text line-through"
                        >$39.99</span
                      >
                      <span
                        class="discount-percentage text-sm leading-[22px] font-semibold text-error"
                        >10% OFF</span
                      >
                    </div>
                    <div class="btn-section flex items-center gap-x-4">
                      <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300' href='wishlist-style-v1.html'>
                        <i
                          class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"
                        ></i>
                      </a>
                      <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1' href='cart-single-vendor.html'>
                        <i
                          class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"
                        ></i>

                        <span>Add to Cart</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ========== Single Product Card End ========== -->
              <!-- ========== Single Product Card Start ========== -->
              <div
                class="2xl:col-span-2 lg:col-span-4 md:col-span-6 col-span-12"
              >
                <div
                  class="border border-gray-300 rounded-2xl product-card-1 p-4 group"
                >
                  <div class="product-image-container relative">
                    <div
                      class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden"
                    >
                      <a href='product-details.html'>
                        <img
                          src="assets/images/hand-sanitizer-1.png"
                          alt="product-1"
                          class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300"
                        />
                      </a>
                    </div>
                    <span
                      class="product-discount-badge absolute top-[11px] left-0 bg-error text-warning-lighter font-medium text-sm leading-[22px] px-1 after:absolute after:top-0 after:left-full after:z-10 after:w-1 after:h-full after:bg-[url('images/discount-shape.html')] after:bg-contain"
                      >15% OFF</span
                    >
                    <div
                      class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3"
                    >
                      <ul class="flex items-center gap-x-px">
                        <li>
                          <a aria-label='Add to Wishlist' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='wishlist-style-v1.html'>
                            <i
                              class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a aria-label='Compare' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='compare.html'>
                            <i
                              class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a
                            aria-label="Quick view"
                            class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                            href="#"
                          >
                            <i
                              class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="product-content">
                    <h5
                      class="text-base leading-6 font-semibold font-dm-sans mb-4"
                    >
                      <a href='product-details.html'>VitaLife Omega-3 Softgels Heart Support Max Strength</a
                      >
                    </h5>
                    <div class="rating-section flex items-center mb-4">
                      <div
                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]"
                      >
                        <div
                          style="width: 80%"
                          class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]"
                        ></div>
                      </div>
                      <span
                        class="text-sm leading-[22px] font-normal inline-block ml-1"
                        >(189)</span
                      >
                    </div>
                    <div class="price-section flex items-center gap-x-3 mb-2">
                      <span
                        class="current-price text-base font-semibold text-light-primary-text"
                        >$27.49</span
                      >
                      <span
                        class="old-price text-sm leading-[22px] font-normal text-light-disabled-text line-through"
                        >$39.99</span
                      >
                      <span
                        class="discount-percentage text-sm leading-[22px] font-semibold text-error"
                        >10% OFF</span
                      >
                    </div>
                    <div class="btn-section flex items-center gap-x-4">
                      <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300' href='wishlist-style-v1.html'>
                        <i
                          class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"
                        ></i>
                      </a>
                      <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1' href='cart-single-vendor.html'>
                        <i
                          class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"
                        ></i>

                        <span>Add to Cart</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ========== Single Product Card End ========== -->
              <!-- ========== Single Product Card Start ========== -->
              <div
                class="2xl:col-span-2 lg:col-span-4 md:col-span-6 col-span-12"
              >
                <div
                  class="border border-gray-300 rounded-2xl product-card-1 p-4 group"
                >
                  <div class="product-image-container relative">
                    <div
                      class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden"
                    >
                      <a href='product-details.html'>
                        <img
                          src="assets/images/vitamin-b12.png"
                          alt="product-1"
                          class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300"
                        />
                      </a>
                    </div>
                    <span
                      class="product-discount-badge absolute top-[11px] left-0 bg-error text-warning-lighter font-medium text-sm leading-[22px] px-1 after:absolute after:top-0 after:left-full after:z-10 after:w-1 after:h-full after:bg-[url('images/discount-shape.html')] after:bg-contain"
                      >15% OFF</span
                    >
                    <div
                      class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3"
                    >
                      <ul class="flex items-center gap-x-px">
                        <li>
                          <a aria-label='Add to Wishlist' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='wishlist-style-v1.html'>
                            <i
                              class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a aria-label='Compare' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='compare.html'>
                            <i
                              class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a
                            aria-label="Quick view"
                            class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                            href="#"
                          >
                            <i
                              class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="product-content">
                    <h5
                      class="text-base leading-6 font-semibold font-dm-sans mb-4"
                    >
                      <a href='product-details.html'>VitaLife Omega-3 Softgels Heart Support Max Strength</a
                      >
                    </h5>
                    <div class="rating-section flex items-center mb-4">
                      <div
                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]"
                      >
                        <div
                          style="width: 80%"
                          class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]"
                        ></div>
                      </div>
                      <span
                        class="text-sm leading-[22px] font-normal inline-block ml-1"
                        >(189)</span
                      >
                    </div>
                    <div class="price-section flex items-center gap-x-3 mb-2">
                      <span
                        class="current-price text-base font-semibold text-light-primary-text"
                        >$27.49</span
                      >
                      <span
                        class="old-price text-sm leading-[22px] font-normal text-light-disabled-text line-through"
                        >$39.99</span
                      >
                      <span
                        class="discount-percentage text-sm leading-[22px] font-semibold text-error"
                        >10% OFF</span
                      >
                    </div>
                    <div class="btn-section flex items-center gap-x-4">
                      <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300' href='wishlist-style-v1.html'>
                        <i
                          class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"
                        ></i>
                      </a>
                      <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1' href='cart-single-vendor.html'>
                        <i
                          class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"
                        ></i>

                        <span>Add to Cart</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ========== Single Product Card End ========== -->
              <!-- ========== Single Product Card Start ========== -->
              <div
                class="2xl:col-span-2 lg:col-span-4 md:col-span-6 col-span-12"
              >
                <div
                  class="border border-gray-300 rounded-2xl product-card-1 p-4 group"
                >
                  <div class="product-image-container relative">
                    <div
                      class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden"
                    >
                      <a href='product-details.html'>
                        <img
                          src="assets/images/ever-herb.png"
                          alt="product-1"
                          class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300"
                        />
                      </a>
                    </div>
                    <span
                      class="product-discount-badge absolute top-[11px] left-0 bg-error text-warning-lighter font-medium text-sm leading-[22px] px-1 after:absolute after:top-0 after:left-full after:z-10 after:w-1 after:h-full after:bg-[url('images/discount-shape.html')] after:bg-contain"
                      >15% OFF</span
                    >
                    <div
                      class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3"
                    >
                      <ul class="flex items-center gap-x-px">
                        <li>
                          <a aria-label='Add to Wishlist' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='wishlist-style-v1.html'>
                            <i
                              class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a aria-label='Compare' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='compare.html'>
                            <i
                              class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a
                            aria-label="Quick view"
                            class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                            href="#"
                          >
                            <i
                              class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="product-content">
                    <h5
                      class="text-base leading-6 font-semibold font-dm-sans mb-4"
                    >
                      <a href='product-details.html'>VitaLife Omega-3 Softgels Heart Support Max Strength</a
                      >
                    </h5>
                    <div class="rating-section flex items-center mb-4">
                      <div
                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]"
                      >
                        <div
                          style="width: 80%"
                          class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]"
                        ></div>
                      </div>
                      <span
                        class="text-sm leading-[22px] font-normal inline-block ml-1"
                        >(189)</span
                      >
                    </div>
                    <div class="price-section flex items-center gap-x-3 mb-2">
                      <span
                        class="current-price text-base font-semibold text-light-primary-text"
                        >$27.49</span
                      >
                      <span
                        class="old-price text-sm leading-[22px] font-normal text-light-disabled-text line-through"
                        >$39.99</span
                      >
                      <span
                        class="discount-percentage text-sm leading-[22px] font-semibold text-error"
                        >10% OFF</span
                      >
                    </div>
                    <div class="btn-section flex items-center gap-x-4">
                      <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300' href='wishlist-style-v1.html'>
                        <i
                          class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"
                        ></i>
                      </a>
                      <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1' href='cart-single-vendor.html'>
                        <i
                          class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"
                        ></i>

                        <span>Add to Cart</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ========== Single Product Card End ========== -->
              <!-- ========== Single Product Card Start ========== -->
              <div
                class="2xl:col-span-2 lg:col-span-4 md:col-span-6 col-span-12"
              >
                <div
                  class="border border-gray-300 rounded-2xl product-card-1 p-4 group"
                >
                  <div class="product-image-container relative">
                    <div
                      class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden"
                    >
                      <a href='product-details.html'>
                        <img
                          src="assets/images/hand-sanitizer-2.png"
                          alt="product-1"
                          class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300"
                        />
                      </a>
                    </div>
                    <span
                      class="product-discount-badge absolute top-[11px] left-0 bg-error text-warning-lighter font-medium text-sm leading-[22px] px-1 after:absolute after:top-0 after:left-full after:z-10 after:w-1 after:h-full after:bg-[url('images/discount-shape.html')] after:bg-contain"
                      >15% OFF</span
                    >
                    <div
                      class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3"
                    >
                      <ul class="flex items-center gap-x-px">
                        <li>
                          <a aria-label='Add to Wishlist' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='wishlist-style-v1.html'>
                            <i
                              class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a aria-label='Compare' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='compare.html'>
                            <i
                              class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a
                            aria-label="Quick view"
                            class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                            href="#"
                          >
                            <i
                              class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="product-content">
                    <h5
                      class="text-base leading-6 font-semibold font-dm-sans mb-4"
                    >
                      <a href='product-details.html'>VitaLife Omega-3 Softgels Heart Support Max Strength</a
                      >
                    </h5>
                    <div class="rating-section flex items-center mb-4">
                      <div
                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]"
                      >
                        <div
                          style="width: 80%"
                          class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]"
                        ></div>
                      </div>
                      <span
                        class="text-sm leading-[22px] font-normal inline-block ml-1"
                        >(189)</span
                      >
                    </div>
                    <div class="price-section flex items-center gap-x-3 mb-2">
                      <span
                        class="current-price text-base font-semibold text-light-primary-text"
                        >$27.49</span
                      >
                      <span
                        class="old-price text-sm leading-[22px] font-normal text-light-disabled-text line-through"
                        >$39.99</span
                      >
                      <span
                        class="discount-percentage text-sm leading-[22px] font-semibold text-error"
                        >10% OFF</span
                      >
                    </div>
                    <div class="btn-section flex items-center gap-x-4">
                      <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300' href='wishlist-style-v1.html'>
                        <i
                          class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"
                        ></i>
                      </a>
                      <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1' href='cart-single-vendor.html'>
                        <i
                          class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"
                        ></i>

                        <span>Add to Cart</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ========== Single Product Card End ========== -->
              <!-- ========== Single Product Card Start ========== -->
              <div
                class="2xl:col-span-2 lg:col-span-4 md:col-span-6 col-span-12"
              >
                <div
                  class="border border-gray-300 rounded-2xl product-card-1 p-4 group"
                >
                  <div class="product-image-container relative">
                    <div
                      class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden"
                    >
                      <a href='product-details.html'>
                        <img
                          src="assets/images/gillette.png"
                          alt="product-1"
                          class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300"
                        />
                      </a>
                    </div>
                    <span
                      class="product-discount-badge absolute top-[11px] left-0 bg-error text-warning-lighter font-medium text-sm leading-[22px] px-1 after:absolute after:top-0 after:left-full after:z-10 after:w-1 after:h-full after:bg-[url('images/discount-shape.html')] after:bg-contain"
                      >15% OFF</span
                    >
                    <div
                      class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3"
                    >
                      <ul class="flex items-center gap-x-px">
                        <li>
                          <a aria-label='Add to Wishlist' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='wishlist-style-v1.html'>
                            <i
                              class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a aria-label='Compare' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='compare.html'>
                            <i
                              class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a
                            aria-label="Quick view"
                            class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                            href="#"
                          >
                            <i
                              class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="product-content">
                    <h5
                      class="text-base leading-6 font-semibold font-dm-sans mb-4"
                    >
                      <a href='product-details.html'>VitaLife Omega-3 Softgels Heart Support Max Strength</a
                      >
                    </h5>
                    <div class="rating-section flex items-center mb-4">
                      <div
                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]"
                      >
                        <div
                          style="width: 80%"
                          class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]"
                        ></div>
                      </div>
                      <span
                        class="text-sm leading-[22px] font-normal inline-block ml-1"
                        >(189)</span
                      >
                    </div>
                    <div class="price-section flex items-center gap-x-3 mb-2">
                      <span
                        class="current-price text-base font-semibold text-light-primary-text"
                        >$27.49</span
                      >
                      <span
                        class="old-price text-sm leading-[22px] font-normal text-light-disabled-text line-through"
                        >$39.99</span
                      >
                      <span
                        class="discount-percentage text-sm leading-[22px] font-semibold text-error"
                        >10% OFF</span
                      >
                    </div>
                    <div class="btn-section flex items-center gap-x-4">
                      <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300' href='wishlist-style-v1.html'>
                        <i
                          class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"
                        ></i>
                      </a>
                      <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1' href='cart-single-vendor.html'>
                        <i
                          class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"
                        ></i>

                        <span>Add to Cart</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ========== Single Product Card End ========== -->
              <!-- ========== Single Product Card Start ========== -->
              <div
                class="2xl:col-span-2 lg:col-span-4 md:col-span-6 col-span-12"
              >
                <div
                  class="border border-gray-300 rounded-2xl product-card-1 p-4 group"
                >
                  <div class="product-image-container relative">
                    <div
                      class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden"
                    >
                      <a href='product-details.html'>
                        <img
                          src="assets/images/honitus.png"
                          alt="product-1"
                          class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300"
                        />
                      </a>
                    </div>
                    <span
                      class="product-discount-badge absolute top-[11px] left-0 bg-error text-warning-lighter font-medium text-sm leading-[22px] px-1 after:absolute after:top-0 after:left-full after:z-10 after:w-1 after:h-full after:bg-[url('images/discount-shape.html')] after:bg-contain"
                      >15% OFF</span
                    >
                    <div
                      class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3"
                    >
                      <ul class="flex items-center gap-x-px">
                        <li>
                          <a aria-label='Add to Wishlist' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='wishlist-style-v1.html'>
                            <i
                              class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a aria-label='Compare' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='compare.html'>
                            <i
                              class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a
                            aria-label="Quick view"
                            class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                            href="#"
                          >
                            <i
                              class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="product-content">
                    <h5
                      class="text-base leading-6 font-semibold font-dm-sans mb-4"
                    >
                      <a href='product-details.html'>VitaLife Omega-3 Softgels Heart Support Max Strength</a
                      >
                    </h5>
                    <div class="rating-section flex items-center mb-4">
                      <div
                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]"
                      >
                        <div
                          style="width: 80%"
                          class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]"
                        ></div>
                      </div>
                      <span
                        class="text-sm leading-[22px] font-normal inline-block ml-1"
                        >(189)</span
                      >
                    </div>
                    <div class="price-section flex items-center gap-x-3 mb-2">
                      <span
                        class="current-price text-base font-semibold text-light-primary-text"
                        >$27.49</span
                      >
                      <span
                        class="old-price text-sm leading-[22px] font-normal text-light-disabled-text line-through"
                        >$39.99</span
                      >
                      <span
                        class="discount-percentage text-sm leading-[22px] font-semibold text-error"
                        >10% OFF</span
                      >
                    </div>
                    <div class="btn-section flex items-center gap-x-4">
                      <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300' href='wishlist-style-v1.html'>
                        <i
                          class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"
                        ></i>
                      </a>
                      <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1' href='cart-single-vendor.html'>
                        <i
                          class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"
                        ></i>

                        <span>Add to Cart</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ========== Single Product Card End ========== -->
              <!-- ========== Single Product Card Start ========== -->
              <div
                class="2xl:col-span-2 lg:col-span-4 md:col-span-6 col-span-12"
              >
                <div
                  class="border border-gray-300 rounded-2xl product-card-1 p-4 group"
                >
                  <div class="product-image-container relative">
                    <div
                      class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden"
                    >
                      <a href='product-details.html'>
                        <img
                          src="assets/images/liveasy.png"
                          alt="product-1"
                          class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300"
                        />
                      </a>
                    </div>
                    <span
                      class="product-discount-badge absolute top-[11px] left-0 bg-error text-warning-lighter font-medium text-sm leading-[22px] px-1 after:absolute after:top-0 after:left-full after:z-10 after:w-1 after:h-full after:bg-[url('images/discount-shape.html')] after:bg-contain"
                      >15% OFF</span
                    >
                    <div
                      class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3"
                    >
                      <ul class="flex items-center gap-x-px">
                        <li>
                          <a aria-label='Add to Wishlist' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='wishlist-style-v1.html'>
                            <i
                              class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a aria-label='Compare' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='compare.html'>
                            <i
                              class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a
                            aria-label="Quick view"
                            class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                            href="#"
                          >
                            <i
                              class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="product-content">
                    <h5
                      class="text-base leading-6 font-semibold font-dm-sans mb-4"
                    >
                      <a href='product-details.html'>VitaLife Omega-3 Softgels Heart Support Max Strength</a
                      >
                    </h5>
                    <div class="rating-section flex items-center mb-4">
                      <div
                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]"
                      >
                        <div
                          style="width: 80%"
                          class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]"
                        ></div>
                      </div>
                      <span
                        class="text-sm leading-[22px] font-normal inline-block ml-1"
                        >(189)</span
                      >
                    </div>
                    <div class="price-section flex items-center gap-x-3 mb-2">
                      <span
                        class="current-price text-base font-semibold text-light-primary-text"
                        >$27.49</span
                      >
                      <span
                        class="old-price text-sm leading-[22px] font-normal text-light-disabled-text line-through"
                        >$39.99</span
                      >
                      <span
                        class="discount-percentage text-sm leading-[22px] font-semibold text-error"
                        >10% OFF</span
                      >
                    </div>
                    <div class="btn-section flex items-center gap-x-4">
                      <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300' href='wishlist-style-v1.html'>
                        <i
                          class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"
                        ></i>
                      </a>
                      <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1' href='cart-single-vendor.html'>
                        <i
                          class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"
                        ></i>

                        <span>Add to Cart</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ========== Single Product Card End ========== -->
              <!-- ========== Single Product Card Start ========== -->
              <div
                class="2xl:col-span-2 lg:col-span-4 md:col-span-6 col-span-12"
              >
                <div
                  class="border border-gray-300 rounded-2xl product-card-1 p-4 group"
                >
                  <div class="product-image-container relative">
                    <div
                      class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden"
                    >
                      <a href='product-details.html'>
                        <img
                          src="assets/images/aooca.png"
                          alt="product-1"
                          class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300"
                        />
                      </a>
                    </div>
                    <span
                      class="product-discount-badge absolute top-[11px] left-0 bg-error text-warning-lighter font-medium text-sm leading-[22px] px-1 after:absolute after:top-0 after:left-full after:z-10 after:w-1 after:h-full after:bg-[url('images/discount-shape.html')] after:bg-contain"
                      >15% OFF</span
                    >
                    <div
                      class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3"
                    >
                      <ul class="flex items-center gap-x-px">
                        <li>
                          <a aria-label='Add to Wishlist' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='wishlist-style-v1.html'>
                            <i
                              class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a aria-label='Compare' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='compare.html'>
                            <i
                              class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a
                            aria-label="Quick view"
                            class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                            href="#"
                          >
                            <i
                              class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="product-content">
                    <h5
                      class="text-base leading-6 font-semibold font-dm-sans mb-4"
                    >
                      <a href='product-details.html'>VitaLife Omega-3 Softgels Heart Support Max Strength</a
                      >
                    </h5>
                    <div class="rating-section flex items-center mb-4">
                      <div
                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]"
                      >
                        <div
                          style="width: 80%"
                          class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]"
                        ></div>
                      </div>
                      <span
                        class="text-sm leading-[22px] font-normal inline-block ml-1"
                        >(189)</span
                      >
                    </div>
                    <div class="price-section flex items-center gap-x-3 mb-2">
                      <span
                        class="current-price text-base font-semibold text-light-primary-text"
                        >$27.49</span
                      >
                      <span
                        class="old-price text-sm leading-[22px] font-normal text-light-disabled-text line-through"
                        >$39.99</span
                      >
                      <span
                        class="discount-percentage text-sm leading-[22px] font-semibold text-error"
                        >10% OFF</span
                      >
                    </div>
                    <div class="btn-section flex items-center gap-x-4">
                      <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300' href='wishlist-style-v1.html'>
                        <i
                          class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"
                        ></i>
                      </a>
                      <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1' href='cart-single-vendor.html'>
                        <i
                          class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"
                        ></i>

                        <span>Add to Cart</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ========== Single Product Card End ========== -->
              <!-- ========== Single Product Card Start ========== -->
              <div
                class="2xl:col-span-2 lg:col-span-4 md:col-span-6 col-span-12"
              >
                <div
                  class="border border-gray-300 rounded-2xl product-card-1 p-4 group"
                >
                  <div class="product-image-container relative">
                    <div
                      class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden"
                    >
                      <a href='product-details.html'>
                        <img
                          src="assets/images/aacka.png"
                          alt="product-1"
                          class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300"
                        />
                      </a>
                    </div>
                    <span
                      class="product-discount-badge absolute top-[11px] left-0 bg-error text-warning-lighter font-medium text-sm leading-[22px] px-1 after:absolute after:top-0 after:left-full after:z-10 after:w-1 after:h-full after:bg-[url('images/discount-shape.html')] after:bg-contain"
                      >15% OFF</span
                    >
                    <div
                      class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3"
                    >
                      <ul class="flex items-center gap-x-px">
                        <li>
                          <a aria-label='Add to Wishlist' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='wishlist-style-v1.html'>
                            <i
                              class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a aria-label='Compare' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='compare.html'>
                            <i
                              class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a
                            aria-label="Quick view"
                            class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                            href="#"
                          >
                            <i
                              class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="product-content">
                    <h5
                      class="text-base leading-6 font-semibold font-dm-sans mb-4"
                    >
                      <a href='product-details.html'>VitaLife Omega-3 Softgels Heart Support Max Strength</a
                      >
                    </h5>
                    <div class="rating-section flex items-center mb-4">
                      <div
                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]"
                      >
                        <div
                          style="width: 80%"
                          class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]"
                        ></div>
                      </div>
                      <span
                        class="text-sm leading-[22px] font-normal inline-block ml-1"
                        >(189)</span
                      >
                    </div>
                    <div class="price-section flex items-center gap-x-3 mb-2">
                      <span
                        class="current-price text-base font-semibold text-light-primary-text"
                        >$27.49</span
                      >
                      <span
                        class="old-price text-sm leading-[22px] font-normal text-light-disabled-text line-through"
                        >$39.99</span
                      >
                      <span
                        class="discount-percentage text-sm leading-[22px] font-semibold text-error"
                        >10% OFF</span
                      >
                    </div>
                    <div class="btn-section flex items-center gap-x-4">
                      <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300' href='wishlist-style-v1.html'>
                        <i
                          class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"
                        ></i>
                      </a>
                      <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1' href='cart-single-vendor.html'>
                        <i
                          class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"
                        ></i>

                        <span>Add to Cart</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ========== Single Product Card End ========== -->
            </div>
          </div>
          <!-- ========== First Aid Tab End ========== -->

          <!-- ========== Diabetic Care Tab Start ========== -->
          <div class="tab-pane" id="diabetic-care">
            <div class="grid grid-cols-12 gap-6">
              <div
                class="2xl:col-span-2 lg:col-span-4 md:col-span-6 col-span-12"
              >
                <div
                  class="border border-gray-300 rounded-2xl product-card-1 p-4 group"
                >
                  <div class="product-image-container relative">
                    <div
                      class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden"
                    >
                      <a href='product-details.html'>
                        <img
                          src="assets/images/hand-sanitizer-2.png"
                          alt="product-1"
                          class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300"
                        />
                      </a>
                    </div>
                    <span
                      class="product-discount-badge absolute top-[11px] left-0 bg-error text-warning-lighter font-medium text-sm leading-[22px] px-1 after:absolute after:top-0 after:left-full after:z-10 after:w-1 after:h-full after:bg-[url('images/discount-shape.html')] after:bg-contain"
                      >15% OFF</span
                    >
                    <div
                      class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3"
                    >
                      <ul class="flex items-center gap-x-px">
                        <li>
                          <a aria-label='Add to Wishlist' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='wishlist-style-v1.html'>
                            <i
                              class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a aria-label='Compare' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='compare.html'>
                            <i
                              class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a
                            aria-label="Quick view"
                            class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                            href="#"
                          >
                            <i
                              class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="product-content">
                    <h5
                      class="text-base leading-6 font-semibold font-dm-sans mb-4"
                    >
                      <a href='product-details.html'>VitaLife Omega-3 Softgels Heart Support Max Strength</a
                      >
                    </h5>
                    <div class="rating-section flex items-center mb-4">
                      <div
                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]"
                      >
                        <div
                          style="width: 80%"
                          class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]"
                        ></div>
                      </div>
                      <span
                        class="text-sm leading-[22px] font-normal inline-block ml-1"
                        >(189)</span
                      >
                    </div>
                    <div class="price-section flex items-center gap-x-3 mb-2">
                      <span
                        class="current-price text-base font-semibold text-light-primary-text"
                        >$27.49</span
                      >
                      <span
                        class="old-price text-sm leading-[22px] font-normal text-light-disabled-text line-through"
                        >$39.99</span
                      >
                      <span
                        class="discount-percentage text-sm leading-[22px] font-semibold text-error"
                        >10% OFF</span
                      >
                    </div>
                    <div class="btn-section flex items-center gap-x-4">
                      <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300' href='wishlist-style-v1.html'>
                        <i
                          class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"
                        ></i>
                      </a>
                      <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1' href='cart-single-vendor.html'>
                        <i
                          class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"
                        ></i>

                        <span>Add to Cart</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ========== Single Product Card End ========== -->
              <!-- ========== Single Product Card Start ========== -->
              <div
                class="2xl:col-span-2 lg:col-span-4 md:col-span-6 col-span-12"
              >
                <div
                  class="border border-gray-300 rounded-2xl product-card-1 p-4 group"
                >
                  <div class="product-image-container relative">
                    <div
                      class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden"
                    >
                      <a href='product-details.html'>
                        <img
                          src="assets/images/gillette.png"
                          alt="product-1"
                          class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300"
                        />
                      </a>
                    </div>
                    <span
                      class="product-discount-badge absolute top-[11px] left-0 bg-error text-warning-lighter font-medium text-sm leading-[22px] px-1 after:absolute after:top-0 after:left-full after:z-10 after:w-1 after:h-full after:bg-[url('images/discount-shape.html')] after:bg-contain"
                      >15% OFF</span
                    >
                    <div
                      class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3"
                    >
                      <ul class="flex items-center gap-x-px">
                        <li>
                          <a aria-label='Add to Wishlist' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='wishlist-style-v1.html'>
                            <i
                              class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a aria-label='Compare' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='compare.html'>
                            <i
                              class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a
                            aria-label="Quick view"
                            class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                            href="#"
                          >
                            <i
                              class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="product-content">
                    <h5
                      class="text-base leading-6 font-semibold font-dm-sans mb-4"
                    >
                      <a href='product-details.html'>VitaLife Omega-3 Softgels Heart Support Max Strength</a
                      >
                    </h5>
                    <div class="rating-section flex items-center mb-4">
                      <div
                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]"
                      >
                        <div
                          style="width: 80%"
                          class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]"
                        ></div>
                      </div>
                      <span
                        class="text-sm leading-[22px] font-normal inline-block ml-1"
                        >(189)</span
                      >
                    </div>
                    <div class="price-section flex items-center gap-x-3 mb-2">
                      <span
                        class="current-price text-base font-semibold text-light-primary-text"
                        >$27.49</span
                      >
                      <span
                        class="old-price text-sm leading-[22px] font-normal text-light-disabled-text line-through"
                        >$39.99</span
                      >
                      <span
                        class="discount-percentage text-sm leading-[22px] font-semibold text-error"
                        >10% OFF</span
                      >
                    </div>
                    <div class="btn-section flex items-center gap-x-4">
                      <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300' href='wishlist-style-v1.html'>
                        <i
                          class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"
                        ></i>
                      </a>
                      <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1' href='cart-single-vendor.html'>
                        <i
                          class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"
                        ></i>

                        <span>Add to Cart</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ========== Single Product Card End ========== -->
              <!-- ========== Single Product Card Start ========== -->
              <div
                class="2xl:col-span-2 lg:col-span-4 md:col-span-6 col-span-12"
              >
                <div
                  class="border border-gray-300 rounded-2xl product-card-1 p-4 group"
                >
                  <div class="product-image-container relative">
                    <div
                      class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden"
                    >
                      <a href='product-details.html'>
                        <img
                          src="assets/images/honitus.png"
                          alt="product-1"
                          class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300"
                        />
                      </a>
                    </div>
                    <span
                      class="product-discount-badge absolute top-[11px] left-0 bg-error text-warning-lighter font-medium text-sm leading-[22px] px-1 after:absolute after:top-0 after:left-full after:z-10 after:w-1 after:h-full after:bg-[url('images/discount-shape.html')] after:bg-contain"
                      >15% OFF</span
                    >
                    <div
                      class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3"
                    >
                      <ul class="flex items-center gap-x-px">
                        <li>
                          <a aria-label='Add to Wishlist' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='wishlist-style-v1.html'>
                            <i
                              class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a aria-label='Compare' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='compare.html'>
                            <i
                              class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a
                            aria-label="Quick view"
                            class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                            href="#"
                          >
                            <i
                              class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="product-content">
                    <h5
                      class="text-base leading-6 font-semibold font-dm-sans mb-4"
                    >
                      <a href='product-details.html'>VitaLife Omega-3 Softgels Heart Support Max Strength</a
                      >
                    </h5>
                    <div class="rating-section flex items-center mb-4">
                      <div
                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]"
                      >
                        <div
                          style="width: 80%"
                          class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]"
                        ></div>
                      </div>
                      <span
                        class="text-sm leading-[22px] font-normal inline-block ml-1"
                        >(189)</span
                      >
                    </div>
                    <div class="price-section flex items-center gap-x-3 mb-2">
                      <span
                        class="current-price text-base font-semibold text-light-primary-text"
                        >$27.49</span
                      >
                      <span
                        class="old-price text-sm leading-[22px] font-normal text-light-disabled-text line-through"
                        >$39.99</span
                      >
                      <span
                        class="discount-percentage text-sm leading-[22px] font-semibold text-error"
                        >10% OFF</span
                      >
                    </div>
                    <div class="btn-section flex items-center gap-x-4">
                      <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300' href='wishlist-style-v1.html'>
                        <i
                          class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"
                        ></i>
                      </a>
                      <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1' href='cart-single-vendor.html'>
                        <i
                          class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"
                        ></i>

                        <span>Add to Cart</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ========== Single Product Card End ========== -->
              <!-- ========== Single Product Card Start ========== -->
              <div
                class="2xl:col-span-2 lg:col-span-4 md:col-span-6 col-span-12"
              >
                <div
                  class="border border-gray-300 rounded-2xl product-card-1 p-4 group"
                >
                  <div class="product-image-container relative">
                    <div
                      class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden"
                    >
                      <a href='product-details.html'>
                        <img
                          src="assets/images/liveasy.png"
                          alt="product-1"
                          class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300"
                        />
                      </a>
                    </div>
                    <span
                      class="product-discount-badge absolute top-[11px] left-0 bg-error text-warning-lighter font-medium text-sm leading-[22px] px-1 after:absolute after:top-0 after:left-full after:z-10 after:w-1 after:h-full after:bg-[url('images/discount-shape.html')] after:bg-contain"
                      >15% OFF</span
                    >
                    <div
                      class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3"
                    >
                      <ul class="flex items-center gap-x-px">
                        <li>
                          <a aria-label='Add to Wishlist' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='wishlist-style-v1.html'>
                            <i
                              class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a aria-label='Compare' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='compare.html'>
                            <i
                              class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a
                            aria-label="Quick view"
                            class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                            href="#"
                          >
                            <i
                              class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="product-content">
                    <h5
                      class="text-base leading-6 font-semibold font-dm-sans mb-4"
                    >
                      <a href='product-details.html'>VitaLife Omega-3 Softgels Heart Support Max Strength</a
                      >
                    </h5>
                    <div class="rating-section flex items-center mb-4">
                      <div
                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]"
                      >
                        <div
                          style="width: 80%"
                          class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]"
                        ></div>
                      </div>
                      <span
                        class="text-sm leading-[22px] font-normal inline-block ml-1"
                        >(189)</span
                      >
                    </div>
                    <div class="price-section flex items-center gap-x-3 mb-2">
                      <span
                        class="current-price text-base font-semibold text-light-primary-text"
                        >$27.49</span
                      >
                      <span
                        class="old-price text-sm leading-[22px] font-normal text-light-disabled-text line-through"
                        >$39.99</span
                      >
                      <span
                        class="discount-percentage text-sm leading-[22px] font-semibold text-error"
                        >10% OFF</span
                      >
                    </div>
                    <div class="btn-section flex items-center gap-x-4">
                      <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300' href='wishlist-style-v1.html'>
                        <i
                          class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"
                        ></i>
                      </a>
                      <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1' href='cart-single-vendor.html'>
                        <i
                          class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"
                        ></i>

                        <span>Add to Cart</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ========== Single Product Card End ========== -->
              <!-- ========== Single Product Card Start ========== -->
              <div
                class="2xl:col-span-2 lg:col-span-4 md:col-span-6 col-span-12"
              >
                <div
                  class="border border-gray-300 rounded-2xl product-card-1 p-4 group"
                >
                  <div class="product-image-container relative">
                    <div
                      class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden"
                    >
                      <a href='product-details.html'>
                        <img
                          src="assets/images/aooca.png"
                          alt="product-1"
                          class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300"
                        />
                      </a>
                    </div>
                    <span
                      class="product-discount-badge absolute top-[11px] left-0 bg-error text-warning-lighter font-medium text-sm leading-[22px] px-1 after:absolute after:top-0 after:left-full after:z-10 after:w-1 after:h-full after:bg-[url('images/discount-shape.html')] after:bg-contain"
                      >15% OFF</span
                    >
                    <div
                      class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3"
                    >
                      <ul class="flex items-center gap-x-px">
                        <li>
                          <a aria-label='Add to Wishlist' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='wishlist-style-v1.html'>
                            <i
                              class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a aria-label='Compare' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='compare.html'>
                            <i
                              class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a
                            aria-label="Quick view"
                            class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                            href="#"
                          >
                            <i
                              class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="product-content">
                    <h5
                      class="text-base leading-6 font-semibold font-dm-sans mb-4"
                    >
                      <a href='product-details.html'>VitaLife Omega-3 Softgels Heart Support Max Strength</a
                      >
                    </h5>
                    <div class="rating-section flex items-center mb-4">
                      <div
                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]"
                      >
                        <div
                          style="width: 80%"
                          class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]"
                        ></div>
                      </div>
                      <span
                        class="text-sm leading-[22px] font-normal inline-block ml-1"
                        >(189)</span
                      >
                    </div>
                    <div class="price-section flex items-center gap-x-3 mb-2">
                      <span
                        class="current-price text-base font-semibold text-light-primary-text"
                        >$27.49</span
                      >
                      <span
                        class="old-price text-sm leading-[22px] font-normal text-light-disabled-text line-through"
                        >$39.99</span
                      >
                      <span
                        class="discount-percentage text-sm leading-[22px] font-semibold text-error"
                        >10% OFF</span
                      >
                    </div>
                    <div class="btn-section flex items-center gap-x-4">
                      <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300' href='wishlist-style-v1.html'>
                        <i
                          class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"
                        ></i>
                      </a>
                      <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1' href='cart-single-vendor.html'>
                        <i
                          class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"
                        ></i>

                        <span>Add to Cart</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ========== Single Product Card End ========== -->
              <!-- ========== Single Product Card Start ========== -->
              <div
                class="2xl:col-span-2 lg:col-span-4 md:col-span-6 col-span-12"
              >
                <div
                  class="border border-gray-300 rounded-2xl product-card-1 p-4 group"
                >
                  <div class="product-image-container relative">
                    <div
                      class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden"
                    >
                      <a href='product-details.html'>
                        <img
                          src="assets/images/aacka.png"
                          alt="product-1"
                          class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300"
                        />
                      </a>
                    </div>
                    <span
                      class="product-discount-badge absolute top-[11px] left-0 bg-error text-warning-lighter font-medium text-sm leading-[22px] px-1 after:absolute after:top-0 after:left-full after:z-10 after:w-1 after:h-full after:bg-[url('images/discount-shape.html')] after:bg-contain"
                      >15% OFF</span
                    >
                    <div
                      class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3"
                    >
                      <ul class="flex items-center gap-x-px">
                        <li>
                          <a aria-label='Add to Wishlist' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='wishlist-style-v1.html'>
                            <i
                              class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a aria-label='Compare' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='compare.html'>
                            <i
                              class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a
                            aria-label="Quick view"
                            class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                            href="#"
                          >
                            <i
                              class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="product-content">
                    <h5
                      class="text-base leading-6 font-semibold font-dm-sans mb-4"
                    >
                      <a href='product-details.html'>VitaLife Omega-3 Softgels Heart Support Max Strength</a
                      >
                    </h5>
                    <div class="rating-section flex items-center mb-4">
                      <div
                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]"
                      >
                        <div
                          style="width: 80%"
                          class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]"
                        ></div>
                      </div>
                      <span
                        class="text-sm leading-[22px] font-normal inline-block ml-1"
                        >(189)</span
                      >
                    </div>
                    <div class="price-section flex items-center gap-x-3 mb-2">
                      <span
                        class="current-price text-base font-semibold text-light-primary-text"
                        >$27.49</span
                      >
                      <span
                        class="old-price text-sm leading-[22px] font-normal text-light-disabled-text line-through"
                        >$39.99</span
                      >
                      <span
                        class="discount-percentage text-sm leading-[22px] font-semibold text-error"
                        >10% OFF</span
                      >
                    </div>
                    <div class="btn-section flex items-center gap-x-4">
                      <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300' href='wishlist-style-v1.html'>
                        <i
                          class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"
                        ></i>
                      </a>
                      <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1' href='cart-single-vendor.html'>
                        <i
                          class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"
                        ></i>

                        <span>Add to Cart</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ========== Single Product Card End ========== -->
              <!-- ========== Single Product Card Start ========== -->
              <div
                class="2xl:col-span-2 lg:col-span-4 md:col-span-6 col-span-12"
              >
                <div
                  class="border border-gray-300 rounded-2xl product-card-1 p-4 group"
                >
                  <div class="product-image-container relative">
                    <div
                      class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden"
                    >
                      <a href='product-details.html'>
                        <img
                          src="assets/images/softovac.png"
                          alt="product-1"
                          class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300"
                        />
                      </a>
                    </div>
                    <span
                      class="product-discount-badge absolute top-[11px] left-0 bg-error text-warning-lighter font-medium text-sm leading-[22px] px-1 after:absolute after:top-0 after:left-full after:z-10 after:w-1 after:h-full after:bg-[url('images/discount-shape.html')] after:bg-contain"
                      >15% OFF</span
                    >
                    <div
                      class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3"
                    >
                      <ul class="flex items-center gap-x-px">
                        <li>
                          <a aria-label='Add to Wishlist' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='wishlist-style-v1.html'>
                            <i
                              class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a aria-label='Compare' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='compare.html'>
                            <i
                              class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a
                            aria-label="Quick view"
                            class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                            href="#"
                          >
                            <i
                              class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="product-content">
                    <h5
                      class="text-base leading-6 font-semibold font-dm-sans mb-4"
                    >
                      <a href='product-details.html'>VitaLife Omega-3 Softgels Heart Support Max Strength</a
                      >
                    </h5>
                    <div class="rating-section flex items-center mb-4">
                      <div
                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]"
                      >
                        <div
                          style="width: 80%"
                          class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]"
                        ></div>
                      </div>
                      <span
                        class="text-sm leading-[22px] font-normal inline-block ml-1"
                        >(189)</span
                      >
                    </div>
                    <div class="price-section flex items-center gap-x-3 mb-2">
                      <span
                        class="current-price text-base font-semibold text-light-primary-text"
                        >$27.49</span
                      >
                      <span
                        class="old-price text-sm leading-[22px] font-normal text-light-disabled-text line-through"
                        >$39.99</span
                      >
                      <span
                        class="discount-percentage text-sm leading-[22px] font-semibold text-error"
                        >10% OFF</span
                      >
                    </div>
                    <div class="btn-section flex items-center gap-x-4">
                      <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300' href='wishlist-style-v1.html'>
                        <i
                          class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"
                        ></i>
                      </a>
                      <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1' href='cart-single-vendor.html'>
                        <i
                          class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"
                        ></i>

                        <span>Add to Cart</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ========== Single Product Card End ========== -->
              <!-- ========== Single Product Card Start ========== -->
              <div
                class="2xl:col-span-2 lg:col-span-4 md:col-span-6 col-span-12"
              >
                <div
                  class="border border-gray-300 rounded-2xl product-card-1 p-4 group"
                >
                  <div class="product-image-container relative">
                    <div
                      class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden"
                    >
                      <a href='product-details.html'>
                        <img
                          src="assets/images/vitamin-c.png"
                          alt="product-1"
                          class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300"
                        />
                      </a>
                    </div>
                    <span
                      class="product-discount-badge absolute top-[11px] left-0 bg-error text-warning-lighter font-medium text-sm leading-[22px] px-1 after:absolute after:top-0 after:left-full after:z-10 after:w-1 after:h-full after:bg-[url('images/discount-shape.html')] after:bg-contain"
                      >15% OFF</span
                    >
                    <div
                      class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3"
                    >
                      <ul class="flex items-center gap-x-px">
                        <li>
                          <a aria-label='Add to Wishlist' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='wishlist-style-v1.html'>
                            <i
                              class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a aria-label='Compare' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='compare.html'>
                            <i
                              class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a
                            aria-label="Quick view"
                            class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                            href="#"
                          >
                            <i
                              class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="product-content">
                    <h5
                      class="text-base leading-6 font-semibold font-dm-sans mb-4"
                    >
                      <a href='product-details.html'>VitaLife Omega-3 Softgels Heart Support Max Strength</a
                      >
                    </h5>
                    <div class="rating-section flex items-center mb-4">
                      <div
                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]"
                      >
                        <div
                          style="width: 80%"
                          class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]"
                        ></div>
                      </div>
                      <span
                        class="text-sm leading-[22px] font-normal inline-block ml-1"
                        >(189)</span
                      >
                    </div>
                    <div class="price-section flex items-center gap-x-3 mb-2">
                      <span
                        class="current-price text-base font-semibold text-light-primary-text"
                        >$27.49</span
                      >
                      <span
                        class="old-price text-sm leading-[22px] font-normal text-light-disabled-text line-through"
                        >$39.99</span
                      >
                      <span
                        class="discount-percentage text-sm leading-[22px] font-semibold text-error"
                        >10% OFF</span
                      >
                    </div>
                    <div class="btn-section flex items-center gap-x-4">
                      <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300' href='wishlist-style-v1.html'>
                        <i
                          class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"
                        ></i>
                      </a>
                      <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1' href='cart-single-vendor.html'>
                        <i
                          class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"
                        ></i>

                        <span>Add to Cart</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ========== Single Product Card End ========== -->
              <!-- ========== Single Product Card Start ========== -->
              <div
                class="2xl:col-span-2 lg:col-span-4 md:col-span-6 col-span-12"
              >
                <div
                  class="border border-gray-300 rounded-2xl product-card-1 p-4 group"
                >
                  <div class="product-image-container relative">
                    <div
                      class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden"
                    >
                      <a href='product-details.html'>
                        <img
                          src="assets/images/temperature-gun-3.png"
                          alt="product-1"
                          class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300"
                        />
                      </a>
                    </div>
                    <span
                      class="product-discount-badge absolute top-[11px] left-0 bg-error text-warning-lighter font-medium text-sm leading-[22px] px-1 after:absolute after:top-0 after:left-full after:z-10 after:w-1 after:h-full after:bg-[url('images/discount-shape.html')] after:bg-contain"
                      >15% OFF</span
                    >
                    <div
                      class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3"
                    >
                      <ul class="flex items-center gap-x-px">
                        <li>
                          <a aria-label='Add to Wishlist' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='wishlist-style-v1.html'>
                            <i
                              class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a aria-label='Compare' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='compare.html'>
                            <i
                              class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a
                            aria-label="Quick view"
                            class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                            href="#"
                          >
                            <i
                              class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="product-content">
                    <h5
                      class="text-base leading-6 font-semibold font-dm-sans mb-4"
                    >
                      <a href='product-details.html'>VitaLife Omega-3 Softgels Heart Support Max Strength</a
                      >
                    </h5>
                    <div class="rating-section flex items-center mb-4">
                      <div
                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]"
                      >
                        <div
                          style="width: 80%"
                          class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]"
                        ></div>
                      </div>
                      <span
                        class="text-sm leading-[22px] font-normal inline-block ml-1"
                        >(189)</span
                      >
                    </div>
                    <div class="price-section flex items-center gap-x-3 mb-2">
                      <span
                        class="current-price text-base font-semibold text-light-primary-text"
                        >$27.49</span
                      >
                      <span
                        class="old-price text-sm leading-[22px] font-normal text-light-disabled-text line-through"
                        >$39.99</span
                      >
                      <span
                        class="discount-percentage text-sm leading-[22px] font-semibold text-error"
                        >10% OFF</span
                      >
                    </div>
                    <div class="btn-section flex items-center gap-x-4">
                      <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300' href='wishlist-style-v1.html'>
                        <i
                          class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"
                        ></i>
                      </a>
                      <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1' href='cart-single-vendor.html'>
                        <i
                          class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"
                        ></i>

                        <span>Add to Cart</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ========== Single Product Card End ========== -->
              <!-- ========== Single Product Card Start ========== -->
              <div
                class="2xl:col-span-2 lg:col-span-4 md:col-span-6 col-span-12"
              >
                <div
                  class="border border-gray-300 rounded-2xl product-card-1 p-4 group"
                >
                  <div class="product-image-container relative">
                    <div
                      class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden"
                    >
                      <a href='product-details.html'>
                        <img
                          src="assets/images/hand-sanitizer-1.png"
                          alt="product-1"
                          class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300"
                        />
                      </a>
                    </div>
                    <span
                      class="product-discount-badge absolute top-[11px] left-0 bg-error text-warning-lighter font-medium text-sm leading-[22px] px-1 after:absolute after:top-0 after:left-full after:z-10 after:w-1 after:h-full after:bg-[url('images/discount-shape.html')] after:bg-contain"
                      >15% OFF</span
                    >
                    <div
                      class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3"
                    >
                      <ul class="flex items-center gap-x-px">
                        <li>
                          <a aria-label='Add to Wishlist' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='wishlist-style-v1.html'>
                            <i
                              class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a aria-label='Compare' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='compare.html'>
                            <i
                              class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a
                            aria-label="Quick view"
                            class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                            href="#"
                          >
                            <i
                              class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="product-content">
                    <h5
                      class="text-base leading-6 font-semibold font-dm-sans mb-4"
                    >
                      <a href='product-details.html'>VitaLife Omega-3 Softgels Heart Support Max Strength</a
                      >
                    </h5>
                    <div class="rating-section flex items-center mb-4">
                      <div
                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]"
                      >
                        <div
                          style="width: 80%"
                          class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]"
                        ></div>
                      </div>
                      <span
                        class="text-sm leading-[22px] font-normal inline-block ml-1"
                        >(189)</span
                      >
                    </div>
                    <div class="price-section flex items-center gap-x-3 mb-2">
                      <span
                        class="current-price text-base font-semibold text-light-primary-text"
                        >$27.49</span
                      >
                      <span
                        class="old-price text-sm leading-[22px] font-normal text-light-disabled-text line-through"
                        >$39.99</span
                      >
                      <span
                        class="discount-percentage text-sm leading-[22px] font-semibold text-error"
                        >10% OFF</span
                      >
                    </div>
                    <div class="btn-section flex items-center gap-x-4">
                      <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300' href='wishlist-style-v1.html'>
                        <i
                          class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"
                        ></i>
                      </a>
                      <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1' href='cart-single-vendor.html'>
                        <i
                          class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"
                        ></i>

                        <span>Add to Cart</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ========== Single Product Card End ========== -->
              <!-- ========== Single Product Card Start ========== -->
              <div
                class="2xl:col-span-2 lg:col-span-4 md:col-span-6 col-span-12"
              >
                <div
                  class="border border-gray-300 rounded-2xl product-card-1 p-4 group"
                >
                  <div class="product-image-container relative">
                    <div
                      class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden"
                    >
                      <a href='product-details.html'>
                        <img
                          src="assets/images/vitamin-b12.png"
                          alt="product-1"
                          class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300"
                        />
                      </a>
                    </div>
                    <span
                      class="product-discount-badge absolute top-[11px] left-0 bg-error text-warning-lighter font-medium text-sm leading-[22px] px-1 after:absolute after:top-0 after:left-full after:z-10 after:w-1 after:h-full after:bg-[url('images/discount-shape.html')] after:bg-contain"
                      >15% OFF</span
                    >
                    <div
                      class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3"
                    >
                      <ul class="flex items-center gap-x-px">
                        <li>
                          <a aria-label='Add to Wishlist' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='wishlist-style-v1.html'>
                            <i
                              class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a aria-label='Compare' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='compare.html'>
                            <i
                              class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a
                            aria-label="Quick view"
                            class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                            href="#"
                          >
                            <i
                              class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="product-content">
                    <h5
                      class="text-base leading-6 font-semibold font-dm-sans mb-4"
                    >
                      <a href='product-details.html'>VitaLife Omega-3 Softgels Heart Support Max Strength</a
                      >
                    </h5>
                    <div class="rating-section flex items-center mb-4">
                      <div
                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]"
                      >
                        <div
                          style="width: 80%"
                          class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]"
                        ></div>
                      </div>
                      <span
                        class="text-sm leading-[22px] font-normal inline-block ml-1"
                        >(189)</span
                      >
                    </div>
                    <div class="price-section flex items-center gap-x-3 mb-2">
                      <span
                        class="current-price text-base font-semibold text-light-primary-text"
                        >$27.49</span
                      >
                      <span
                        class="old-price text-sm leading-[22px] font-normal text-light-disabled-text line-through"
                        >$39.99</span
                      >
                      <span
                        class="discount-percentage text-sm leading-[22px] font-semibold text-error"
                        >10% OFF</span
                      >
                    </div>
                    <div class="btn-section flex items-center gap-x-4">
                      <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300' href='wishlist-style-v1.html'>
                        <i
                          class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"
                        ></i>
                      </a>
                      <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1' href='cart-single-vendor.html'>
                        <i
                          class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"
                        ></i>

                        <span>Add to Cart</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ========== Single Product Card End ========== -->
              <!-- ========== Single Product Card Start ========== -->
              <div
                class="2xl:col-span-2 lg:col-span-4 md:col-span-6 col-span-12"
              >
                <div
                  class="border border-gray-300 rounded-2xl product-card-1 p-4 group"
                >
                  <div class="product-image-container relative">
                    <div
                      class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden"
                    >
                      <a href='product-details.html'>
                        <img
                          src="assets/images/ever-herb.png"
                          alt="product-1"
                          class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300"
                        />
                      </a>
                    </div>
                    <span
                      class="product-discount-badge absolute top-[11px] left-0 bg-error text-warning-lighter font-medium text-sm leading-[22px] px-1 after:absolute after:top-0 after:left-full after:z-10 after:w-1 after:h-full after:bg-[url('images/discount-shape.html')] after:bg-contain"
                      >15% OFF</span
                    >
                    <div
                      class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3"
                    >
                      <ul class="flex items-center gap-x-px">
                        <li>
                          <a aria-label='Add to Wishlist' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='wishlist-style-v1.html'>
                            <i
                              class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a aria-label='Compare' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='compare.html'>
                            <i
                              class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a
                            aria-label="Quick view"
                            class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                            href="#"
                          >
                            <i
                              class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="product-content">
                    <h5
                      class="text-base leading-6 font-semibold font-dm-sans mb-4"
                    >
                      <a href='product-details.html'>VitaLife Omega-3 Softgels Heart Support Max Strength</a
                      >
                    </h5>
                    <div class="rating-section flex items-center mb-4">
                      <div
                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]"
                      >
                        <div
                          style="width: 80%"
                          class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]"
                        ></div>
                      </div>
                      <span
                        class="text-sm leading-[22px] font-normal inline-block ml-1"
                        >(189)</span
                      >
                    </div>
                    <div class="price-section flex items-center gap-x-3 mb-2">
                      <span
                        class="current-price text-base font-semibold text-light-primary-text"
                        >$27.49</span
                      >
                      <span
                        class="old-price text-sm leading-[22px] font-normal text-light-disabled-text line-through"
                        >$39.99</span
                      >
                      <span
                        class="discount-percentage text-sm leading-[22px] font-semibold text-error"
                        >10% OFF</span
                      >
                    </div>
                    <div class="btn-section flex items-center gap-x-4">
                      <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300' href='wishlist-style-v1.html'>
                        <i
                          class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"
                        ></i>
                      </a>
                      <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1' href='cart-single-vendor.html'>
                        <i
                          class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"
                        ></i>

                        <span>Add to Cart</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ========== Single Product Card End ========== -->
            </div>
          </div>
          <!-- ========== Diabetic Care Tab End ========== -->

          <!-- ========== Herbal Tab Start ========== -->
          <div class="tab-pane" id="herbal">
            <div class="grid grid-cols-12 gap-6">
              <!-- ========== Single Product Card Start ========== -->
              <div
                class="2xl:col-span-2 lg:col-span-4 md:col-span-6 col-span-12"
              >
                <div
                  class="border border-gray-300 rounded-2xl product-card-1 p-4 group"
                >
                  <div class="product-image-container relative">
                    <div
                      class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden"
                    >
                      <a href='product-details.html'>
                        <img
                          src="assets/images/softovac.png"
                          alt="product-1"
                          class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300"
                        />
                      </a>
                    </div>
                    <span
                      class="product-discount-badge absolute top-[11px] left-0 bg-error text-warning-lighter font-medium text-sm leading-[22px] px-1 after:absolute after:top-0 after:left-full after:z-10 after:w-1 after:h-full after:bg-[url('images/discount-shape.html')] after:bg-contain"
                      >15% OFF</span
                    >
                    <div
                      class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3"
                    >
                      <ul class="flex items-center gap-x-px">
                        <li>
                          <a aria-label='Add to Wishlist' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='wishlist-style-v1.html'>
                            <i
                              class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a aria-label='Compare' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='compare.html'>
                            <i
                              class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a
                            aria-label="Quick view"
                            class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                            href="#"
                          >
                            <i
                              class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="product-content">
                    <h5
                      class="text-base leading-6 font-semibold font-dm-sans mb-4"
                    >
                      <a href='product-details.html'>VitaLife Omega-3 Softgels Heart Support Max Strength</a
                      >
                    </h5>
                    <div class="rating-section flex items-center mb-4">
                      <div
                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]"
                      >
                        <div
                          style="width: 80%"
                          class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]"
                        ></div>
                      </div>
                      <span
                        class="text-sm leading-[22px] font-normal inline-block ml-1"
                        >(189)</span
                      >
                    </div>
                    <div class="price-section flex items-center gap-x-3 mb-2">
                      <span
                        class="current-price text-base font-semibold text-light-primary-text"
                        >$27.49</span
                      >
                      <span
                        class="old-price text-sm leading-[22px] font-normal text-light-disabled-text line-through"
                        >$39.99</span
                      >
                      <span
                        class="discount-percentage text-sm leading-[22px] font-semibold text-error"
                        >10% OFF</span
                      >
                    </div>
                    <div class="btn-section flex items-center gap-x-4">
                      <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300' href='wishlist-style-v1.html'>
                        <i
                          class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"
                        ></i>
                      </a>
                      <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1' href='cart-single-vendor.html'>
                        <i
                          class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"
                        ></i>

                        <span>Add to Cart</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ========== Single Product Card End ========== -->
              <!-- ========== Single Product Card Start ========== -->
              <div
                class="2xl:col-span-2 lg:col-span-4 md:col-span-6 col-span-12"
              >
                <div
                  class="border border-gray-300 rounded-2xl product-card-1 p-4 group"
                >
                  <div class="product-image-container relative">
                    <div
                      class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden"
                    >
                      <a href='product-details.html'>
                        <img
                          src="assets/images/vitamin-c.png"
                          alt="product-1"
                          class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300"
                        />
                      </a>
                    </div>
                    <span
                      class="product-discount-badge absolute top-[11px] left-0 bg-error text-warning-lighter font-medium text-sm leading-[22px] px-1 after:absolute after:top-0 after:left-full after:z-10 after:w-1 after:h-full after:bg-[url('images/discount-shape.html')] after:bg-contain"
                      >15% OFF</span
                    >
                    <div
                      class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3"
                    >
                      <ul class="flex items-center gap-x-px">
                        <li>
                          <a aria-label='Add to Wishlist' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='wishlist-style-v1.html'>
                            <i
                              class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a aria-label='Compare' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='compare.html'>
                            <i
                              class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a
                            aria-label="Quick view"
                            class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                            href="#"
                          >
                            <i
                              class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="product-content">
                    <h5
                      class="text-base leading-6 font-semibold font-dm-sans mb-4"
                    >
                      <a href='product-details.html'>VitaLife Omega-3 Softgels Heart Support Max Strength</a
                      >
                    </h5>
                    <div class="rating-section flex items-center mb-4">
                      <div
                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]"
                      >
                        <div
                          style="width: 80%"
                          class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]"
                        ></div>
                      </div>
                      <span
                        class="text-sm leading-[22px] font-normal inline-block ml-1"
                        >(189)</span
                      >
                    </div>
                    <div class="price-section flex items-center gap-x-3 mb-2">
                      <span
                        class="current-price text-base font-semibold text-light-primary-text"
                        >$27.49</span
                      >
                      <span
                        class="old-price text-sm leading-[22px] font-normal text-light-disabled-text line-through"
                        >$39.99</span
                      >
                      <span
                        class="discount-percentage text-sm leading-[22px] font-semibold text-error"
                        >10% OFF</span
                      >
                    </div>
                    <div class="btn-section flex items-center gap-x-4">
                      <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300' href='wishlist-style-v1.html'>
                        <i
                          class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"
                        ></i>
                      </a>
                      <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1' href='cart-single-vendor.html'>
                        <i
                          class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"
                        ></i>

                        <span>Add to Cart</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ========== Single Product Card End ========== -->
              <!-- ========== Single Product Card Start ========== -->
              <div
                class="2xl:col-span-2 lg:col-span-4 md:col-span-6 col-span-12"
              >
                <div
                  class="border border-gray-300 rounded-2xl product-card-1 p-4 group"
                >
                  <div class="product-image-container relative">
                    <div
                      class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden"
                    >
                      <a href='product-details.html'>
                        <img
                          src="assets/images/temperature-gun-3.png"
                          alt="product-1"
                          class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300"
                        />
                      </a>
                    </div>
                    <span
                      class="product-discount-badge absolute top-[11px] left-0 bg-error text-warning-lighter font-medium text-sm leading-[22px] px-1 after:absolute after:top-0 after:left-full after:z-10 after:w-1 after:h-full after:bg-[url('images/discount-shape.html')] after:bg-contain"
                      >15% OFF</span
                    >
                    <div
                      class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3"
                    >
                      <ul class="flex items-center gap-x-px">
                        <li>
                          <a aria-label='Add to Wishlist' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='wishlist-style-v1.html'>
                            <i
                              class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a aria-label='Compare' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='compare.html'>
                            <i
                              class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a
                            aria-label="Quick view"
                            class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                            href="#"
                          >
                            <i
                              class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="product-content">
                    <h5
                      class="text-base leading-6 font-semibold font-dm-sans mb-4"
                    >
                      <a href='product-details.html'>VitaLife Omega-3 Softgels Heart Support Max Strength</a
                      >
                    </h5>
                    <div class="rating-section flex items-center mb-4">
                      <div
                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]"
                      >
                        <div
                          style="width: 80%"
                          class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]"
                        ></div>
                      </div>
                      <span
                        class="text-sm leading-[22px] font-normal inline-block ml-1"
                        >(189)</span
                      >
                    </div>
                    <div class="price-section flex items-center gap-x-3 mb-2">
                      <span
                        class="current-price text-base font-semibold text-light-primary-text"
                        >$27.49</span
                      >
                      <span
                        class="old-price text-sm leading-[22px] font-normal text-light-disabled-text line-through"
                        >$39.99</span
                      >
                      <span
                        class="discount-percentage text-sm leading-[22px] font-semibold text-error"
                        >10% OFF</span
                      >
                    </div>
                    <div class="btn-section flex items-center gap-x-4">
                      <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300' href='wishlist-style-v1.html'>
                        <i
                          class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"
                        ></i>
                      </a>
                      <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1' href='cart-single-vendor.html'>
                        <i
                          class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"
                        ></i>

                        <span>Add to Cart</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ========== Single Product Card End ========== -->
              <!-- ========== Single Product Card Start ========== -->
              <div
                class="2xl:col-span-2 lg:col-span-4 md:col-span-6 col-span-12"
              >
                <div
                  class="border border-gray-300 rounded-2xl product-card-1 p-4 group"
                >
                  <div class="product-image-container relative">
                    <div
                      class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden"
                    >
                      <a href='product-details.html'>
                        <img
                          src="assets/images/hand-sanitizer-1.png"
                          alt="product-1"
                          class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300"
                        />
                      </a>
                    </div>
                    <span
                      class="product-discount-badge absolute top-[11px] left-0 bg-error text-warning-lighter font-medium text-sm leading-[22px] px-1 after:absolute after:top-0 after:left-full after:z-10 after:w-1 after:h-full after:bg-[url('images/discount-shape.html')] after:bg-contain"
                      >15% OFF</span
                    >
                    <div
                      class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3"
                    >
                      <ul class="flex items-center gap-x-px">
                        <li>
                          <a aria-label='Add to Wishlist' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='wishlist-style-v1.html'>
                            <i
                              class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a aria-label='Compare' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='compare.html'>
                            <i
                              class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a
                            aria-label="Quick view"
                            class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                            href="#"
                          >
                            <i
                              class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="product-content">
                    <h5
                      class="text-base leading-6 font-semibold font-dm-sans mb-4"
                    >
                      <a href='product-details.html'>VitaLife Omega-3 Softgels Heart Support Max Strength</a
                      >
                    </h5>
                    <div class="rating-section flex items-center mb-4">
                      <div
                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]"
                      >
                        <div
                          style="width: 80%"
                          class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]"
                        ></div>
                      </div>
                      <span
                        class="text-sm leading-[22px] font-normal inline-block ml-1"
                        >(189)</span
                      >
                    </div>
                    <div class="price-section flex items-center gap-x-3 mb-2">
                      <span
                        class="current-price text-base font-semibold text-light-primary-text"
                        >$27.49</span
                      >
                      <span
                        class="old-price text-sm leading-[22px] font-normal text-light-disabled-text line-through"
                        >$39.99</span
                      >
                      <span
                        class="discount-percentage text-sm leading-[22px] font-semibold text-error"
                        >10% OFF</span
                      >
                    </div>
                    <div class="btn-section flex items-center gap-x-4">
                      <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300' href='wishlist-style-v1.html'>
                        <i
                          class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"
                        ></i>
                      </a>
                      <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1' href='cart-single-vendor.html'>
                        <i
                          class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"
                        ></i>

                        <span>Add to Cart</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ========== Single Product Card End ========== -->
              <!-- ========== Single Product Card Start ========== -->
              <div
                class="2xl:col-span-2 lg:col-span-4 md:col-span-6 col-span-12"
              >
                <div
                  class="border border-gray-300 rounded-2xl product-card-1 p-4 group"
                >
                  <div class="product-image-container relative">
                    <div
                      class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden"
                    >
                      <a href='product-details.html'>
                        <img
                          src="assets/images/vitamin-b12.png"
                          alt="product-1"
                          class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300"
                        />
                      </a>
                    </div>
                    <span
                      class="product-discount-badge absolute top-[11px] left-0 bg-error text-warning-lighter font-medium text-sm leading-[22px] px-1 after:absolute after:top-0 after:left-full after:z-10 after:w-1 after:h-full after:bg-[url('images/discount-shape.html')] after:bg-contain"
                      >15% OFF</span
                    >
                    <div
                      class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3"
                    >
                      <ul class="flex items-center gap-x-px">
                        <li>
                          <a aria-label='Add to Wishlist' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='wishlist-style-v1.html'>
                            <i
                              class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a aria-label='Compare' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='compare.html'>
                            <i
                              class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a
                            aria-label="Quick view"
                            class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                            href="#"
                          >
                            <i
                              class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="product-content">
                    <h5
                      class="text-base leading-6 font-semibold font-dm-sans mb-4"
                    >
                      <a href='product-details.html'>VitaLife Omega-3 Softgels Heart Support Max Strength</a
                      >
                    </h5>
                    <div class="rating-section flex items-center mb-4">
                      <div
                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]"
                      >
                        <div
                          style="width: 80%"
                          class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]"
                        ></div>
                      </div>
                      <span
                        class="text-sm leading-[22px] font-normal inline-block ml-1"
                        >(189)</span
                      >
                    </div>
                    <div class="price-section flex items-center gap-x-3 mb-2">
                      <span
                        class="current-price text-base font-semibold text-light-primary-text"
                        >$27.49</span
                      >
                      <span
                        class="old-price text-sm leading-[22px] font-normal text-light-disabled-text line-through"
                        >$39.99</span
                      >
                      <span
                        class="discount-percentage text-sm leading-[22px] font-semibold text-error"
                        >10% OFF</span
                      >
                    </div>
                    <div class="btn-section flex items-center gap-x-4">
                      <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300' href='wishlist-style-v1.html'>
                        <i
                          class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"
                        ></i>
                      </a>
                      <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1' href='cart-single-vendor.html'>
                        <i
                          class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"
                        ></i>

                        <span>Add to Cart</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ========== Single Product Card End ========== -->
              <!-- ========== Single Product Card Start ========== -->
              <div
                class="2xl:col-span-2 lg:col-span-4 md:col-span-6 col-span-12"
              >
                <div
                  class="border border-gray-300 rounded-2xl product-card-1 p-4 group"
                >
                  <div class="product-image-container relative">
                    <div
                      class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden"
                    >
                      <a href='product-details.html'>
                        <img
                          src="assets/images/ever-herb.png"
                          alt="product-1"
                          class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300"
                        />
                      </a>
                    </div>
                    <span
                      class="product-discount-badge absolute top-[11px] left-0 bg-error text-warning-lighter font-medium text-sm leading-[22px] px-1 after:absolute after:top-0 after:left-full after:z-10 after:w-1 after:h-full after:bg-[url('images/discount-shape.html')] after:bg-contain"
                      >15% OFF</span
                    >
                    <div
                      class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3"
                    >
                      <ul class="flex items-center gap-x-px">
                        <li>
                          <a aria-label='Add to Wishlist' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='wishlist-style-v1.html'>
                            <i
                              class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a aria-label='Compare' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='compare.html'>
                            <i
                              class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a
                            aria-label="Quick view"
                            class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                            href="#"
                          >
                            <i
                              class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="product-content">
                    <h5
                      class="text-base leading-6 font-semibold font-dm-sans mb-4"
                    >
                      <a href='product-details.html'>VitaLife Omega-3 Softgels Heart Support Max Strength</a
                      >
                    </h5>
                    <div class="rating-section flex items-center mb-4">
                      <div
                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]"
                      >
                        <div
                          style="width: 80%"
                          class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]"
                        ></div>
                      </div>
                      <span
                        class="text-sm leading-[22px] font-normal inline-block ml-1"
                        >(189)</span
                      >
                    </div>
                    <div class="price-section flex items-center gap-x-3 mb-2">
                      <span
                        class="current-price text-base font-semibold text-light-primary-text"
                        >$27.49</span
                      >
                      <span
                        class="old-price text-sm leading-[22px] font-normal text-light-disabled-text line-through"
                        >$39.99</span
                      >
                      <span
                        class="discount-percentage text-sm leading-[22px] font-semibold text-error"
                        >10% OFF</span
                      >
                    </div>
                    <div class="btn-section flex items-center gap-x-4">
                      <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300' href='wishlist-style-v1.html'>
                        <i
                          class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"
                        ></i>
                      </a>
                      <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1' href='cart-single-vendor.html'>
                        <i
                          class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"
                        ></i>

                        <span>Add to Cart</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ========== Single Product Card End ========== -->
              <!-- ========== Single Product Card Start ========== -->
              <div
                class="2xl:col-span-2 lg:col-span-4 md:col-span-6 col-span-12"
              >
                <div
                  class="border border-gray-300 rounded-2xl product-card-1 p-4 group"
                >
                  <div class="product-image-container relative">
                    <div
                      class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden"
                    >
                      <a href='product-details.html'>
                        <img
                          src="assets/images/hand-sanitizer-2.png"
                          alt="product-1"
                          class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300"
                        />
                      </a>
                    </div>
                    <span
                      class="product-discount-badge absolute top-[11px] left-0 bg-error text-warning-lighter font-medium text-sm leading-[22px] px-1 after:absolute after:top-0 after:left-full after:z-10 after:w-1 after:h-full after:bg-[url('images/discount-shape.html')] after:bg-contain"
                      >15% OFF</span
                    >
                    <div
                      class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3"
                    >
                      <ul class="flex items-center gap-x-px">
                        <li>
                          <a aria-label='Add to Wishlist' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='wishlist-style-v1.html'>
                            <i
                              class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a aria-label='Compare' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='compare.html'>
                            <i
                              class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a
                            aria-label="Quick view"
                            class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                            href="#"
                          >
                            <i
                              class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="product-content">
                    <h5
                      class="text-base leading-6 font-semibold font-dm-sans mb-4"
                    >
                      <a href='product-details.html'>VitaLife Omega-3 Softgels Heart Support Max Strength</a
                      >
                    </h5>
                    <div class="rating-section flex items-center mb-4">
                      <div
                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]"
                      >
                        <div
                          style="width: 80%"
                          class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]"
                        ></div>
                      </div>
                      <span
                        class="text-sm leading-[22px] font-normal inline-block ml-1"
                        >(189)</span
                      >
                    </div>
                    <div class="price-section flex items-center gap-x-3 mb-2">
                      <span
                        class="current-price text-base font-semibold text-light-primary-text"
                        >$27.49</span
                      >
                      <span
                        class="old-price text-sm leading-[22px] font-normal text-light-disabled-text line-through"
                        >$39.99</span
                      >
                      <span
                        class="discount-percentage text-sm leading-[22px] font-semibold text-error"
                        >10% OFF</span
                      >
                    </div>
                    <div class="btn-section flex items-center gap-x-4">
                      <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300' href='wishlist-style-v1.html'>
                        <i
                          class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"
                        ></i>
                      </a>
                      <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1' href='cart-single-vendor.html'>
                        <i
                          class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"
                        ></i>

                        <span>Add to Cart</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ========== Single Product Card End ========== -->
              <!-- ========== Single Product Card Start ========== -->
              <div
                class="2xl:col-span-2 lg:col-span-4 md:col-span-6 col-span-12"
              >
                <div
                  class="border border-gray-300 rounded-2xl product-card-1 p-4 group"
                >
                  <div class="product-image-container relative">
                    <div
                      class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden"
                    >
                      <a href='product-details.html'>
                        <img
                          src="assets/images/gillette.png"
                          alt="product-1"
                          class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300"
                        />
                      </a>
                    </div>
                    <span
                      class="product-discount-badge absolute top-[11px] left-0 bg-error text-warning-lighter font-medium text-sm leading-[22px] px-1 after:absolute after:top-0 after:left-full after:z-10 after:w-1 after:h-full after:bg-[url('images/discount-shape.html')] after:bg-contain"
                      >15% OFF</span
                    >
                    <div
                      class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3"
                    >
                      <ul class="flex items-center gap-x-px">
                        <li>
                          <a aria-label='Add to Wishlist' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='wishlist-style-v1.html'>
                            <i
                              class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a aria-label='Compare' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='compare.html'>
                            <i
                              class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a
                            aria-label="Quick view"
                            class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                            href="#"
                          >
                            <i
                              class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="product-content">
                    <h5
                      class="text-base leading-6 font-semibold font-dm-sans mb-4"
                    >
                      <a href='product-details.html'>VitaLife Omega-3 Softgels Heart Support Max Strength</a
                      >
                    </h5>
                    <div class="rating-section flex items-center mb-4">
                      <div
                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]"
                      >
                        <div
                          style="width: 80%"
                          class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]"
                        ></div>
                      </div>
                      <span
                        class="text-sm leading-[22px] font-normal inline-block ml-1"
                        >(189)</span
                      >
                    </div>
                    <div class="price-section flex items-center gap-x-3 mb-2">
                      <span
                        class="current-price text-base font-semibold text-light-primary-text"
                        >$27.49</span
                      >
                      <span
                        class="old-price text-sm leading-[22px] font-normal text-light-disabled-text line-through"
                        >$39.99</span
                      >
                      <span
                        class="discount-percentage text-sm leading-[22px] font-semibold text-error"
                        >10% OFF</span
                      >
                    </div>
                    <div class="btn-section flex items-center gap-x-4">
                      <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300' href='wishlist-style-v1.html'>
                        <i
                          class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"
                        ></i>
                      </a>
                      <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1' href='cart-single-vendor.html'>
                        <i
                          class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"
                        ></i>

                        <span>Add to Cart</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ========== Single Product Card End ========== -->
              <!-- ========== Single Product Card Start ========== -->
              <div
                class="2xl:col-span-2 lg:col-span-4 md:col-span-6 col-span-12"
              >
                <div
                  class="border border-gray-300 rounded-2xl product-card-1 p-4 group"
                >
                  <div class="product-image-container relative">
                    <div
                      class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden"
                    >
                      <a href='product-details.html'>
                        <img
                          src="assets/images/honitus.png"
                          alt="product-1"
                          class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300"
                        />
                      </a>
                    </div>
                    <span
                      class="product-discount-badge absolute top-[11px] left-0 bg-error text-warning-lighter font-medium text-sm leading-[22px] px-1 after:absolute after:top-0 after:left-full after:z-10 after:w-1 after:h-full after:bg-[url('images/discount-shape.html')] after:bg-contain"
                      >15% OFF</span
                    >
                    <div
                      class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3"
                    >
                      <ul class="flex items-center gap-x-px">
                        <li>
                          <a aria-label='Add to Wishlist' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='wishlist-style-v1.html'>
                            <i
                              class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a aria-label='Compare' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='compare.html'>
                            <i
                              class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a
                            aria-label="Quick view"
                            class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                            href="#"
                          >
                            <i
                              class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="product-content">
                    <h5
                      class="text-base leading-6 font-semibold font-dm-sans mb-4"
                    >
                      <a href='product-details.html'>VitaLife Omega-3 Softgels Heart Support Max Strength</a
                      >
                    </h5>
                    <div class="rating-section flex items-center mb-4">
                      <div
                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]"
                      >
                        <div
                          style="width: 80%"
                          class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]"
                        ></div>
                      </div>
                      <span
                        class="text-sm leading-[22px] font-normal inline-block ml-1"
                        >(189)</span
                      >
                    </div>
                    <div class="price-section flex items-center gap-x-3 mb-2">
                      <span
                        class="current-price text-base font-semibold text-light-primary-text"
                        >$27.49</span
                      >
                      <span
                        class="old-price text-sm leading-[22px] font-normal text-light-disabled-text line-through"
                        >$39.99</span
                      >
                      <span
                        class="discount-percentage text-sm leading-[22px] font-semibold text-error"
                        >10% OFF</span
                      >
                    </div>
                    <div class="btn-section flex items-center gap-x-4">
                      <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300' href='wishlist-style-v1.html'>
                        <i
                          class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"
                        ></i>
                      </a>
                      <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1' href='cart-single-vendor.html'>
                        <i
                          class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"
                        ></i>

                        <span>Add to Cart</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ========== Single Product Card End ========== -->
              <!-- ========== Single Product Card Start ========== -->
              <div
                class="2xl:col-span-2 lg:col-span-4 md:col-span-6 col-span-12"
              >
                <div
                  class="border border-gray-300 rounded-2xl product-card-1 p-4 group"
                >
                  <div class="product-image-container relative">
                    <div
                      class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden"
                    >
                      <a href='product-details.html'>
                        <img
                          src="assets/images/liveasy.png"
                          alt="product-1"
                          class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300"
                        />
                      </a>
                    </div>
                    <span
                      class="product-discount-badge absolute top-[11px] left-0 bg-error text-warning-lighter font-medium text-sm leading-[22px] px-1 after:absolute after:top-0 after:left-full after:z-10 after:w-1 after:h-full after:bg-[url('images/discount-shape.html')] after:bg-contain"
                      >15% OFF</span
                    >
                    <div
                      class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3"
                    >
                      <ul class="flex items-center gap-x-px">
                        <li>
                          <a aria-label='Add to Wishlist' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='wishlist-style-v1.html'>
                            <i
                              class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a aria-label='Compare' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='compare.html'>
                            <i
                              class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a
                            aria-label="Quick view"
                            class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                            href="#"
                          >
                            <i
                              class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="product-content">
                    <h5
                      class="text-base leading-6 font-semibold font-dm-sans mb-4"
                    >
                      <a href='product-details.html'>VitaLife Omega-3 Softgels Heart Support Max Strength</a
                      >
                    </h5>
                    <div class="rating-section flex items-center mb-4">
                      <div
                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]"
                      >
                        <div
                          style="width: 80%"
                          class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]"
                        ></div>
                      </div>
                      <span
                        class="text-sm leading-[22px] font-normal inline-block ml-1"
                        >(189)</span
                      >
                    </div>
                    <div class="price-section flex items-center gap-x-3 mb-2">
                      <span
                        class="current-price text-base font-semibold text-light-primary-text"
                        >$27.49</span
                      >
                      <span
                        class="old-price text-sm leading-[22px] font-normal text-light-disabled-text line-through"
                        >$39.99</span
                      >
                      <span
                        class="discount-percentage text-sm leading-[22px] font-semibold text-error"
                        >10% OFF</span
                      >
                    </div>
                    <div class="btn-section flex items-center gap-x-4">
                      <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300' href='wishlist-style-v1.html'>
                        <i
                          class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"
                        ></i>
                      </a>
                      <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1' href='cart-single-vendor.html'>
                        <i
                          class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"
                        ></i>

                        <span>Add to Cart</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ========== Single Product Card End ========== -->
              <!-- ========== Single Product Card Start ========== -->
              <div
                class="2xl:col-span-2 lg:col-span-4 md:col-span-6 col-span-12"
              >
                <div
                  class="border border-gray-300 rounded-2xl product-card-1 p-4 group"
                >
                  <div class="product-image-container relative">
                    <div
                      class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden"
                    >
                      <a href='product-details.html'>
                        <img
                          src="assets/images/aooca.png"
                          alt="product-1"
                          class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300"
                        />
                      </a>
                    </div>
                    <span
                      class="product-discount-badge absolute top-[11px] left-0 bg-error text-warning-lighter font-medium text-sm leading-[22px] px-1 after:absolute after:top-0 after:left-full after:z-10 after:w-1 after:h-full after:bg-[url('images/discount-shape.html')] after:bg-contain"
                      >15% OFF</span
                    >
                    <div
                      class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3"
                    >
                      <ul class="flex items-center gap-x-px">
                        <li>
                          <a aria-label='Add to Wishlist' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='wishlist-style-v1.html'>
                            <i
                              class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a aria-label='Compare' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='compare.html'>
                            <i
                              class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a
                            aria-label="Quick view"
                            class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                            href="#"
                          >
                            <i
                              class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="product-content">
                    <h5
                      class="text-base leading-6 font-semibold font-dm-sans mb-4"
                    >
                      <a href='product-details.html'>VitaLife Omega-3 Softgels Heart Support Max Strength</a
                      >
                    </h5>
                    <div class="rating-section flex items-center mb-4">
                      <div
                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]"
                      >
                        <div
                          style="width: 80%"
                          class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]"
                        ></div>
                      </div>
                      <span
                        class="text-sm leading-[22px] font-normal inline-block ml-1"
                        >(189)</span
                      >
                    </div>
                    <div class="price-section flex items-center gap-x-3 mb-2">
                      <span
                        class="current-price text-base font-semibold text-light-primary-text"
                        >$27.49</span
                      >
                      <span
                        class="old-price text-sm leading-[22px] font-normal text-light-disabled-text line-through"
                        >$39.99</span
                      >
                      <span
                        class="discount-percentage text-sm leading-[22px] font-semibold text-error"
                        >10% OFF</span
                      >
                    </div>
                    <div class="btn-section flex items-center gap-x-4">
                      <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300' href='wishlist-style-v1.html'>
                        <i
                          class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"
                        ></i>
                      </a>
                      <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1' href='cart-single-vendor.html'>
                        <i
                          class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"
                        ></i>

                        <span>Add to Cart</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ========== Single Product Card End ========== -->
              <!-- ========== Single Product Card Start ========== -->
              <div
                class="2xl:col-span-2 lg:col-span-4 md:col-span-6 col-span-12"
              >
                <div
                  class="border border-gray-300 rounded-2xl product-card-1 p-4 group"
                >
                  <div class="product-image-container relative">
                    <div
                      class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden"
                    >
                      <a href='product-details.html'>
                        <img
                          src="assets/images/aacka.png"
                          alt="product-1"
                          class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300"
                        />
                      </a>
                    </div>
                    <span
                      class="product-discount-badge absolute top-[11px] left-0 bg-error text-warning-lighter font-medium text-sm leading-[22px] px-1 after:absolute after:top-0 after:left-full after:z-10 after:w-1 after:h-full after:bg-[url('images/discount-shape.html')] after:bg-contain"
                      >15% OFF</span
                    >
                    <div
                      class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3"
                    >
                      <ul class="flex items-center gap-x-px">
                        <li>
                          <a aria-label='Add to Wishlist' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='wishlist-style-v1.html'>
                            <i
                              class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a aria-label='Compare' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='compare.html'>
                            <i
                              class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a
                            aria-label="Quick view"
                            class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                            href="#"
                          >
                            <i
                              class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="product-content">
                    <h5
                      class="text-base leading-6 font-semibold font-dm-sans mb-4"
                    >
                      <a href='product-details.html'>VitaLife Omega-3 Softgels Heart Support Max Strength</a
                      >
                    </h5>
                    <div class="rating-section flex items-center mb-4">
                      <div
                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]"
                      >
                        <div
                          style="width: 80%"
                          class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]"
                        ></div>
                      </div>
                      <span
                        class="text-sm leading-[22px] font-normal inline-block ml-1"
                        >(189)</span
                      >
                    </div>
                    <div class="price-section flex items-center gap-x-3 mb-2">
                      <span
                        class="current-price text-base font-semibold text-light-primary-text"
                        >$27.49</span
                      >
                      <span
                        class="old-price text-sm leading-[22px] font-normal text-light-disabled-text line-through"
                        >$39.99</span
                      >
                      <span
                        class="discount-percentage text-sm leading-[22px] font-semibold text-error"
                        >10% OFF</span
                      >
                    </div>
                    <div class="btn-section flex items-center gap-x-4">
                      <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300' href='wishlist-style-v1.html'>
                        <i
                          class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"
                        ></i>
                      </a>
                      <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1' href='cart-single-vendor.html'>
                        <i
                          class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"
                        ></i>

                        <span>Add to Cart</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ========== Single Product Card End ========== -->
            </div>
          </div>
          <!-- ========== Herbal Tab End ========== -->

          <!-- ========== Health Care Tab Start ========== -->
          <div class="tab-pane" id="heath-care">
            <div class="grid grid-cols-12 gap-6">
              <div
                class="2xl:col-span-2 lg:col-span-4 md:col-span-6 col-span-12"
              >
                <div
                  class="border border-gray-300 rounded-2xl product-card-1 p-4 group"
                >
                  <div class="product-image-container relative">
                    <div
                      class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden"
                    >
                      <a href='product-details.html'>
                        <img
                          src="assets/images/hand-sanitizer-2.png"
                          alt="product-1"
                          class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300"
                        />
                      </a>
                    </div>
                    <span
                      class="product-discount-badge absolute top-[11px] left-0 bg-error text-warning-lighter font-medium text-sm leading-[22px] px-1 after:absolute after:top-0 after:left-full after:z-10 after:w-1 after:h-full after:bg-[url('images/discount-shape.html')] after:bg-contain"
                      >15% OFF</span
                    >
                    <div
                      class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3"
                    >
                      <ul class="flex items-center gap-x-px">
                        <li>
                          <a aria-label='Add to Wishlist' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='wishlist-style-v1.html'>
                            <i
                              class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a aria-label='Compare' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='compare.html'>
                            <i
                              class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a
                            aria-label="Quick view"
                            class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                            href="#"
                          >
                            <i
                              class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="product-content">
                    <h5
                      class="text-base leading-6 font-semibold font-dm-sans mb-4"
                    >
                      <a href='product-details.html'>VitaLife Omega-3 Softgels Heart Support Max Strength</a
                      >
                    </h5>
                    <div class="rating-section flex items-center mb-4">
                      <div
                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]"
                      >
                        <div
                          style="width: 80%"
                          class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]"
                        ></div>
                      </div>
                      <span
                        class="text-sm leading-[22px] font-normal inline-block ml-1"
                        >(189)</span
                      >
                    </div>
                    <div class="price-section flex items-center gap-x-3 mb-2">
                      <span
                        class="current-price text-base font-semibold text-light-primary-text"
                        >$27.49</span
                      >
                      <span
                        class="old-price text-sm leading-[22px] font-normal text-light-disabled-text line-through"
                        >$39.99</span
                      >
                      <span
                        class="discount-percentage text-sm leading-[22px] font-semibold text-error"
                        >10% OFF</span
                      >
                    </div>
                    <div class="btn-section flex items-center gap-x-4">
                      <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300' href='wishlist-style-v1.html'>
                        <i
                          class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"
                        ></i>
                      </a>
                      <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1' href='cart-single-vendor.html'>
                        <i
                          class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"
                        ></i>

                        <span>Add to Cart</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ========== Single Product Card End ========== -->
              <!-- ========== Single Product Card Start ========== -->
              <div
                class="2xl:col-span-2 lg:col-span-4 md:col-span-6 col-span-12"
              >
                <div
                  class="border border-gray-300 rounded-2xl product-card-1 p-4 group"
                >
                  <div class="product-image-container relative">
                    <div
                      class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden"
                    >
                      <a href='product-details.html'>
                        <img
                          src="assets/images/gillette.png"
                          alt="product-1"
                          class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300"
                        />
                      </a>
                    </div>
                    <span
                      class="product-discount-badge absolute top-[11px] left-0 bg-error text-warning-lighter font-medium text-sm leading-[22px] px-1 after:absolute after:top-0 after:left-full after:z-10 after:w-1 after:h-full after:bg-[url('images/discount-shape.html')] after:bg-contain"
                      >15% OFF</span
                    >
                    <div
                      class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3"
                    >
                      <ul class="flex items-center gap-x-px">
                        <li>
                          <a aria-label='Add to Wishlist' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='wishlist-style-v1.html'>
                            <i
                              class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a aria-label='Compare' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='compare.html'>
                            <i
                              class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a
                            aria-label="Quick view"
                            class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                            href="#"
                          >
                            <i
                              class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="product-content">
                    <h5
                      class="text-base leading-6 font-semibold font-dm-sans mb-4"
                    >
                      <a href='product-details.html'>VitaLife Omega-3 Softgels Heart Support Max Strength</a
                      >
                    </h5>
                    <div class="rating-section flex items-center mb-4">
                      <div
                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]"
                      >
                        <div
                          style="width: 80%"
                          class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]"
                        ></div>
                      </div>
                      <span
                        class="text-sm leading-[22px] font-normal inline-block ml-1"
                        >(189)</span
                      >
                    </div>
                    <div class="price-section flex items-center gap-x-3 mb-2">
                      <span
                        class="current-price text-base font-semibold text-light-primary-text"
                        >$27.49</span
                      >
                      <span
                        class="old-price text-sm leading-[22px] font-normal text-light-disabled-text line-through"
                        >$39.99</span
                      >
                      <span
                        class="discount-percentage text-sm leading-[22px] font-semibold text-error"
                        >10% OFF</span
                      >
                    </div>
                    <div class="btn-section flex items-center gap-x-4">
                      <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300' href='wishlist-style-v1.html'>
                        <i
                          class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"
                        ></i>
                      </a>
                      <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1' href='cart-single-vendor.html'>
                        <i
                          class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"
                        ></i>

                        <span>Add to Cart</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ========== Single Product Card End ========== -->
              <!-- ========== Single Product Card Start ========== -->
              <div
                class="2xl:col-span-2 lg:col-span-4 md:col-span-6 col-span-12"
              >
                <div
                  class="border border-gray-300 rounded-2xl product-card-1 p-4 group"
                >
                  <div class="product-image-container relative">
                    <div
                      class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden"
                    >
                      <a href='product-details.html'>
                        <img
                          src="assets/images/honitus.png"
                          alt="product-1"
                          class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300"
                        />
                      </a>
                    </div>
                    <span
                      class="product-discount-badge absolute top-[11px] left-0 bg-error text-warning-lighter font-medium text-sm leading-[22px] px-1 after:absolute after:top-0 after:left-full after:z-10 after:w-1 after:h-full after:bg-[url('images/discount-shape.html')] after:bg-contain"
                      >15% OFF</span
                    >
                    <div
                      class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3"
                    >
                      <ul class="flex items-center gap-x-px">
                        <li>
                          <a aria-label='Add to Wishlist' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='wishlist-style-v1.html'>
                            <i
                              class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a aria-label='Compare' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='compare.html'>
                            <i
                              class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a
                            aria-label="Quick view"
                            class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                            href="#"
                          >
                            <i
                              class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="product-content">
                    <h5
                      class="text-base leading-6 font-semibold font-dm-sans mb-4"
                    >
                      <a href='product-details.html'>VitaLife Omega-3 Softgels Heart Support Max Strength</a
                      >
                    </h5>
                    <div class="rating-section flex items-center mb-4">
                      <div
                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]"
                      >
                        <div
                          style="width: 80%"
                          class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]"
                        ></div>
                      </div>
                      <span
                        class="text-sm leading-[22px] font-normal inline-block ml-1"
                        >(189)</span
                      >
                    </div>
                    <div class="price-section flex items-center gap-x-3 mb-2">
                      <span
                        class="current-price text-base font-semibold text-light-primary-text"
                        >$27.49</span
                      >
                      <span
                        class="old-price text-sm leading-[22px] font-normal text-light-disabled-text line-through"
                        >$39.99</span
                      >
                      <span
                        class="discount-percentage text-sm leading-[22px] font-semibold text-error"
                        >10% OFF</span
                      >
                    </div>
                    <div class="btn-section flex items-center gap-x-4">
                      <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300' href='wishlist-style-v1.html'>
                        <i
                          class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"
                        ></i>
                      </a>
                      <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1' href='cart-single-vendor.html'>
                        <i
                          class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"
                        ></i>

                        <span>Add to Cart</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ========== Single Product Card End ========== -->
              <!-- ========== Single Product Card Start ========== -->
              <div
                class="2xl:col-span-2 lg:col-span-4 md:col-span-6 col-span-12"
              >
                <div
                  class="border border-gray-300 rounded-2xl product-card-1 p-4 group"
                >
                  <div class="product-image-container relative">
                    <div
                      class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden"
                    >
                      <a href='product-details.html'>
                        <img
                          src="assets/images/liveasy.png"
                          alt="product-1"
                          class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300"
                        />
                      </a>
                    </div>
                    <span
                      class="product-discount-badge absolute top-[11px] left-0 bg-error text-warning-lighter font-medium text-sm leading-[22px] px-1 after:absolute after:top-0 after:left-full after:z-10 after:w-1 after:h-full after:bg-[url('images/discount-shape.html')] after:bg-contain"
                      >15% OFF</span
                    >
                    <div
                      class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3"
                    >
                      <ul class="flex items-center gap-x-px">
                        <li>
                          <a aria-label='Add to Wishlist' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='wishlist-style-v1.html'>
                            <i
                              class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a aria-label='Compare' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='compare.html'>
                            <i
                              class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a
                            aria-label="Quick view"
                            class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                            href="#"
                          >
                            <i
                              class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="product-content">
                    <h5
                      class="text-base leading-6 font-semibold font-dm-sans mb-4"
                    >
                      <a href='product-details.html'>VitaLife Omega-3 Softgels Heart Support Max Strength</a
                      >
                    </h5>
                    <div class="rating-section flex items-center mb-4">
                      <div
                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]"
                      >
                        <div
                          style="width: 80%"
                          class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]"
                        ></div>
                      </div>
                      <span
                        class="text-sm leading-[22px] font-normal inline-block ml-1"
                        >(189)</span
                      >
                    </div>
                    <div class="price-section flex items-center gap-x-3 mb-2">
                      <span
                        class="current-price text-base font-semibold text-light-primary-text"
                        >$27.49</span
                      >
                      <span
                        class="old-price text-sm leading-[22px] font-normal text-light-disabled-text line-through"
                        >$39.99</span
                      >
                      <span
                        class="discount-percentage text-sm leading-[22px] font-semibold text-error"
                        >10% OFF</span
                      >
                    </div>
                    <div class="btn-section flex items-center gap-x-4">
                      <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300' href='wishlist-style-v1.html'>
                        <i
                          class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"
                        ></i>
                      </a>
                      <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1' href='cart-single-vendor.html'>
                        <i
                          class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"
                        ></i>

                        <span>Add to Cart</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ========== Single Product Card End ========== -->
              <!-- ========== Single Product Card Start ========== -->
              <div
                class="2xl:col-span-2 lg:col-span-4 md:col-span-6 col-span-12"
              >
                <div
                  class="border border-gray-300 rounded-2xl product-card-1 p-4 group"
                >
                  <div class="product-image-container relative">
                    <div
                      class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden"
                    >
                      <a href='product-details.html'>
                        <img
                          src="assets/images/aooca.png"
                          alt="product-1"
                          class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300"
                        />
                      </a>
                    </div>
                    <span
                      class="product-discount-badge absolute top-[11px] left-0 bg-error text-warning-lighter font-medium text-sm leading-[22px] px-1 after:absolute after:top-0 after:left-full after:z-10 after:w-1 after:h-full after:bg-[url('images/discount-shape.html')] after:bg-contain"
                      >15% OFF</span
                    >
                    <div
                      class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3"
                    >
                      <ul class="flex items-center gap-x-px">
                        <li>
                          <a aria-label='Add to Wishlist' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='wishlist-style-v1.html'>
                            <i
                              class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a aria-label='Compare' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='compare.html'>
                            <i
                              class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a
                            aria-label="Quick view"
                            class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                            href="#"
                          >
                            <i
                              class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="product-content">
                    <h5
                      class="text-base leading-6 font-semibold font-dm-sans mb-4"
                    >
                      <a href='product-details.html'>VitaLife Omega-3 Softgels Heart Support Max Strength</a
                      >
                    </h5>
                    <div class="rating-section flex items-center mb-4">
                      <div
                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]"
                      >
                        <div
                          style="width: 80%"
                          class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]"
                        ></div>
                      </div>
                      <span
                        class="text-sm leading-[22px] font-normal inline-block ml-1"
                        >(189)</span
                      >
                    </div>
                    <div class="price-section flex items-center gap-x-3 mb-2">
                      <span
                        class="current-price text-base font-semibold text-light-primary-text"
                        >$27.49</span
                      >
                      <span
                        class="old-price text-sm leading-[22px] font-normal text-light-disabled-text line-through"
                        >$39.99</span
                      >
                      <span
                        class="discount-percentage text-sm leading-[22px] font-semibold text-error"
                        >10% OFF</span
                      >
                    </div>
                    <div class="btn-section flex items-center gap-x-4">
                      <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300' href='wishlist-style-v1.html'>
                        <i
                          class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"
                        ></i>
                      </a>
                      <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1' href='cart-single-vendor.html'>
                        <i
                          class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"
                        ></i>

                        <span>Add to Cart</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ========== Single Product Card End ========== -->
              <!-- ========== Single Product Card Start ========== -->
              <div
                class="2xl:col-span-2 lg:col-span-4 md:col-span-6 col-span-12"
              >
                <div
                  class="border border-gray-300 rounded-2xl product-card-1 p-4 group"
                >
                  <div class="product-image-container relative">
                    <div
                      class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden"
                    >
                      <a href='product-details.html'>
                        <img
                          src="assets/images/aacka.png"
                          alt="product-1"
                          class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300"
                        />
                      </a>
                    </div>
                    <span
                      class="product-discount-badge absolute top-[11px] left-0 bg-error text-warning-lighter font-medium text-sm leading-[22px] px-1 after:absolute after:top-0 after:left-full after:z-10 after:w-1 after:h-full after:bg-[url('images/discount-shape.html')] after:bg-contain"
                      >15% OFF</span
                    >
                    <div
                      class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3"
                    >
                      <ul class="flex items-center gap-x-px">
                        <li>
                          <a aria-label='Add to Wishlist' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='wishlist-style-v1.html'>
                            <i
                              class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a aria-label='Compare' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='compare.html'>
                            <i
                              class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a
                            aria-label="Quick view"
                            class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                            href="#"
                          >
                            <i
                              class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="product-content">
                    <h5
                      class="text-base leading-6 font-semibold font-dm-sans mb-4"
                    >
                      <a href='product-details.html'>VitaLife Omega-3 Softgels Heart Support Max Strength</a
                      >
                    </h5>
                    <div class="rating-section flex items-center mb-4">
                      <div
                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]"
                      >
                        <div
                          style="width: 80%"
                          class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]"
                        ></div>
                      </div>
                      <span
                        class="text-sm leading-[22px] font-normal inline-block ml-1"
                        >(189)</span
                      >
                    </div>
                    <div class="price-section flex items-center gap-x-3 mb-2">
                      <span
                        class="current-price text-base font-semibold text-light-primary-text"
                        >$27.49</span
                      >
                      <span
                        class="old-price text-sm leading-[22px] font-normal text-light-disabled-text line-through"
                        >$39.99</span
                      >
                      <span
                        class="discount-percentage text-sm leading-[22px] font-semibold text-error"
                        >10% OFF</span
                      >
                    </div>
                    <div class="btn-section flex items-center gap-x-4">
                      <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300' href='wishlist-style-v1.html'>
                        <i
                          class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"
                        ></i>
                      </a>
                      <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1' href='cart-single-vendor.html'>
                        <i
                          class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"
                        ></i>

                        <span>Add to Cart</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ========== Single Product Card End ========== -->
              <!-- ========== Single Product Card Start ========== -->
              <div
                class="2xl:col-span-2 lg:col-span-4 md:col-span-6 col-span-12"
              >
                <div
                  class="border border-gray-300 rounded-2xl product-card-1 p-4 group"
                >
                  <div class="product-image-container relative">
                    <div
                      class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden"
                    >
                      <a href='product-details.html'>
                        <img
                          src="assets/images/softovac.png"
                          alt="product-1"
                          class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300"
                        />
                      </a>
                    </div>
                    <span
                      class="product-discount-badge absolute top-[11px] left-0 bg-error text-warning-lighter font-medium text-sm leading-[22px] px-1 after:absolute after:top-0 after:left-full after:z-10 after:w-1 after:h-full after:bg-[url('images/discount-shape.html')] after:bg-contain"
                      >15% OFF</span
                    >
                    <div
                      class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3"
                    >
                      <ul class="flex items-center gap-x-px">
                        <li>
                          <a aria-label='Add to Wishlist' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='wishlist-style-v1.html'>
                            <i
                              class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a aria-label='Compare' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='compare.html'>
                            <i
                              class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a
                            aria-label="Quick view"
                            class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                            href="#"
                          >
                            <i
                              class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="product-content">
                    <h5
                      class="text-base leading-6 font-semibold font-dm-sans mb-4"
                    >
                      <a href='product-details.html'>VitaLife Omega-3 Softgels Heart Support Max Strength</a
                      >
                    </h5>
                    <div class="rating-section flex items-center mb-4">
                      <div
                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]"
                      >
                        <div
                          style="width: 80%"
                          class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]"
                        ></div>
                      </div>
                      <span
                        class="text-sm leading-[22px] font-normal inline-block ml-1"
                        >(189)</span
                      >
                    </div>
                    <div class="price-section flex items-center gap-x-3 mb-2">
                      <span
                        class="current-price text-base font-semibold text-light-primary-text"
                        >$27.49</span
                      >
                      <span
                        class="old-price text-sm leading-[22px] font-normal text-light-disabled-text line-through"
                        >$39.99</span
                      >
                      <span
                        class="discount-percentage text-sm leading-[22px] font-semibold text-error"
                        >10% OFF</span
                      >
                    </div>
                    <div class="btn-section flex items-center gap-x-4">
                      <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300' href='wishlist-style-v1.html'>
                        <i
                          class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"
                        ></i>
                      </a>
                      <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1' href='cart-single-vendor.html'>
                        <i
                          class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"
                        ></i>

                        <span>Add to Cart</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ========== Single Product Card End ========== -->
              <!-- ========== Single Product Card Start ========== -->
              <div
                class="2xl:col-span-2 lg:col-span-4 md:col-span-6 col-span-12"
              >
                <div
                  class="border border-gray-300 rounded-2xl product-card-1 p-4 group"
                >
                  <div class="product-image-container relative">
                    <div
                      class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden"
                    >
                      <a href='product-details.html'>
                        <img
                          src="assets/images/vitamin-c.png"
                          alt="product-1"
                          class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300"
                        />
                      </a>
                    </div>
                    <span
                      class="product-discount-badge absolute top-[11px] left-0 bg-error text-warning-lighter font-medium text-sm leading-[22px] px-1 after:absolute after:top-0 after:left-full after:z-10 after:w-1 after:h-full after:bg-[url('images/discount-shape.html')] after:bg-contain"
                      >15% OFF</span
                    >
                    <div
                      class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3"
                    >
                      <ul class="flex items-center gap-x-px">
                        <li>
                          <a aria-label='Add to Wishlist' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='wishlist-style-v1.html'>
                            <i
                              class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a aria-label='Compare' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='compare.html'>
                            <i
                              class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a
                            aria-label="Quick view"
                            class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                            href="#"
                          >
                            <i
                              class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="product-content">
                    <h5
                      class="text-base leading-6 font-semibold font-dm-sans mb-4"
                    >
                      <a href='product-details.html'>VitaLife Omega-3 Softgels Heart Support Max Strength</a
                      >
                    </h5>
                    <div class="rating-section flex items-center mb-4">
                      <div
                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]"
                      >
                        <div
                          style="width: 80%"
                          class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]"
                        ></div>
                      </div>
                      <span
                        class="text-sm leading-[22px] font-normal inline-block ml-1"
                        >(189)</span
                      >
                    </div>
                    <div class="price-section flex items-center gap-x-3 mb-2">
                      <span
                        class="current-price text-base font-semibold text-light-primary-text"
                        >$27.49</span
                      >
                      <span
                        class="old-price text-sm leading-[22px] font-normal text-light-disabled-text line-through"
                        >$39.99</span
                      >
                      <span
                        class="discount-percentage text-sm leading-[22px] font-semibold text-error"
                        >10% OFF</span
                      >
                    </div>
                    <div class="btn-section flex items-center gap-x-4">
                      <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300' href='wishlist-style-v1.html'>
                        <i
                          class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"
                        ></i>
                      </a>
                      <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1' href='cart-single-vendor.html'>
                        <i
                          class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"
                        ></i>

                        <span>Add to Cart</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ========== Single Product Card End ========== -->
              <!-- ========== Single Product Card Start ========== -->
              <div
                class="2xl:col-span-2 lg:col-span-4 md:col-span-6 col-span-12"
              >
                <div
                  class="border border-gray-300 rounded-2xl product-card-1 p-4 group"
                >
                  <div class="product-image-container relative">
                    <div
                      class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden"
                    >
                      <a href='product-details.html'>
                        <img
                          src="assets/images/temperature-gun-3.png"
                          alt="product-1"
                          class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300"
                        />
                      </a>
                    </div>
                    <span
                      class="product-discount-badge absolute top-[11px] left-0 bg-error text-warning-lighter font-medium text-sm leading-[22px] px-1 after:absolute after:top-0 after:left-full after:z-10 after:w-1 after:h-full after:bg-[url('images/discount-shape.html')] after:bg-contain"
                      >15% OFF</span
                    >
                    <div
                      class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3"
                    >
                      <ul class="flex items-center gap-x-px">
                        <li>
                          <a aria-label='Add to Wishlist' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='wishlist-style-v1.html'>
                            <i
                              class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a aria-label='Compare' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='compare.html'>
                            <i
                              class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a
                            aria-label="Quick view"
                            class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                            href="#"
                          >
                            <i
                              class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="product-content">
                    <h5
                      class="text-base leading-6 font-semibold font-dm-sans mb-4"
                    >
                      <a href='product-details.html'>VitaLife Omega-3 Softgels Heart Support Max Strength</a
                      >
                    </h5>
                    <div class="rating-section flex items-center mb-4">
                      <div
                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]"
                      >
                        <div
                          style="width: 80%"
                          class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]"
                        ></div>
                      </div>
                      <span
                        class="text-sm leading-[22px] font-normal inline-block ml-1"
                        >(189)</span
                      >
                    </div>
                    <div class="price-section flex items-center gap-x-3 mb-2">
                      <span
                        class="current-price text-base font-semibold text-light-primary-text"
                        >$27.49</span
                      >
                      <span
                        class="old-price text-sm leading-[22px] font-normal text-light-disabled-text line-through"
                        >$39.99</span
                      >
                      <span
                        class="discount-percentage text-sm leading-[22px] font-semibold text-error"
                        >10% OFF</span
                      >
                    </div>
                    <div class="btn-section flex items-center gap-x-4">
                      <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300' href='wishlist-style-v1.html'>
                        <i
                          class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"
                        ></i>
                      </a>
                      <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1' href='cart-single-vendor.html'>
                        <i
                          class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"
                        ></i>

                        <span>Add to Cart</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ========== Single Product Card End ========== -->
              <!-- ========== Single Product Card Start ========== -->
              <div
                class="2xl:col-span-2 lg:col-span-4 md:col-span-6 col-span-12"
              >
                <div
                  class="border border-gray-300 rounded-2xl product-card-1 p-4 group"
                >
                  <div class="product-image-container relative">
                    <div
                      class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden"
                    >
                      <a href='product-details.html'>
                        <img
                          src="assets/images/hand-sanitizer-1.png"
                          alt="product-1"
                          class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300"
                        />
                      </a>
                    </div>
                    <span
                      class="product-discount-badge absolute top-[11px] left-0 bg-error text-warning-lighter font-medium text-sm leading-[22px] px-1 after:absolute after:top-0 after:left-full after:z-10 after:w-1 after:h-full after:bg-[url('images/discount-shape.html')] after:bg-contain"
                      >15% OFF</span
                    >
                    <div
                      class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3"
                    >
                      <ul class="flex items-center gap-x-px">
                        <li>
                          <a aria-label='Add to Wishlist' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='wishlist-style-v1.html'>
                            <i
                              class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a aria-label='Compare' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='compare.html'>
                            <i
                              class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a
                            aria-label="Quick view"
                            class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                            href="#"
                          >
                            <i
                              class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="product-content">
                    <h5
                      class="text-base leading-6 font-semibold font-dm-sans mb-4"
                    >
                      <a href='product-details.html'>VitaLife Omega-3 Softgels Heart Support Max Strength</a
                      >
                    </h5>
                    <div class="rating-section flex items-center mb-4">
                      <div
                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]"
                      >
                        <div
                          style="width: 80%"
                          class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]"
                        ></div>
                      </div>
                      <span
                        class="text-sm leading-[22px] font-normal inline-block ml-1"
                        >(189)</span
                      >
                    </div>
                    <div class="price-section flex items-center gap-x-3 mb-2">
                      <span
                        class="current-price text-base font-semibold text-light-primary-text"
                        >$27.49</span
                      >
                      <span
                        class="old-price text-sm leading-[22px] font-normal text-light-disabled-text line-through"
                        >$39.99</span
                      >
                      <span
                        class="discount-percentage text-sm leading-[22px] font-semibold text-error"
                        >10% OFF</span
                      >
                    </div>
                    <div class="btn-section flex items-center gap-x-4">
                      <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300' href='wishlist-style-v1.html'>
                        <i
                          class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"
                        ></i>
                      </a>
                      <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1' href='cart-single-vendor.html'>
                        <i
                          class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"
                        ></i>

                        <span>Add to Cart</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ========== Single Product Card End ========== -->
              <!-- ========== Single Product Card Start ========== -->
              <div
                class="2xl:col-span-2 lg:col-span-4 md:col-span-6 col-span-12"
              >
                <div
                  class="border border-gray-300 rounded-2xl product-card-1 p-4 group"
                >
                  <div class="product-image-container relative">
                    <div
                      class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden"
                    >
                      <a href='product-details.html'>
                        <img
                          src="assets/images/vitamin-b12.png"
                          alt="product-1"
                          class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300"
                        />
                      </a>
                    </div>
                    <span
                      class="product-discount-badge absolute top-[11px] left-0 bg-error text-warning-lighter font-medium text-sm leading-[22px] px-1 after:absolute after:top-0 after:left-full after:z-10 after:w-1 after:h-full after:bg-[url('images/discount-shape.html')] after:bg-contain"
                      >15% OFF</span
                    >
                    <div
                      class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3"
                    >
                      <ul class="flex items-center gap-x-px">
                        <li>
                          <a aria-label='Add to Wishlist' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='wishlist-style-v1.html'>
                            <i
                              class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a aria-label='Compare' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='compare.html'>
                            <i
                              class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a
                            aria-label="Quick view"
                            class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                            href="#"
                          >
                            <i
                              class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="product-content">
                    <h5
                      class="text-base leading-6 font-semibold font-dm-sans mb-4"
                    >
                      <a href='product-details.html'>VitaLife Omega-3 Softgels Heart Support Max Strength</a
                      >
                    </h5>
                    <div class="rating-section flex items-center mb-4">
                      <div
                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]"
                      >
                        <div
                          style="width: 80%"
                          class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]"
                        ></div>
                      </div>
                      <span
                        class="text-sm leading-[22px] font-normal inline-block ml-1"
                        >(189)</span
                      >
                    </div>
                    <div class="price-section flex items-center gap-x-3 mb-2">
                      <span
                        class="current-price text-base font-semibold text-light-primary-text"
                        >$27.49</span
                      >
                      <span
                        class="old-price text-sm leading-[22px] font-normal text-light-disabled-text line-through"
                        >$39.99</span
                      >
                      <span
                        class="discount-percentage text-sm leading-[22px] font-semibold text-error"
                        >10% OFF</span
                      >
                    </div>
                    <div class="btn-section flex items-center gap-x-4">
                      <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300' href='wishlist-style-v1.html'>
                        <i
                          class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"
                        ></i>
                      </a>
                      <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1' href='cart-single-vendor.html'>
                        <i
                          class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"
                        ></i>

                        <span>Add to Cart</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ========== Single Product Card End ========== -->
              <!-- ========== Single Product Card Start ========== -->
              <div
                class="2xl:col-span-2 lg:col-span-4 md:col-span-6 col-span-12"
              >
                <div
                  class="border border-gray-300 rounded-2xl product-card-1 p-4 group"
                >
                  <div class="product-image-container relative">
                    <div
                      class="product-image rounded-xl bg-[#F4F3F5] mb-4 overflow-hidden"
                    >
                      <a href='product-details.html'>
                        <img
                          src="assets/images/ever-herb.png"
                          alt="product-1"
                          class="group-hover:scale-110 transition-all transform group-hover:-rotate-3 ease-in-out duration-300"
                        />
                      </a>
                    </div>
                    <span
                      class="product-discount-badge absolute top-[11px] left-0 bg-error text-warning-lighter font-medium text-sm leading-[22px] px-1 after:absolute after:top-0 after:left-full after:z-10 after:w-1 after:h-full after:bg-[url('images/discount-shape.html')] after:bg-contain"
                      >15% OFF</span
                    >
                    <div
                      class="product-btn-actions absolute bottom-0 right-0 left-0 flex justify-center z-9 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100 group-hover:bottom-3"
                    >
                      <ul class="flex items-center gap-x-px">
                        <li>
                          <a aria-label='Add to Wishlist' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tl-sm rounded-bl-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='wishlist-style-v1.html'>
                            <i
                              class="hgi hgi-stroke hgi-favourite text-2xl leading-6 text-light-secondary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a aria-label='Compare' class='product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5' href='compare.html'>
                            <i
                              class="hgi hgi-stroke hgi-reload text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                        <li>
                          <a
                            aria-label="Quick view"
                            class="quick-view-sidebar-btn product-btn-action-item relative size-11 bg-white inline-flex items-center justify-center rounded-tr-sm rounded-br-sm before:absolute before:left-[calc(50%-8px)] before:bottom-full before:z-9 before:border-8 before:border-transparent before:border-t-black before:opacity-0 before:invisible before:-mb-3.5 hover:before:opacity-100 hover:before:visible before:transition-all before:duration-300 after:absolute after:bottom-full after:left-1/2 after:-translate-x-1/2 after:rounded-sm after:bg-gray-800 after:whitespace-nowrap after:text-white after:text-xs after:leading-[18px] after:py-[3px] after:px-2 after:content-[attr(aria-label)] after:opacity-0 after:invisible after:transition-all after:duration-300 hover:after:opacity-100 hover:after:visible hover:after:-translate-y-2.5 hover:before:-translate-y-2.5"
                            href="#"
                          >
                            <i
                              class="hgi hgi-stroke hgi-view text-2xl leading-6 text-light-primary-text"
                            ></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="product-content">
                    <h5
                      class="text-base leading-6 font-semibold font-dm-sans mb-4"
                    >
                      <a href='product-details.html'>VitaLife Omega-3 Softgels Heart Support Max Strength</a
                      >
                    </h5>
                    <div class="rating-section flex items-center mb-4">
                      <div
                        class="bg-[url('../images/star-icon.png')] w-[90px] h-4.5 bg-repeat-x overflow-hidden bg-position-[0_0]"
                      >
                        <div
                          style="width: 80%"
                          class="bg-[url('../images/star-icon.png')] h-4.5 bg-repeat-x bg-position-[0_-18px]"
                        ></div>
                      </div>
                      <span
                        class="text-sm leading-[22px] font-normal inline-block ml-1"
                        >(189)</span
                      >
                    </div>
                    <div class="price-section flex items-center gap-x-3 mb-2">
                      <span
                        class="current-price text-base font-semibold text-light-primary-text"
                        >$27.49</span
                      >
                      <span
                        class="old-price text-sm leading-[22px] font-normal text-light-disabled-text line-through"
                        >$39.99</span
                      >
                      <span
                        class="discount-percentage text-sm leading-[22px] font-semibold text-error"
                        >10% OFF</span
                      >
                    </div>
                    <div class="btn-section flex items-center gap-x-4">
                      <a class='size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300' href='wishlist-style-v1.html'>
                        <i
                          class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"
                        ></i>
                      </a>
                      <a class='btn btn-primary rounded-full font-semibold text-sm leading-6 px-6.5 py-2 flex-1' href='cart-single-vendor.html'>
                        <i
                          class="hgi hgi-stroke hgi-shopping-cart-02 text-xl text-white"
                        ></i>

                        <span>Add to Cart</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ========== Single Product Card End ========== -->
            </div>
          </div>
          <!-- ========== Health Care Tab End ========== -->
        </div>
      </div>
    </section>
    <!-- ========== Our Products Section End ========== -->
