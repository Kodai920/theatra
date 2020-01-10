@extends('layouts.app')
@section('content')

@foreach($posts as $post)
<div>
<div class="card">
    <div class="card-body">
            {{$post->created_at->format(Y/m/d)}}
            {{$post->title}}
            <img src="{{asset("uploads/posts/".$post->featured_img)}}" width="80px" height="80px"></td>
            {{$post->about}}
    </div>
</div>
</div>
@endforeach

@endsection