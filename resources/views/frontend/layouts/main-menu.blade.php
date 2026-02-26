@php
    $categories = App\Models\Category::where('status', 1)->orderBy('id', 'DESC')->get();
@endphp

<div class="border border-gray-300 hidden xl:flex header-bottom sticky-header border-r-0 border-l-0">
    <div class="container">
        <div class="hidden relative items-center justify-between xl:flex">
            <div class="relative">
                <button
                    class="btn btn-primary btn-large rounded-lg"
                    id="dropdownButton"
                    data-state="close"
                >
                    <span class="inline-flex items-center">
                        <i class="hgi hgi-stroke hgi-grid-view text-base text-white"></i>
                    </span>
                    Explore All Categories
                    <span class="inline-flex items-center" id="dropdownIcon">
                        <i class="hgi hgi-stroke hgi-arrow-down-01 text-xl text-white"></i>
                    </span>
                </button>
                <div>
                    <ul
                        id="dropdownMenu"
                        class="bg-white hide shadow-dark-z-24 rounded-b-2xl px-4 py-4 z-40 transform origin-top transition-all duration-300 ease-in-out absolute left-0 top-full w-full divide-y divide-[rgba(145,158,171,0.24)]"
                    >
                        @forelse ($categories as $category)
                        <li class="py-[9px] group relative">
                            
                                
                                <span class="w-8 h-8 bg-primary-lighter inline-flex items-center justify-center rounded-full">
                                    <i class="{{ $category->icon }}"></i>
                                </span>
                                {{ $category->name }}
                                @if(count($category->subCategories) > 0)
                                <span class="absolute right-0 top-1/2 -translate-y-1/2">
                                    <i class="hgi hgi-stroke hgi-arrow-right-01 text-lg text-light-primary-text"></i>
                                </span>
                                @endif
                            </a>

                            @if(count($category->subCategories) > 0)
                            <!-- First Drop Down -->
                            <ul
                                class="absolute left-full top-0 z-60 w-[250px] max-w-[250px] bg-white rounded-2xl divide-y divide-gray-300 shadow-dark-z-24 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform translate-x-4 group-hover:translate-x-0"
                            >
                                @forelse ($category->subCategories as $subCategory)
                                <li class="py-[9px] px-4 group/item">
                                    
                                        
                                        {{ $subCategory->name }}
                                        @if(count($subCategory->childCategories) > 0)
                                        <span class="absolute right-0 top-1/2 -translate-y-1/2">
                                            <i class="hgi hgi-stroke hgi-arrow-right-01 text-lg text-light-primary-text"></i>
                                        </span>
                                        @endif
                                    </a>

                                    @if(count($subCategory->childCategories) > 0)
                                    <!-- 2nd Drop Down -->
                                    <ul
                                        class="absolute left-full top-0 z-60 w-[250px] max-w-[250px] bg-white rounded-2xl divide-y divide-gray-300 shadow-dark-z-24 opacity-0 invisible group-hover/item:opacity-100 group-hover/item:visible transition-all duration-300 transform translate-x-4 group-hover/item:translate-x-0"
                                    >
                                        @forelse ($subCategory->childCategories as $childCategory)
                                        <li class="py-[9px] px-4 group/sub">
                                            
                                                
                                                {{ $childCategory->name }}
                                            </a>
                                        </li>
                                        @empty
                                            No Data Available
                                        @endforelse
                                    </ul>
                                    @endif

                                </li>
                                @empty
                                    No Data Available
                                @endforelse
                            </ul>
                            @endif

                        </li>
                        @empty
                            No Data Available
                        @endforelse
                    </ul>
                </div>
            </div>
            <nav class="main-menu">
              <ul>
                <li>
                  <a class="active" href="#">Home </a>
                  <ul>
                    <li>
                      <a class='active' href='index.html'> Home 1 </a>
                    </li>
                    <li>
                      <a href='index-2.html'> Home 2 </a>
                    </li>
                    <li>
                      <a href='index-3.html'> Home 3 </a>
                    </li>
                    <li>
                      <a href='index-4.html'> Home 4 </a>
                    </li>
                    <li>
                      <a href='index-5.html'> Home 5 </a>
                    </li>
                  </ul>
                </li>

                <li>
                  <a href='about.html'>About Us </a>
                </li>
                <li>
                  <a href="#">Shop </a>
                  <ul>
                    <li>
                      <a href="#">Product Details</a>
                      <ul>
                        <li>
                          <a href='product-details.html'>Product Details Version 1</a
                          >
                        </li>
                        <li>
                          <a href='product-details-2.html'>Product Details Version 2</a
                          >
                        </li>
                        <li>
                          <a href='product-details-3.html'>Product Details Version 3</a
                          >
                        </li>
                        <li>
                          <a href='product-details-4.html'>Product Details Version 4</a
                          >
                        </li>
                        <li>
                          <a href='product-details-5.html'>Product Details Version 5</a
                          >
                        </li>
                        <li>
                          <a href='product-details-6.html'>Product Details Version 6</a
                          >
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a href="#">Shop - Wishlist</a>
                      <ul>
                        <li>
                          <a href='wishlist-style-v1.html'>
                            Shop - Wishlist
                          </a>
                        </li>
                        <li>
                          <a href='wishlist-style-v2.html'>
                            Shop - Wishlist Version 2
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a href="#">Shop - Cart</a>
                      <ul>
                        <li>
                          <a href='cart-single-vendor.html'> Shop - Cart </a>
                        </li>
                        <li>
                          <a href='cart-multi-vendor.html'>
                            Shop - Cart Multi Vendor
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a href="#">Shop - Checkout</a>
                      <ul>
                        <li>
                          <a href='checkout.html'>
                            Shop - Checkout Version 1
                          </a>
                        </li>
                        <li>
                          <a href='checkout-v2.html'>
                            Shop - Checkout Version 2
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a href='order-successful.html'>Shop - Order Success</a>
                    </li>
                    <li>
                      <a href='compare.html'>Shop - Compare</a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="#">Sellers</a>

                  <ul>
                    <li>
                      <a href='vendors-grid.html'> Seller Grid </a>
                    </li>
                    <li>
                      <a href='vendors-list.html'> Seller List </a>
                    </li>
                    <li>
                      <a href='vendor-left-sidebar-marketplace.html'>
                        Seller Market Place v1
                      </a>
                    </li>
                    <li>
                      <a href='vendor-left-top-marketplace.html'>
                        Seller Market Place v2
                      </a>
                    </li>
                    <li>
                      <a href='vendor-account.html'> Seller Account </a>
                      <a href='vendor-dashboard.html'> Seller Dashboard </a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="#">Mega Menu </a>

                  <!-- Dropdown Panel -->
                  <div class="mega-menu">
                    <!--  -->
                    <div class="p-10">
                      <div
                        class="grid grid-cols-6 gap-x-4 divide-x divide-[rgba(145,158,171,0.24)]"
                      >
                        <!-- GRID -->
                        <div class="flex flex-col gap-y-1.5 pr-4">
                          <h5
                            class="text-sm leading-[22px] uppercase font-semibold"
                          >
                            SHOP GRID
                          </h5>
                          <ul class="flex flex-col gap-y-2">
                            <li>
                              <a href='shop-left-sidebar-3col.html'>3 Columns (Left Filter)</a
                              >
                            </li>
                            <li>
                              <a href='shop-left-sidebar-4col.html'>4 Columns (Left Filter)</a
                              >
                            </li>
                            <li>
                              <a href='shop-left-sidebar-5col.html'>5 Columns (Left Filter)</a
                              >
                            </li>
                          </ul>
                        </div>

                        <!-- GRID WITH BANNER -->
                        <div class="flex flex-col gap-y-1.5 pr-4">
                          <h5
                            class="text-sm leading-[22px] uppercase font-semibold"
                          >
                            GRID WITH BANNER
                          </h5>
                          <ul class="flex flex-col gap-y-2">
                            <li>
                              <a href='banner-left-sidebar-3col.html'>3 Columns (Left Filter)</a
                              >
                            </li>
                            <li>
                              <a href='banner-left-sidebar-4col.html'>4 Columns (Left Filter)</a
                              >
                            </li>
                            <li>
                              <a href='banner-left-sidebar-5col.html'>5 Columns (Left Filter)</a
                              >
                            </li>
                          </ul>
                        </div>

                        <!-- FULL WIDTH LAYOUT -->
                        <div class="flex flex-col gap-y-1.5 pr-4">
                          <h5
                            class="text-sm leading-[22px] uppercase font-semibold"
                          >
                            FULL WIDTH LAYOUT
                          </h5>
                          <ul class="flex flex-col gap-y-2">
                            <li>
                              <a href='full-banner-3col.html'>Grid - 3 Columns (Banner)</a
                              >
                            </li>
                            <li>
                              <a href='full-banner-4col.html'>Grid - 4 Columns (Banner)</a
                              >
                            </li>
                            <li>
                              <a href='full-banner-5col.html'>Grid - 5 Columns (Banner)</a
                              >
                            </li>
                            <li>
                              <a href='full-banner-6col.html'>Grid - 6 Columns (Banner)</a
                              >
                            </li>
                          </ul>
                        </div>

                        <!-- HORIZONTAL FILTER -->
                        <div class="flex flex-col gap-y-1.5 pr-4">
                          <h5
                            class="text-sm leading-[22px] uppercase font-semibold"
                          >
                            Horizontal filter
                          </h5>
                          <ul class="flex flex-col gap-y-2">
                            <li>
                              <a href='banner-with-horizontal-filter-3col.html'>Grid - 3 Columns (Banner)</a
                              >
                            </li>
                            <li>
                              <a href='banner-with-horizontal-filter-4col.html'>Grid - 4 Columns (Banner)</a
                              >
                            </li>
                            <li>
                              <a href='banner-with-horizontal-filter-5col.html'>Grid - 5 Columns (Banner)</a
                              >
                            </li>
                            <li>
                              <a href='banner-with-horizontal-filter-6col.html'>Grid - 6 Columns (Banner)</a
                              >
                            </li>
                          </ul>
                        </div>

                        <!-- TOP BANNER -->
                        <div class="flex flex-col gap-y-1.5 pr-4">
                          <h5
                            class="text-sm leading-[22px] uppercase font-semibold"
                          >
                            Top Banner
                          </h5>
                          <ul class="flex flex-col gap-y-2">
                            <li>
                              <a href='top-banner-left-sidebar-3col.html'>Grid - 3 Columns (Left Filter)</a
                              >
                            </li>
                            <li>
                              <a href='top-banner-left-sidebar-4col.html'>Grid - 4 Columns (Left Filter)</a
                              >
                            </li>
                            <li>
                              <a href='top-banner-left-sidebar-5col.html'>Grid - 5 Columns (Left Filter)</a
                              >
                            </li>
                            <li>
                              <a href='banner-list-with-sidebar.html'>List - 1 Column (Left Filter)</a
                              >
                            </li>
                            <li>
                              <a href='banner-list-without-sidebar-2col.html'>List - 2 Columns (Left Filter)</a
                              >
                            </li>
                          </ul>
                        </div>
                        <!-- BANNER WITH FILTER -->
                        <div class="flex flex-col gap-y-1.5">
                          <h5
                            class="text-sm leading-[22px] uppercase font-semibold"
                          >
                            Banner with filter
                          </h5>
                          <ul class="flex flex-col gap-y-2">
                            <li>
                              <a href='banner-category-filter-3col.html'>Grid - 3 Columns (Banner)</a
                              >
                            </li>
                            <li>
                              <a href='banner-category-filter-4col.html'>Grid - 4 Columns (Banner)</a
                              >
                            </li>
                            <li>
                              <a href='banner-category-filter-5col.html'>Grid - 5 Columns (Banner)</a
                              >
                            </li>
                            <li>
                              <a href='banner-category-filter-6col.html'>Grid - 6 Columns (Banner)</a
                              >
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <a href="#">Blog </a>
                  <ul>
                    <li><a href='blog-grid.html'>Blog Grid</a></li>
                    <li><a href='blog-list.html'>Blog List</a></li>
                    <li><a href='blog-details.html'>Blog Details</a></li>
                  </ul>
                </li>
                <li>
                  <a href="#">Pages </a>

                  <ul>
                    <li>
                      <a href='404.html'> 404 Page </a>
                    </li>
                    <li>
                      <a href='coming-soon.html'> Coming Soon Page </a>
                    </li>
                    <li>
                      <a href='faq.html'> FAQ </a>
                    </li>
                    <li><a href='my-account.html'>My Account</a></li>
                  </ul>
                </li>
                <li>
                  <a href='contact.html'>Contact </a>
                </li>
              </ul>
            </nav>
            <div>
              <p class="xl:flex lg:items-center gap-x-4 hidden">
                <span
                  class="size-12 inline-flex items-center justify-center rounded-full transition-colors duration-300 bg-[rgba(145,158,171,0.08)]"
                >
                  <i
                    class="hgi hgi-stroke hgi-customer-support text-2xl text-light-primary-text"
                  ></i>
                </span>
                <span class="flex flex-col text-sm leading-[22px]">
                  24/7 Support
                  <span class="text-base leading-6 text-light-primary-text"
                    >888-777-999</span
                  >
                </span>
              </p>
            </div>
        </div>
    </div>
</div>