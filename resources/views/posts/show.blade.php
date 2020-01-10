@extends('layouts.app')
@section('content')

<div class="card">
    <div class="card-body">
        <div class="text-center">
            {{$posts->created_at('Y/m/d')}}
        </div>
        <div class="textcenter">
            {{$posts->title}}
        </div>
        <div class="">
            <img src="{{asset("uploads/posts/".$post->featured_img)}}" width="100%" height="150px">
        </div>
        <div>
            {{$posts->about}}
        </div>
    </div>
</div>

@endsection