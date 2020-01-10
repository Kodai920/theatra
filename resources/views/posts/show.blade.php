@extends('layouts.app')
@section('content')

<div class="card">
    <div class="card-body">
        <div class="text-center">
            {{$post->created_at->format('Y/m/d')}}
        </div>
        <div class="text-center">
            <h2>{{$post->title}}</h2>
        </div>
        <div class="my-4">
            <img src="{{asset("uploads/posts/".$post->featured_img)}}" width="100%" height="300px">
        </div>
        <div>
            {{$post->about}}
        </div>
    </div>
</div>

@endsection