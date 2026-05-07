<!-- ========== Category Section Start ========== -->
<section class="pb-[70px]">
  <div class="container">
    <div
      class="md:flex md:justify-between md:items-center mb-10 wow animate__animated animate__fadeInUp"
      data-wow-delay=".2s"
    >
      <div class="text-center md:text-left">
        <h3 class="mb-3">Nos Catégories</h3>
        <p>Explorez notre sélection de produits</p>
      </div>
      <div class="home-one-category-slider-nav md:flex items-center justify-between gap-x-6 hidden"></div>
    </div>

    @if($categories->isNotEmpty())
      <div
        data-slick='{"slidesToShow": 8, "slidesToScroll": 1, "loop": true, "autoplay": true, "autoplaySpeed": 7000, "arrows": true, "infinite": true, "rows": 2, "appendArrows": ".home-one-category-slider-nav", "responsive": [{"breakpoint": 1441, "settings": {"slidesToShow": 5}}, {"breakpoint": 1025, "settings": {"slidesToShow": 4}}, {"breakpoint": 769, "settings": {"slidesToShow": 3}}, {"breakpoint": 480, "settings": {"slidesToShow": 2}}]}'
        class="-mx-3 sellzy-slider"
      >
        @foreach($categories as $i => $cat)
          <div
            class="p-3 wow animate__animated animate__fadeInUp"
            data-wow-delay="{{ ($i % 8) * 0.1 }}s"
          >
            <a href="{{ route('shop.index', ['category[]' => $cat->id]) }}" class="block group">
              <div class="border border-gray-300 rounded-2xl mb-3 overflow-hidden bg-[#F4F3F5] aspect-square flex items-center justify-center">
                @if($cat->image)
                  <img
                    src="{{ asset($cat->image) }}"
                    alt="{{ $cat->name }}"
                    class="w-full h-full object-cover group-hover:scale-110 transition-all duration-300 ease-in-out"
                  />
                @else
                  <i class="hgi hgi-stroke hgi-package text-4xl text-gray-400"></i>
                @endif
              </div>
              <p class="font-semibold text-light-primary-text text-center truncate group-hover:text-primary transition-colors duration-300 text-sm">
                {{ $cat->name }}
              </p>
            </a>
          </div>
        @endforeach
      </div>
    @else
      <p class="text-center text-light-secondary-text py-10">Aucune catégorie disponible.</p>
    @endif
  </div>
</section>
<!-- ========== Category Section End ========== -->
