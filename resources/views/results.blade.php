@extends('layouts.app')
@section('content')

<!-- Stunning Header -->

    <h1 class="stunning-header-title">検索条件 : {{$query}} </h1>

<!-- End Stunning Header -->
<!-- Post Details -->

        <main class="main">
            @if(count($movies) > 0)
            @foreach($movies as $movie)
                <div id="movie-image">
                    <a href="{{route('movies.show',[$movie->id])}}" class="float-left m-4">
                    <img src="{{asset("uploads/movies/".$movie->image)}}" width="210px" height="300px" alt="{{$movie->title}}">
                    </a>
                </div>
            @endforeach
            @else
            　<h3 class="text-center my-5">該当する作品はありません。</h3>
            @endif
            <!-- End Post Details -->
        </main>

@endsection