@extends('layouts.app')
@section('content')

@foreach($posts as $post)
<div class="card">
    <div class="card-body">
            <td><img src="{{asset("uploads/posts/".$post->featured_img)}}" width="80px" height="80px"></td>
            <td>
                {{$post->title}}
            </td>
    </div>
</div>
@endforeach

@endsection