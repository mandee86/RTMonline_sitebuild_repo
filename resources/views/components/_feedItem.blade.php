<div class="card feed-item">
  <div class="header text-center">
      @isset($item['avatar'])
        <div class="avatar-wrapper">
          <img src="{{ $item['avatar'] }}" alt="" class="rounded-circle">
        </div>
      @endisset
      @isset($item['icon'])
        <div class="icon-wrapper">
          {{ $item['icon'] }}
        </div>
      @endisset
  </div>
  <div class="content">
    <p>{!! $item['description'] !!}</p>
  </div>
  <div class="footer">
    <div class="row">
      @isset($item['buttonLink'])
        <div class="col">
          <a href="{{ $item['buttonLink'] }}" class="link more-link">
            <span>{{ $item['buttonLinkText'] }}</span>
            <i>></i>
          </a>
        </div>
      @endisset
      <div class="col text-right">
        <span class="date">
          {{ $item['date'] }}
        </span>
      </div>
    </div>
  </div>
</div>