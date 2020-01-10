@extends('layouts.app')
@section('content')

<div class="card">
    <div class="card-body">
        <div class="text-center">
            {{$post->created_at('Y/m/d')}}
        </div>
        <div class="textcenter">
            {{$post->title}}
        </div>
        <div class="">
            <img src="{{asset("uploads/posts/".$post->featured_img)}}" width="100%" height="150px">
        </div>
        <div>
            {{$post->about}}
        </div>
    </div>
</div>

@endsection