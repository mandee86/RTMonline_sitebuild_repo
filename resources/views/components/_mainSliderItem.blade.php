<div class="swiper-slide">
  <div class="box-shadow h-100 d-flex flex-column">
    <div class="image-wrapper bg-cover" style="background-image: url('{{ $item['image'] }}')">
      <!-- <img src="{{ $item['image'] }}" alt="{{ $item['title'] }}" class="image" /> -->
    </div>

    <div class="description bg-white flex-1 d-flex flex-column">
      <div class="flex-1">
        @isset($item['icon'])
          <span class="icon">{{ $item['icon'] }}</span>
        @endisset
        <h2 class="text-none">{{ $item['title'] }}</h2>
        @isset($item['time'])
          <span class="time mb-2">{{ $item['time'] }}</span>
        @endisset
        <p class="js-text-ellipsis" data-row="3">{{ $item['lead'] }}</p>
      </div>
      <a href="{{ $item['link'] }}" class="btn btn--outlined align-self-center">BŐVEBBEN</a>
    </div>
  </div>
</div>