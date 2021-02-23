<div class="slick-slider-item d-flex flex-column h--100">
  <div class="image-wrapper bg-cover" style="background-image: url('{{ $item['image'] }}')">
    <!-- <img src="{{ $item['image'] }}" alt="{{ $item['title'] }}" class="image" /> -->
    <div class="text-wrapper text--white text-center">
      <h2 class="h1--big mb-0">{{ $item['title'] }}</h2>
      @isset($item['subtitle'])
        <h2 class="h2--big">{{ $item['subtitle'] }}</h2>
      @endisset
    </div>
  </div>

  <div class="description rounded box-shadow">
    <p>{{ $item['lead'] }}</p>
    <a href="{{ $item['link'] }}" class="btn btn--lg w--200">Megnézem</a>
  </div>
</div>