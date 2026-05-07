    <!-- ========== HEADER Section Start ========== -->
    <header>
        

        <!-- header-middle Start -->
        <div class="py-4 border border-gray-300 xl:border-0 hidden xl:block header-middle">
            <div class="container">
                <!-- For Desktop Screen Start -->
                <div class="xl:flex items-center hidden">
                    <div>
                        <a href='index.html'>
                            <img src="{{ asset('frontend/assets/images/logo.avif') }}" alt="Logo" />
                        </a>
                    </div>
                    <div class="flex items-center w-full justify-end gap-x-[54px]">
                        <div class="relative search-input-container w-full 2xl:max-w-[800px] xl:max-w-[600px]">
                            <div class="input-group px-6 pt-3 pb-3 rounded-[100px]">
                                <div class="input-group-addon" data-align="inline-end">
                                    <i class="hgi hgi-stroke hgi-search-01 text-gray-500 text-xl"></i>
                                </div>
                                <input type="text"
                                    class="peer form-control header-search-input placeholder-transparent focus:placeholder-transparent"
                                    placeholder="Search for the Items" id="desktop-search" />
                                <label for="desktop-search"
                                    class="absolute left-[14px] top-1/2 -translate-y-1/2 text-xs leading-[18px] transition-all peer-placeholder-shown:text-light-disabled-text peer-placeholder-shown:text-[16px] peer-placeholder-shown:top-1/2 peer-focus:text-[12px] peer-focus:top-0 peer-[:not(:placeholder-shown)]:text-[12px] peer-[:not(:placeholder-shown)]:top-0 bg-white peer-focus:px-1 peer-[:not(:placeholder-shown)]:px-1">
                                    Search for the Items
                                </label>
                            </div>

                            <div data-state="close"
                                class="search-result-container p-4 absolute w-full top-[calc(100%+10px)] left-0 border border-gray-300 shadow-light-z-12 bg-white rounded-3xl z-9 transform data-[state=close]:translate-y-4 data-[state=close]:opacity-0 data-[state=close]:invisible transition-all duration-300 ease-[cubic-bezier(0.645,0.045,0.355,1)] data-[state=open]:translate-y-0 data-[state=open]:opacity-100 data-[state=open]:visible">
                                <div class="flex justify-between items-center mb-4">
                                    <p class="font-semibold text-light-primary-text">
                                        Recent Search
                                    </p>
                                    <button class="text-primary text-base leading-[26px] font-semibold cursor-pointer">
                                        Reset History
                                    </button>
                                </div>
                                <div class="flex items-center gap-x-2 recent-search-list mb-4">
                                    <button
                                        class="recent-search-item btn text-sm leading-[22px] font-normal btn-default outline btn-medium pl-3 py-1.5 pr-1.5 rounded-[50px]">
                                        Vitamin D Supplement
                                        <span
                                            class="inline-flex items-center justify-center size-4 bg-[rgba(145,158,171,0.32)] rounded-full">
                                            <i class="hgi hgi-stroke hgi-cancel-01 text-xs text-white"></i>
                                        </span>
                                    </button>
                                    <button
                                        class="recent-search-item btn text-sm leading-[22px] font-normal btn-default outline btn-medium pl-3 py-1.5 pr-1.5 rounded-[50px]">
                                        Pain Relief Spray
                                        <span
                                            class="inline-flex items-center justify-center size-4 bg-[rgba(145,158,171,0.32)] rounded-full">
                                            <i class="hgi hgi-stroke hgi-cancel-01 text-xs text-white"></i>
                                        </span>
                                    </button>
                                    <button
                                        class="recent-search-item btn text-sm leading-[22px] font-normal btn-default outline btn-medium pl-3 py-1.5 pr-1.5 rounded-[50px]">
                                        Baby Thermometer
                                        <span
                                            class="inline-flex items-center justify-center size-4 bg-[rgba(145,158,171,0.32)] rounded-full">
                                            <i class="hgi hgi-stroke hgi-cancel-01 text-xs text-white"></i>
                                        </span>
                                    </button>
                                </div>
                                <div class="recommended-search-list-wrapper">
                                    <p class="text-base font-semibold text-light-primary-text mb-4">
                                        Recommended
                                    </p>
                                    <div
                                        class="recommended-search-list flex flex-col gap-y-2 divide-y divide-gray-300">
                                        <div class="flex items-center gap-x-4 py-2 first:pt-0 last:pb-0">
                                            <div class="size-10 flex-none rounded-lg bg-[#F4F3F5]">
                                                <img src="assets/images/vitamin-c.png" alt="recommended-search-1" />
                                            </div>
                                            <p
                                                class="text-base font-semibold text-light-primary-text hover:text-primary transition-colors duration-300">
                                                <a href="#">Immunity booster</a>
                                            </p>
                                        </div>
                                        <div class="flex items-center gap-x-4 py-2 first:pt-0 last:pb-0">
                                            <div class="size-10 flex-none rounded-lg bg-[#F4F3F5]">
                                                <img src="assets/images/hand-sanitizer-1.png"
                                                    alt="recommended-search-1" />
                                            </div>
                                            <p
                                                class="text-base font-semibold text-light-primary-text hover:text-primary transition-colors duration-300">
                                                <a href="#">Hand Sanitizer 500ml</a>
                                            </p>
                                        </div>
                                        <div class="flex items-center gap-x-4 py-2 first:pt-0 last:pb-0">
                                            <div class="size-10 flex-none rounded-lg bg-[#F4F3F5]">
                                                <img src="assets/images/combat.png" alt="recommended-search-1" />
                                            </div>
                                            <p
                                                class="text-base font-semibold text-light-primary-text hover:text-primary transition-colors duration-300">
                                                <a href="#">Heart health supplements</a>
                                            </p>
                                        </div>
                                        <div class="flex items-center gap-x-4 py-2 first:pt-0 last:pb-0">
                                            <div class="size-10 flex-none rounded-lg bg-[#F4F3F5]">
                                                <img src="assets/images/vitamin-b12.png" alt="recommended-search-1" />
                                            </div>
                                            <p
                                                class="text-base font-semibold text-light-primary-text hover:text-primary transition-colors duration-300">
                                                <a href="#">Protein powder for women</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flex items-center gap-x-6 shrink-0">
                            <ul class="flex items-center gap-x-6">
                                <li class="flex items-center gap-x-4 cursor-pointer relative group">
                                    @auth
                                        <span class="inline-flex items-center justify-center bg-warning w-12 h-12 rounded-full shrink-0">
                                            <i class="hgi hgi-stroke hgi-user text-2xl text-light-primary-text"></i>
                                        </span>
                                        <p class="flex flex-col text-light-secondary-text text-sm leading-[22px]">
                                            Mon compte
                                            <span class="text-base leading-6 text-light-primary-text font-semibold truncate max-w-[120px]">
                                                {{ auth()->user()->name }}
                                            </span>
                                        </p>
                                        <span><i class="hgi hgi-stroke hgi-arrow-down-01 text-2xl text-light-primary-text"></i></span>

                                        <ul class="absolute right-0 top-full py-2 z-10 w-[220px] bg-white rounded-lg shadow-dark-z-24 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform translate-y-4 group-hover:translate-y-0">
                                            <li class="px-4 group/item">
                                                <a href="{{ route('user.dashboard') }}"
                                                    class="flex items-center py-2 gap-x-2 text-light-primary-text group-hover/item:text-primary">
                                                    <span class="w-8 h-8 bg-[#F0F0F0] group-hover/item:bg-[rgba(0,171,85,0.08)] inline-flex items-center justify-center rounded-full">
                                                        <i class="hgi hgi-stroke hgi-user text-base text-light-primary-text group-hover/item:text-primary"></i>
                                                    </span>
                                                    Mon compte
                                                </a>
                                            </li>
                                            <li class="px-4 group/item">
                                                <a href="{{ route('user.dashboard') }}#orders"
                                                    class="flex items-center py-2 gap-x-2 text-light-primary-text group-hover/item:text-primary">
                                                    <span class="w-8 h-8 bg-[#F0F0F0] group-hover/item:bg-[rgba(0,171,85,0.08)] inline-flex items-center justify-center rounded-full">
                                                        <i class="hgi hgi-stroke hgi-package text-base text-light-primary-text group-hover/item:text-primary"></i>
                                                    </span>
                                                    Mes commandes
                                                </a>
                                            </li>
                                            <li class="px-4 group/item">
                                                <a href="{{ route('wishlist.index') }}"
                                                    class="flex items-center py-2 gap-x-2 text-light-primary-text group-hover/item:text-primary">
                                                    <span class="w-8 h-8 bg-[#F0F0F0] group-hover/item:bg-[rgba(0,171,85,0.08)] inline-flex items-center justify-center rounded-full">
                                                        <i class="hgi hgi-stroke hgi-favourite text-base text-light-primary-text group-hover/item:text-primary"></i>
                                                    </span>
                                                    Mes favoris
                                                    @if($wishlistCount > 0)
                                                        <span class="ml-auto text-xs bg-error text-white rounded-full px-1.5 py-0.5">{{ $wishlistCount }}</span>
                                                    @endif
                                                </a>
                                            </li>
                                            <li class="px-4 pt-1 border-t border-gray-100 mt-1 group/item">
                                                <form action="{{ route('logout') }}" method="POST">
                                                    @csrf
                                                    <button type="submit"
                                                        class="flex items-center w-full py-2 gap-x-2 text-error group-hover/item:text-error/80">
                                                        <span class="w-8 h-8 bg-[#F0F0F0] group-hover/item:bg-red-50 inline-flex items-center justify-center rounded-full">
                                                            <i class="hgi hgi-stroke hgi-logout-02 text-base text-error"></i>
                                                        </span>
                                                        Déconnexion
                                                    </button>
                                                </form>
                                            </li>
                                        </ul>
                                    @else
                                        <span class="inline-flex items-center justify-center bg-warning w-12 h-12 rounded-full shrink-0">
                                            <i class="hgi hgi-stroke hgi-lock-sync-01 text-2xl text-light-primary-text"></i>
                                        </span>
                                        <p class="flex flex-col text-light-secondary-text text-sm leading-[22px]">
                                            Compte
                                            <span class="text-base leading-6 text-light-primary-text">Connexion</span>
                                        </p>
                                        <span><i class="hgi hgi-stroke hgi-arrow-down-01 text-2xl text-light-primary-text"></i></span>

                                        <ul class="absolute right-0 top-full py-2 z-10 w-[220px] bg-white rounded-lg shadow-dark-z-24 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform translate-y-4 group-hover:translate-y-0">
                                            <li class="px-4 group/item">
                                                <a href="{{ route('login') }}"
                                                    class="flex items-center py-2 gap-x-2 text-light-primary-text group-hover/item:text-primary">
                                                    <span class="w-8 h-8 bg-[#F0F0F0] group-hover/item:bg-[rgba(0,171,85,0.08)] inline-flex items-center justify-center rounded-full">
                                                        <i class="hgi hgi-stroke hgi-lock-sync-01 text-base text-light-primary-text group-hover/item:text-primary"></i>
                                                    </span>
                                                    Connexion
                                                </a>
                                            </li>
                                            <li class="px-4 group/item">
                                                <a href="{{ route('register') }}"
                                                    class="flex items-center py-2 gap-x-2 text-light-primary-text group-hover/item:text-primary">
                                                    <span class="w-8 h-8 bg-[#F0F0F0] group-hover/item:bg-[rgba(0,171,85,0.08)] inline-flex items-center justify-center rounded-full">
                                                        <i class="hgi hgi-stroke hgi-id text-base text-light-primary-text group-hover/item:text-primary"></i>
                                                    </span>
                                                    S'inscrire
                                                </a>
                                            </li>
                                        </ul>
                                    @endauth
                                </li>
                                @auth
                                <li class="flex items-center">
                                    <a href="{{ route('wishlist.index') }}"
                                        class="flex items-center gap-x-4 cursor-pointer">
                                        <span class="inline-flex items-center justify-center bg-warning w-12 h-12 rounded-full relative">
                                            <i class="hgi hgi-stroke hgi-favourite text-2xl text-light-primary-text"></i>
                                            @if($wishlistCount > 0)
                                                <span class="wishlist-badge absolute -top-1 -right-1 min-w-[18px] h-[18px] bg-error text-white text-[10px] rounded-full flex items-center justify-center px-1">
                                                    {{ $wishlistCount }}
                                                </span>
                                            @else
                                                <span class="wishlist-badge absolute -top-1 -right-1 min-w-[18px] h-[18px] bg-error text-white text-[10px] rounded-full hidden items-center justify-center px-1"></span>
                                            @endif
                                        </span>
                                        <span class="flex flex-col items-start text-sm leading-[22px] text-light-secondary-text">
                                            Favoris
                                            <span class="wishlist-count-text text-base leading-6 text-light-primary-text">
                                                {{ $wishlistCount }}
                                            </span>
                                        </span>
                                    </a>
                                </li>
                                @endauth
                                <li class="flex items-center">
                                    <a href="{{ route('cart-details') }}"
                                        class="flex items-center gap-x-4 cursor-pointer">
                                        <span
                                            class="inline-flex items-center justify-center bg-warning w-12 h-12 rounded-full">
                                            <i
                                                class="hgi hgi-stroke hgi-shopping-cart-02 text-2xl text-light-primary-text"></i>
                                        </span>

                                        <span
                                            class="flex flex-col items-start text-sm leading-[22px] text-light-secondary-text">
                                            Cart
                                            <span class="cart_count text-base leading-6 text-light-primary-text">
                                                {{ Cart::count() }}
                                            </span>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- FOr Desktop Screen End -->
            </div>
        </div>
        <!-- header-middle End -->

        <!-- Mobile Menu Start -->
        <div class="border border-gray-300 xl:border-0 sticky-header">
            <div class="pb-4 pt-3 block xl:hidden">
                <div class="container">
                    <div class="flex justify-between items-center">
                        <div>
                            <button class="btn btn-default outline shadow-none size-12 rounded-[50px]"
                                id="sidebar-menu-btn">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20 12L10 12" stroke="#212529" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M20 5L4 5" stroke="#212529" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M20 19L4 19" stroke="#212529" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>
                        <div>
                            <a href='index.html'>
                                <img src="{{ asset('frontend/assets/images/logo.avif') }}" alt="Logo" class="w-[120px] md:w-[150px]" />
                            </a>
                        </div>
                        <div class="xl:hidden flex items-center gap-x-4">
                            <li class="flex items-center">
                                    <a href="{{ route('cart-details') }}"
                                        class="flex items-center gap-x-4 cursor-pointer">
                                        <span
                                            class="inline-flex items-center justify-center bg-warning w-12 h-12 rounded-full">
                                            <i
                                                class="hgi hgi-stroke hgi-shopping-cart-02 text-2xl text-light-primary-text"></i>
                                        </span>

                                        <span
                                            class="flex flex-col items-start text-sm leading-[22px] text-light-secondary-text">
                                            Cart
                                            <span class="cart_count text-base leading-6 text-light-primary-text">
                                                {{ Cart::count() }}
                                            </span>
                                        </span>
                                    </a>
                                </li>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pb-4 block xl:hidden">
                <div class="container">
                    <div>
                        <div class="relative search-input-container">
                            <div class="input-group w-full px-4 py-3 rounded-[100px]">
                                <div class="input-group-addon inline-flex justify-center items-center"
                                    data-align="inline-end">
                                    <span class="inline-flex justify-center items-center">
                                        <i class="hgi hgi-stroke hgi-search-01 text-2xl leading-6 text-gray-500"></i>
                                    </span>
                                </div>
                                <input type="text" id="mobile-search"
                                    class="peer form-control header-search-input placeholder-transparent focus:placeholder-transparent"
                                    placeholder="Search for the Items" />
                                <label for="mobile-search"
                                    class="absolute left-[14px] top-1/2 -translate-y-1/2 text-xs leading-[18px] transition-all peer-placeholder-shown:text-light-disabled-text peer-placeholder-shown:text-[16px] peer-placeholder-shown:top-1/2 peer-focus:text-[12px] peer-focus:top-0 peer-[:not(:placeholder-shown)]:text-[12px] peer-[:not(:placeholder-shown)]:top-0 bg-white peer-focus:px-1 peer-[:not(:placeholder-shown)]:px-1">
                                    Search for the Items
                                </label>
                            </div>
                            <div data-state="close"
                                class="search-result-container p-4 absolute w-full top-[calc(100%+10px)] left-0 border border-gray-300 shadow-light-z-12 bg-white rounded-3xl z-9 transform data-[state=close]:translate-y-4 data-[state=close]:opacity-0 data-[state=close]:invisible transition-all duration-300 ease-[cubic-bezier(0.645,0.045,0.355,1)] data-[state=open]:translate-y-0 data-[state=open]:opacity-100 data-[state=open]:visible">
                                <div class="flex justify-between items-center mb-4">
                                    <p class="font-semibold text-light-primary-text">
                                        Recent Search
                                    </p>
                                    <button class="text-primary text-base leading-[26px] font-semibold cursor-pointer">
                                        Reset History
                                    </button>
                                </div>
                                <div class="flex flex-wrap items-center gap-2 recent-search-list mb-4">
                                    <button
                                        class="recent-search-item btn text-sm leading-[22px] font-normal btn-default outline btn-medium pl-3 py-1.5 pr-1.5 rounded-[50px]">
                                        Vitamin D Supplement
                                        <span
                                            class="inline-flex items-center justify-center size-4 bg-[rgba(145,158,171,0.32)] rounded-full">
                                            <i class="hgi hgi-stroke hgi-cancel-01 text-xs text-white"></i>
                                        </span>
                                    </button>
                                    <button
                                        class="recent-search-item btn text-sm leading-[22px] font-normal btn-default outline btn-medium pl-3 py-1.5 pr-1.5 rounded-[50px]">
                                        Pain Relief Spray
                                        <span
                                            class="inline-flex items-center justify-center size-4 bg-[rgba(145,158,171,0.32)] rounded-full">
                                            <i class="hgi hgi-stroke hgi-cancel-01 text-xs text-white"></i>
                                        </span>
                                    </button>
                                    <button
                                        class="recent-search-item btn text-sm leading-[22px] font-normal btn-default outline btn-medium pl-3 py-1.5 pr-1.5 rounded-[50px]">
                                        Baby Thermometer
                                        <span
                                            class="inline-flex items-center justify-center size-4 bg-[rgba(145,158,171,0.32)] rounded-full">
                                            <i class="hgi hgi-stroke hgi-cancel-01 text-xs text-white"></i>
                                        </span>
                                    </button>
                                </div>
                                <div class="recommended-search-list-wrapper">
                                    <p class="text-base font-semibold text-light-primary-text mb-4">
                                        Recommended
                                    </p>
                                    <div
                                        class="recommended-search-list flex flex-col gap-y-2 divide-y divide-gray-300">
                                        <div class="flex items-center gap-x-4 py-2 first:pt-0 last:pb-0">
                                            <div class="size-10 flex-none rounded-lg bg-[#F4F3F5]">
                                                <img src="assets/images/vitamin-c.png" alt="recommended-search-1" />
                                            </div>
                                            <p
                                                class="text-base font-semibold text-light-primary-text hover:text-primary transition-colors duration-300">
                                                <a href="#">Immunity booster</a>
                                            </p>
                                        </div>
                                        <div class="flex items-center gap-x-4 py-2 first:pt-0 last:pb-0">
                                            <div class="size-10 flex-none rounded-lg bg-[#F4F3F5]">
                                                <img src="assets/images/hand-sanitizer-1.png"
                                                    alt="recommended-search-1" />
                                            </div>
                                            <p
                                                class="text-base font-semibold text-light-primary-text hover:text-primary transition-colors duration-300">
                                                <a href="#">Hand Sanitizer 500ml</a>
                                            </p>
                                        </div>
                                        <div class="flex items-center gap-x-4 py-2 first:pt-0 last:pb-0">
                                            <div class="size-10 flex-none rounded-lg bg-[#F4F3F5]">
                                                <img src="assets/images/combat.png" alt="recommended-search-1" />
                                            </div>
                                            <p
                                                class="text-base font-semibold text-light-primary-text hover:text-primary transition-colors duration-300">
                                                <a href="#">Heart health supplements</a>
                                            </p>
                                        </div>
                                        <div class="flex items-center gap-x-4 py-2 first:pt-0 last:pb-0">
                                            <div class="size-10 flex-none rounded-lg bg-[#F4F3F5]">
                                                <img src="assets/images/vitamin-b12.png" alt="recommended-search-1" />
                                            </div>
                                            <p
                                                class="text-base font-semibold text-light-primary-text hover:text-primary transition-colors duration-300">
                                                <a href="#">Protein powder for women</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile Menu End -->


        @include('frontend.layouts.main-menu')

        <!-- header-bottom End -->
    </header>
    <!-- ========== HEADER Section End ========== -->
