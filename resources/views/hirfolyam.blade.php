@php ($items_col1 = 
  array(
    1 => array(
      'icon' => 'icon',
      'description' => 'Öt csillaggal értékelted Minta Ágnes RTM oktatót, köszönjük!',
      'date' => 'MA'
    ),
    2 => array(
      'icon' => 'icon',
      'description' => 'A haskörfogatod 1 hét alatt 2 cm-t csökkent, gratulálunk!',
      'date' => 'MA'
    ),
    3 => array(
      'icon' => 'icon',
      'description' => 'Az RTM core Program havi bérleted 7 nap múlva lejár, most megújíthatod!',
      'date' => 'tegnap',
      'buttonLink' => '#',
      'buttonLinkText' => "Megújítás"
    )
  )
)
@php ($items_col2 = 
  array(
    4 => array(
      'icon' => 'icon',
      'description' => 'Ezen a héten még nem tornáztál velünk online, rajta, kezdd el most!',
      'date' => 'tegnap',
      'buttonLink' => '#',
      'buttonLinkText' => "Kezdjük"
    ),
    5 => array(
      'icon' => 'icon',
      'description' => 'RTM oktatód új videót töltött fel!',
      'date' => 'szeptember 29.',
      'buttonLink' => '#',
      'buttonLinkText' => "Megnézem"
    )
  )
)
@extends('layouts.master')

@section('content')
<div class="page-content">
    <!-- breadcrumb -->
    <nav aria-label="breadcrumb">
      <div class="container container--small-gap">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">home icon</a></li>
          <!-- <li class="breadcrumb-item active" aria-current="page">Hírfolyam</li> -->
        </ol>
      </div>
    </nav>
    <!-- .end breadcrumb -->

    <!-- feedback list  -->
    <section class="after-breadcrumb-section">
      <div class="container container--small container--small-gap">
        <h1 class="text-center page-title">hírfolyam</h1>
        <div class="feed-list feed-list--col-2">
          <div class="row">
            <div class="col-xs-12 col-md-6">
              @foreach ($items_col1 as $item)
                @include('components._feedItem', [
                  'item' => $item
                ])
              @endforeach  
            </div>
            <div class="col-xs-12 col-md-6">
              @foreach ($items_col2 as $item)
                @include('components._feedItem', [
                  'item' => $item
                ])
              @endforeach  
            </div>
          </div>
        </div>

        <div class="text-center pt-md-4">
          <a href="/" class="btn btn--pink btn--lg w--400">MUTASS TÖBBET</a>
        </div>
      </div>
    </section>
    <!-- end .feedback-list -->
</div>
@endsection

