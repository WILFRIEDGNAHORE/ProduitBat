@php
    $mobileCategories = App\Models\Category::where('status', 1)->with('subCategories')->get();
@endphp

<!-- SIDEBAR START -->
<div
    class="fixed top-0 left-0 w-[350px] bg-white h-full z-91 px-4 py-6 flex flex-col justify-between gap-y-6 overflow-y-auto shadow-dark-z-24 transition-all duration-250 ease-[cubic-bezier(0.645,0.045,0.355,1)] data-[state=open]:translate-x-0 data-[state=open]:opacity-100 data-[state=open]:visible data-[state=close]:-translate-x-[200px] data-[state=close]:opacity-0 data-[state=close]:invisible"
    id="sidebar"
    data-state="close"
>
    <div>
        {{-- Header --}}
        <div class="relative pb-6 border-b border-gray-200 mb-4">
            <img src="{{ asset('frontend/assets/images/logo.avif') }}" alt="Logo" class="w-[100px]" />
            <button
                class="size-7 inline-flex items-center justify-center absolute top-0 right-0 rounded-full bg-[rgba(145,158,171,0.08)]"
                id="side-bar-menu-close"
            >
                <i class="hgi hgi-stroke hgi-multiplication-sign text-xl leading-5"></i>
            </button>
        </div>

        <div class="flex flex-col gap-y-6">

            {{-- Navigation --}}
            <nav class="mobile-menu">
                <ul>
                    <li>
                        <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">
                            Accueil
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('shop.index') }}" class="{{ request()->routeIs('shop.index') ? 'active' : '' }}">
                            Nos Produits
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('flash-sale.index') }}" class="{{ request()->routeIs('flash-sale.*') ? 'active' : '' }}">
                            Flash Sale
                        </a>
                    </li>

                    {{-- Categories --}}
                    @if($mobileCategories->count())
                        <li>
                            <a href="{{ route('shop.index') }}">Catégories</a>
                            <ul>
                                @foreach($mobileCategories as $cat)
                                    <li>
                                        <a href="{{ route('shop.index', ['category[]' => $cat->id]) }}">
                                            {{ $cat->name }}
                                        </a>
                                        @if($cat->subCategories->count())
                                            <ul>
                                                @foreach($cat->subCategories as $sub)
                                                    <li>
                                                        <a href="{{ route('shop.index', ['category[]' => $cat->id]) }}">
                                                            {{ $sub->name }}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    @endif
                </ul>
            </nav>

            {{-- Auth links --}}
            <div class="border border-gray-500/24 p-5 rounded-2xl">
                <div class="flex flex-col gap-y-3">
                    @auth
                        <a href="{{ url('/'.Auth::user()->role.'/dashboard') }}" class="flex items-center gap-x-2">
                            <span class="inline-flex items-center justify-center bg-primary-lighter size-8 rounded-full">
                                <i class="hgi hgi-stroke hgi-user text-base text-primary"></i>
                            </span>
                            <span class="text-sm font-medium">{{ Auth::user()->name }}</span>
                        </a>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="flex items-center gap-x-2 text-sm text-light-secondary-text hover:text-error transition-colors w-full">
                                <span class="inline-flex items-center justify-center bg-gray-100 size-8 rounded-full">
                                    <i class="hgi hgi-stroke hgi-logout-01 text-base"></i>
                                </span>
                                Déconnexion
                            </button>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="flex items-center gap-x-2 login-page-btn">
                            <span class="inline-flex items-center justify-center bg-warning size-8 rounded-full">
                                <i class="hgi hgi-stroke hgi-lock-sync-01 text-base text-light-primary-text"></i>
                            </span>
                            Connexion / Inscription
                        </a>
                    @endauth
                </div>
            </div>

            {{-- Social links --}}
            <div>
                <h4 class="mb-3">Suivez-nous</h4>
                <ul class="flex items-center gap-x-4">
                    <li>
                        <a href="#" class="inline-flex items-center justify-center">
                            <span class="size-8 bg-primary-dark inline-flex items-center justify-center rounded-full">
                                <i class="hgi hgi-stroke hgi-facebook-01 text-base text-white"></i>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="inline-flex items-center justify-center">
                            <span class="size-8 bg-primary-dark inline-flex items-center justify-center rounded-full">
                                <i class="hgi hgi-stroke hgi-instagram text-base text-white"></i>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="inline-flex items-center justify-center">
                            <span class="size-8 bg-primary-dark inline-flex items-center justify-center rounded-full">
                                <i class="hgi hgi-stroke hgi-twitter text-base text-white"></i>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="inline-flex items-center justify-center">
                            <span class="size-8 bg-primary-dark inline-flex items-center justify-center rounded-full">
                                <i class="hgi hgi-stroke hgi-youtube text-base text-white"></i>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</div>
<!-- SIDEBAR END -->
