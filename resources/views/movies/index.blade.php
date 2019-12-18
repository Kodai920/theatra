@extends('layouts.app')
@section('content')

            @foreach($movies as $movie)
                <div>
                    <a href="#" class="float-left m-4">
                    <img src="{{$movie->image}}" width="210px" height="300px" alt="{{$movie->title}}">
                    </a>
                </div>
            @endforeach

@endsection
