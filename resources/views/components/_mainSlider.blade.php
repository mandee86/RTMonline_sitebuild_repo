<div class="slider-wrapper {{ $class }}">
  <div class="swiper-container">
    <div
      class="swiper-wrapper"
    >
      @foreach ($items as $item)
        @include('components._mainSliderItem', [
          'item' => $item
        ])
      @endforeach
    </div>
    <!-- If we need navigation buttons -->
    <div class="swiper-button swiper-button-prev"></div>
    <div class="swiper-button swiper-button-next"></div>

    <div class="swiper-scrollbar"></div>
  </div>
</div>
