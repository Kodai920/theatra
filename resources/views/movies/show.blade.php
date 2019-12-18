@extends('layouts.app')
@section('content')

<div class="card">
    <div class="card-header">{{$movie->title}}({{$movie->year}}年)</div>
    <div class="card-body">
        <div class="row">
            <div class="col-5">
                <img src="{{$movie->image}}" width="210px" height="300px" alt="{{$movie->title}}">
            </div>
            <div class="col-7">
                <ul>
                    <li>制作国 : {{$movie->country->name}}</li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection