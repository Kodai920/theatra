@extends('layouts.app')
@section('content')

<div class="my-1">
<a href="{{route('posts.index')}}" class="btn btn-light text-center border border-dark">Back</a>
</div>

<div class="card">
    <div class="card-body">
        <div class="text-center">
            {{$post->created_at->format('Y/m/d')}}
        </div>
        <div class="text-center my-3">
            <h2>{{$post->title}}</h2>
        </div>
        <div class="my-5">
            <img src="{{asset("uploads/posts/".$post->featured_img)}}" width="100%" height="400px">
        </div>
        <div class="my-5">
            {{$post->about}}
        </div>
        <div class="text-center my-2">
            <a href="{{route('posts.index')}}" class="btn btn-lg btn-light text-center border border-dark">Back</a>
        </div>
    </div>
</div>

@endsection