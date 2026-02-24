<div
  data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "loop": true, "autoplay": true, "autoplaySpeed": 7000, "arrows": true, "dots": true, "infinite": true, "fade": true, "appendArrows": ".home-one-hero-slider-nav", "responsive": [{"breakpoint": 1025, "settings": {"arrows": false}}]}'
  class="sellzy-slider rounded-3xl relative md:bg-transparent bg-primary-darker home-one-hero-slider"
>

@foreach($sliders as $slider)
    <div
      class="lg:p-0 p-8 pb-15 bg-center bg-no-repeat bg-cover rounded-3xl xl:pl-[177px] lg:pl-[100px] single-hero-slider-item flex! items-center md:h-[600px]! h-[500px]!"
      style="background-image: url('{{ asset($slider->banner) }}');"
    >

      <div class="single-hero-slider-content">
        
        <div class="flex items-center gap-x-2">
          <h6 class="text-white">Exclusive offer</h6>

          @if($slider->starting_price)
              <span
                class="px-2 py-px text-black text-xs leading-[18px] bg-warning rounded-[100px]"
              >
                From {{ $slider->starting_price }}
              </span>
          @endif
        </div>

        <h2 class="py-3 text-white">
          {{ $slider->title }}
        </h2>

        @if($slider->btn_url)
            <a class="btn btn-primary text-white btn-large rounded-[60px] group py-2 pl-5 pr-3"
               href="{{ $slider->btn_url }}">
              Shop Now
              <span
                class="size-8 bg-white inline-flex items-center justify-center rounded-full rotate-[-40deg] transform group-hover:rotate-0 transition-all duration-300"
              >
                <i class="hgi hgi-stroke hgi-arrow-right-02 text-xl text-primary-darker"></i>
              </span>
            </a>
        @endif

      </div>
    </div>
@endforeach

</div>