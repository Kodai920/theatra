@extends('layouts.app')
@section('content')

@foreach($posts as $post)
<div class="card">
    <div class="card-body">
            {{$post->created_at->format(yyyy/mm/dd)}}
            {{$post->title}}
            <img src="{{asset("uploads/posts/".$post->featured_img)}}" width="80px" height="80px"></td>

            {{$post->title}}
    </div>
</div>
@endforeach

@endsection