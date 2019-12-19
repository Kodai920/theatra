@extends('layouts.app')
@section('content')

    @foreach($movies as $movie)
        <div id="movie-image">
            <a href="{{route('movies.show',[$movie->id])}}" class="float-left m-4">
            <img src="{{asset("uploads/movies/".$movie->image)}}" width="210px" height="300px" alt="{{$movie->title}}">
            </a>
        </div>
    @endforeach

@endsection
