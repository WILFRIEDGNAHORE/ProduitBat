    <!-- ========== Category Section Start ========== -->
    <section class="pb-[70px]">
      <div class="container">
        <div
          class="md:flex md:justify-between md:items-center mb-10 wow animate__animated animate__fadeInUp"
          data-wow-delay=".2s"
        >
          <div class="text-center md:text-left">
            <h3 class="mb-3">Top Category</h3>
          </div>
          <div
            class="home-one-category-slider-nav md:flex items-center justify-between gap-x-6 hidden"
          ></div>
        </div>

        @if($categories->isNotEmpty())
        <div
          data-slick='{"slidesToShow": 8, "slidesToScroll": 1, "loop": true, "autoplay": true, "autoplaySpeed": 7000, "arrows": true, "infinite": true, "rows": 2, "appendArrows": ".home-one-category-slider-nav", "responsive": [{"breakpoint": 1441, "settings": {"slidesToShow": 4}}, {"breakpoint": 1025, "settings": {"slidesToShow": 4}}, {"breakpoint": 769, "settings": {"slidesToShow": 2}}, {"breakpoint": 480, "settings": {"slidesToShow": 1}}]}'
          class="-mx-3 sellzy-slider"
        >
          @foreach($categories as $category)
          <div class="p-3 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
            <a href="{{ route('product-details.index', ['category' => $category->slug]) }}"
               class="block">
              <div class="border border-gray-300 rounded-2xl mb-3 flex items-center justify-center bg-gray-50" style="height:100px;">
                <i class="{{ $category->icon }} text-5xl text-primary leading-none"></i>
              </div>
              <p class="font-semibold text-light-primary-text text-center truncate hover:text-primary transition-colors duration-300">
                {{ $category->name }}
              </p>
            </a>
          </div>
          @endforeach
        </div>
        @else
        <p class="text-center text-light-primary-text">Aucune catégorie disponible.</p>
        @endif

      </div>
    </section>
    <!-- ========== Category Section End ========== -->
