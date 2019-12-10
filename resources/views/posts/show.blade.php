@extends('layouts.app')
@section('content')

<h1 class="text-center">{{$post->title}}</h1>
<div class="text-center my-3"><img src="{{asset( $post->featured_img )}}" width="60%" height="40%"></div>


    <div class="card">
        <div class="card-body">
        <h3>レビュー</h3>
        <div>{!! $post->about !!}</div>
        <hr>
        <a href="{{route('posts.index')}}" class="btn btn-secondary float-right">Back</a>
        </div>
    </div>

@endsection