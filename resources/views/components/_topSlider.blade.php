<div class="slider-wrapper {{ $class }}">
  <div
    class="slick-slider"
    data-arrows="false"
    data-dots="true"
    data-slidesToShow="1"
    data-slidesToScroll="1"
    center="false"
  >
    @foreach ($items as $item)
      @include('components._topSliderItem', [
        'item' => $item
      ])
    @endforeach
  </div>
</div>
