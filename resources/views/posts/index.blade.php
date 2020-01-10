@extends('layouts.app')
@section('content')

<h1 class="text-center">BLOG</h1>
<div class="row m-3">
@foreach($posts as $post)
<div class="card col-md-5">
    <div class="card-body">
        <div class="text-center" style="color:gray;">
          {{$post->created_at->format('Y/m/d')}}
        </div>
        <div class="text-center">
          <h3>{{$post->title}}</h3>
        </div>
        <div class="my-2">
          <img src="{{asset("uploads/posts/".$post->featured_img)}}" width="100%" height="150px">
        </div><br>
        <div>
            {{$post->excerpt}}
        </div>
        <div class="text-center my-2">
          <a href="#" class="btn btn-secondary text-center">Read More</a>
        </div>
    </div>
</div>
@endforeach
</div>

@endsection