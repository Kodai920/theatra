@extends('layouts.app')
@section('content')

@foreach($posts as $post)
<div class="row">
<div class="card col-md-4">
    <div class="card-body">
        <div class="text-center" style="color:#131313;">
          {{$post->created_at->format('Y/m/d')}}
        </div>
        <div class="text-center">
          <h3>{{$post->title}}</h3>
        </div>
        <div style="width:100%; height:100px;">
          <img src="{{asset("uploads/posts/".$post->featured_img)}}">
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