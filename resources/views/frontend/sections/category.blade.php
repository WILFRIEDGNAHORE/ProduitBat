    <!-- ========== Category Section Start ========== -->
    <section class="pb-[70px]">
      <div class="container">
        <div
          class="md:flex md:justify-between md:items-center mb-10 wow animate__animated animate__fadeInUp"
          data-wow-delay=".2s"
        >
          <div class="text-center md:text-left">
            <h3 class="mb-3">Shop by Category</h3>
          </div>
          <div
            class="home-one-category-slider-nav md:flex items-center justify-between gap-x-6 hidden"
          ></div>
        </div>

        @if(isset($categories) && $categories->isNotEmpty())
        <div
          data-slick='{"slidesToShow": 8, "slidesToScroll": 1, "autoplay": true, "autoplaySpeed": 7000, "arrows": true, "infinite": true, "rows": 2, "appendArrows": ".home-one-category-slider-nav", "responsive": [{"breakpoint": 1441, "settings": {"slidesToShow": 4}}, {"breakpoint": 1025, "settings": {"slidesToShow": 4}}, {"breakpoint": 769, "settings": {"slidesToShow": 2}}, {"breakpoint": 480, "settings": {"slidesToShow": 1}}]}'
          class="-mx-3 sellzy-slider"
        >
          @foreach($categories as $category)
          <div class="p-3 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
            <a href="{{ url('/product-details?category=' . $category->slug) }}" class="block group">
              <div class="border border-gray-300 rounded-2xl mb-3 overflow-hidden bg-gray-50 flex items-center justify-center"
                   style="height: 110px;">
                @if($category->image)
                  <img src="{{ asset($category->image) }}" alt="{{ $category->name }}"
                       class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                @else
                  <i class="{{ $category->icon }} text-5xl text-primary leading-none"></i>
                @endif
              </div>
              <p class="font-semibold text-light-primary-text text-center truncate group-hover:text-primary transition-colors duration-300">
                {{ $category->name }}
              </p>
            </a>
          </div>
          @endforeach
        </div>
        @else
        <p class="text-center text-light-primary-text py-10">Aucune catégorie disponible.</p>
        @endif

      </div>
    </section>
    <!-- ========== Category Section End ========== -->
