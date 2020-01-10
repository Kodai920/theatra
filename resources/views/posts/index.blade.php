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
          <img src="{{asset("uploads/posts/".$post->featured_img)}}" width="80%" height="100px">
        </div><br>
        <div>
            {{$post->excerpt}}
        </div>
        <div>
          <a href="" class="btn btn-light text-center mx-auto">Read More</a>
        </div>
    </div>
</div>
</div>
@endforeach

@endsection