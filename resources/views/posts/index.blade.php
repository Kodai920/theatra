@extends('layouts.app')
@section('content')

@foreach($posts as $post)
<div class="row">
<div class="card col-md-4">
    <div class="card-body">
        <div class="text-center">
          {{$post->created_at->format('Y/m/d')}}
        </div>
        <div class="text-center">
          <h3>{{$post->title}}</h3>
        </div>
        <div width="100%">
          <img src="{{asset("uploads/posts/".$post->featured_img)}}" width="80px" height="80px"></td>
        </div>
        <div>
          {{$post->about}}
        </div>
    </div>
</div>
</div>
@endforeach

@endsection