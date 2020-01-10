@extends('layouts.app')
@section('content')

<h2 class="text-center">BLOG</h2>
<div class="row">
@foreach($posts->sortByDesc('created_at') as $post)
<div class="card col-md-5 mx-4 my-3">
    <div class="card-body">
        <div class="text-center" style="color:gray;">
          {{$post->created_at->format('Y/m/d')}}
        </div>
        <div class="text-center my-3">
          <h3>{{$post->title}}</h3>
        </div>
        <div class="my-2">
          <img src="{{asset("uploads/posts/".$post->featured_img)}}" width="100%" height="150px">
        </div><br>
        <div>
            {{$post->excerpt}}
        </div>
        <div class="text-center my-2">
          <a href="{{route('posts.show',[$post->id])}}" class="btn btn-light text-center border border-dark">Read More</a>
        </div>
    </div>
</div>
@endforeach
</div>

@endsection