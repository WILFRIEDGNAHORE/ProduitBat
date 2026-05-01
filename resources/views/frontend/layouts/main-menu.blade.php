@php
    $menuCategories = App\Models\Category::where('status', 1)->with(['subCategories.childCategories'])->get();
@endphp

<div class="border border-gray-300 hidden xl:flex header-bottom sticky-header border-r-0 border-l-0">
    <div class="container">
        <div class="hidden relative items-center justify-between xl:flex">

            {{-- ===== Categories Dropdown ===== --}}
            <div class="relative">
                <button class="btn btn-primary btn-large rounded-lg" id="dropdownButton" data-state="close">
                    <span class="inline-flex items-center">
                        <i class="hgi hgi-stroke hgi-grid-view text-base text-white"></i>
                    </span>
                    Toutes les catégories
                    <span class="inline-flex items-center" id="dropdownIcon">
                        <i class="hgi hgi-stroke hgi-arrow-down-01 text-xl text-white"></i>
                    </span>
                </button>

                <ul id="dropdownMenu"
                    class="bg-white hide shadow-dark-z-24 rounded-b-2xl px-4 py-4 z-40 transform origin-top transition-all duration-300 ease-in-out absolute left-0 top-full w-full divide-y divide-[rgba(145,158,171,0.24)]">
                    @forelse($menuCategories as $category)
                        <li class="py-[9px] group relative">
                            <a href="{{ route('shop.index', ['category[]' => $category->id]) }}"
                               class="flex items-center gap-x-2 w-full hover:text-primary transition-colors">
                                <span class="w-8 h-8 bg-primary-lighter inline-flex items-center justify-center rounded-full flex-none">
                                    <i class="{{ $category->icon }}"></i>
                                </span>
                                <span class="flex-1">{{ $category->name }}</span>
                                @if($category->subCategories->count())
                                    <i class="hgi hgi-stroke hgi-arrow-right-01 text-lg text-light-primary-text"></i>
                                @endif
                            </a>

                            @if($category->subCategories->count())
                                <ul class="absolute left-full top-0 z-60 w-[250px] bg-white rounded-2xl divide-y divide-gray-300 shadow-dark-z-24 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform translate-x-4 group-hover:translate-x-0">
                                    @foreach($category->subCategories as $sub)
                                        <li class="py-[9px] px-4 group/item relative">
                                            <a href="{{ route('shop.index', ['category[]' => $category->id]) }}"
                                               class="flex items-center justify-between w-full hover:text-primary transition-colors">
                                                <span>{{ $sub->name }}</span>
                                                @if($sub->childCategories->count())
                                                    <i class="hgi hgi-stroke hgi-arrow-right-01 text-lg text-light-primary-text"></i>
                                                @endif
                                            </a>

                                            @if($sub->childCategories->count())
                                                <ul class="absolute left-full top-0 z-60 w-[220px] bg-white rounded-2xl divide-y divide-gray-300 shadow-dark-z-24 opacity-0 invisible group-hover/item:opacity-100 group-hover/item:visible transition-all duration-300 transform translate-x-4 group-hover/item:translate-x-0">
                                                    @foreach($sub->childCategories as $child)
                                                        <li class="py-[9px] px-4">
                                                            <a href="{{ route('shop.index', ['category[]' => $category->id]) }}"
                                                               class="block hover:text-primary transition-colors">
                                                                {{ $child->name }}
                                                            </a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        </li>
                    @empty
                        <li class="py-3 text-light-disabled-text text-sm">Aucune catégorie disponible</li>
                    @endforelse
                </ul>
            </div>

            {{-- ===== Main Nav ===== --}}
            <nav class="main-menu">
                <ul>
                    <li>
                        <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Accueil</a>
                    </li>
                    <li>
                        <a href="{{ route('shop.index') }}" class="{{ request()->routeIs('shop.index') ? 'active' : '' }}">Nos Produits</a>
                    </li>
                    <li>
                        <a href="{{ route('flash-sale.index') }}" class="{{ request()->routeIs('flash-sale.*') ? 'active' : '' }}">Flash Sale</a>
                    </li>
                </ul>
            </nav>

            {{-- ===== Support ===== --}}
            <div>
                <p class="xl:flex lg:items-center gap-x-4 hidden">
                    <span class="size-12 inline-flex items-center justify-center rounded-full transition-colors duration-300 bg-[rgba(145,158,171,0.08)]">
                        <i class="hgi hgi-stroke hgi-customer-support text-2xl text-light-primary-text"></i>
                    </span>
                    <span class="flex flex-col text-sm leading-[22px]">
                        Support 24/7
                        <span class="text-base leading-6 text-light-primary-text font-semibold">Service client</span>
                    </span>
                </p>
            </div>

        </div>
    </div>
</div>
