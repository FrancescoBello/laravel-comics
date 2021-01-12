@extends('layout.app')
@section('content')
  @include('partials.jumbotron')
  <div class="comics">
    <div class="container">
      <div class="comics-list">
          @foreach ($comicList as $index => $singleComic)
            <div class="comic-card">
              <a href="{{ route('comic-info', ["id" => $index]) }}">
            <img src="{{ $singleComic["thumb"] }}" alt="">
              <div class="comic-card-title">
                <p class="up" >{{ $singleComic["series"] }}</p>
              </div>
              </a>
            </div>
          @endforeach
      </div>
    </div>
  </div>

@endsection
