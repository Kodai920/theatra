@extends('layouts.app')
@section('content')

<div class="card">
    <div class="card-header">{{$movie->title}}({{$movie->year}}年)</div>
    <div class="card-body">
        <div class="row">
            <div class="col-5">
                <img src="{{$movies->image}}" alt="{{$movie->title}}" width="210px" height="300px">
            </div>
            <div class="col-7">

            </div>
        </div>
    </div>
</div>

@endsection