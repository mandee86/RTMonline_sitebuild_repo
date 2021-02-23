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
        <h1 class="text-center page-title">statisztikáim</h1>

        <ul class="nav nav-tabs">
          <li class="nav-item">
            <a class="nav-link active" href="#">Active</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>
        </ul>

        <div class="feed-list feed-list--col-2">
          <div class="row">
            <div class="col-xs-12 col-md-6">

              <div class="card">
                <div class="content text-center">
                  <p>Ennyi ideje tornázol velünk</p>
                  <span class="h2--big text--pink">1218 nap</span>
                </div>
              </div>

              <div class="card">
                <div class="content text-center">
                  <p>Elégetett kalóriák eddig</p>
                  <span class="h2--big text--pink">8500 kcal</span>
                </div>
              </div>

              <div class="card">
                <div class="content text-center">
                  <p>Haskörfogat mérete</p>
                  <span class="h2--big text--pink">120 cm</span>
                  <button type="button" class="btn btn--lg btn--pink w--100">mentés</button>
                </div>
              </div>

              <div class="card">
                <div class="content text-center">
                  <p>Így ment a torna</p>
                  <button type="button" class="btn btn--lg btn--pink w--100">mentés</button>
                </div>
              </div>

            </div>
            <div class="col-xs-12 col-md-6">

              <div class="card">
                <div class="content text-center">
                  <p>Ennyit tornáztál eddig</p>
                  <span class="h2--big text--pink">5 óra 38 perc</span>
                </div>
              </div>

              <div class="card">
                <div class="content text-center">
                  <p>Intenzitás barométer</p>
                  <span class="h2--big text--pink">Ideális</span>
                </div>
              </div>

              <div class="card">
                <div class="content text-center">
                  <p>Ilyen volt, ilyen lett</p>
                  <button type="button" class="btn btn--lg btn--pink w--100">ÚJ KÉPEK FELTÖLTÉSE</button>
                </div>
              </div>

              <div class="card">
                <div class="content text-center">
                  <p>Jelvényeid</p>
                  <p><b>Még nem szereztél jelvényt</b></p>
                  <p class="mb-0">Szerezz minél több jelvényt!</p>
                </div>
              </div>

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

