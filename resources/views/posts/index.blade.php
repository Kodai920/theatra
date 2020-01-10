@extends('layouts.app')
@section('content')

@foreach($posts as $post)
<div class="row">
<div class="card col-md-4">
    <div class="card-body">
        <div>
          {{$post->created_at->format('Y/m/d')}}
        </div>
        <div>
          {{$post->title}}
        </div>
        <div>
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