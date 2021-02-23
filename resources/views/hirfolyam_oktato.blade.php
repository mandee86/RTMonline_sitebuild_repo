@php ($items_col1 = 
  array(
    1 => array(
      'icon' => 'icon',
      'description' => 'Minta Jolán 5 csillagos értékelést adott az alábbi videódnak, gratulálunk! <br /><br /> <b>Videó címe ipsum dolorem elit</b>',
      'date' => 'MA',
      'buttonLink' => '#',
      'buttonLinkText' => "Megnézem"
    ),
    2 => array(
      'avatar' => 'https://place-hold.it/120x120',
      'description' => '<b>Minta Ágnes megújította az RTM Core Training bérletét,</b> kérjük, vedd fel vele a kapcsolatot, kattints az adatlapjára!',
      'date' => 'tegnap',
      'buttonLink' => '#',
      'buttonLinkText' => "Megnézem"
    )
  )
)
@php ($items_col2 = 
  array(
    3 => array(
      'icon' => 'icon',
      'description' => 'A múlt héten vendégeid összesen <b>1316 percet</b> tornáztak veled online.<br />Egy vendégre jutó tornapercek száma átlagosan <b>86 perc</b>.<br />Ezzel te lettél a <b>3. legeredményesebb</b> RTM okatató, <b>gratulálunk!</b>',
      'date' => 'ma'
    ),
    4 => array(
      'avatar' => 'https://place-hold.it/120x120',
      'description' => '<b>Minta Kriszta téged választott RTM okatatójának,</b> gratulálunk! Vele együtt immár 47 vendég tornázik veled online! Kérjük, aktiváld most és vedd fel vele a kapcsolatot!',
      'date' => 'tegnap',
      'buttonLink' => '#',
      'buttonLinkText' => "aktiválom"
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

