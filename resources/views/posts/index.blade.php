@extends('layouts.app')
@section('content')

@foreach($posts as $post)
<div class="row">
<div class="card col-md-6">
    <div class="card-body">
        <div class="text-center" style="color:gray;">
          {{$post->created_at->format('Y/m/d')}}
        </div>
        <div class="text-center">
          <h2>{{$post->title}}</h2>
        </div>
        <div class="my-2">
          <img src="{{asset("uploads/posts/".$post->featured_img)}}" width="100%" height="150px">
        </div><br>
        <div>
            {{$post->excerpt}}
        </div>
        <div class="mx-0 my-2">
          <a href="" class="btn btn-secondary text-center">Read More</a>
        </div>
    </div>
</div>
</div>
@endforeach

@endsection