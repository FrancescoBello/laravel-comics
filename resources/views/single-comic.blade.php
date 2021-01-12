@extends('layout.app')
@section('content')
  @include('partials.jumbotron')

  <div class="single-comic">
     <div class="container">
    <div class="comic-thumb">
        <img src="{{ $comic["thumb"] }}" alt="">
      </div>

    </div>
      </div>
        <main>

      <div class="comic-info">
        <div class="container">
            <h1 class="up">{{ $comic["title"] }}</h1>
            <div class="info-buy">
              <div class"comic-price">
                <span >U.S. Price:</span>
                <span class="comic">{{ $comic["price"] }}</span>
                <span class"up">available</span>
                <span class="check">Check Avaialbility</span>

              </div>


            </div>
            <div class="comic-description">
                <p>{{ $comic["description"] }}</p>
            </div>
                <img src="{{ asset('images/adv.jpg') }}" alt="">
        </div>

      <div class="comic-details">
        <div class="container">
        <div class="talent">
          <h1>Talent</h1>
          <hr>
              <ul>
                  <li>
                      <span class="detail">Art by:</span>
                      <span class="detail-author">
                          @foreach ($comic["artists"] as $artist_name)
                              <a href="#">{{ $artist_name }}</a>
                          @endforeach
                      </span>
                      <hr>
                  </li>
                  <li>
                      <span class="detail">Written by:</span>
                      <span class="detail-writer">
                          @foreach ($comic["writers"] as $writer_name)
                              <a href="#">{{ $writer_name }}</a>
                          @endforeach
                      </span>
                      <hr>
                  </li>
              </ul>
        </div>
        <div class="specs">
          <h1>Specs</h1>
          <hr>
              <ul>
                  <li>
                      <span class="detail">Series:</span>
                      <span class="general-detail"><a href="#" class="up">{{ $comic['series'] }}</a></span>
                      <hr>
                  </li>
                  <li>
                      <span class="detail">Price:</span>
                      <span class="general-detail">{{ $comic['price'] }}</span>
                      <hr>
                  </li>
                  <li>
                      <span class="detail">On Sale Date:</span>
                      <span class="general-detail">
                          {{ $comic['sale_date'] }}
                      </span>
                      <hr>
                  </li>
              </ul>
          </div>
        </div>
    </div>
    <div class="comic-icon">
      <div class="container">
        <div class="icon-container">
          <a href="#" class="up">
          <span class="icon-text">Digital Comics</span>
          <span class="icon-image"></span>
          </a>
        </div>
        <div class="icon-container">
          <a href="#" class="up">
          <span class="icon-text">Digital Comics</span>
          <span class="icon-image"></span>
          </a>
        </div>
        <div class="icon-container">
          <a href="#" class="up">
          <span class="icon-text">Digital Comics</span>
          <span class="icon-image"></span>
          </a>
        </div>
        <div class="icon-container">
          <a href="#" class="up">
          <span class="icon-text">Digital Comics</span>
          <span class="icon-image"></span>
          </a>
        </div>

      </div>

    </div>




      </div>
      </div>
    </main>






@endsection
