@extends('layouts.app')
@section('content')

            @foreach($movies as $movie)
                <div id="movie-image">
                    <a href="#" class="float-left m-4">
                    <img src="{{$movie->image}}"alt="{{$movie->title}}">
                    </a>
                </div>
            @endforeach

@endsection
