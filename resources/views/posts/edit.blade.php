@extends('layouts.app')
@section('content')

<div class="card">
<div class="card-header">Edit Post</div>

<div class="card-body">
    @if(count($errors) > 0)
        <ul class="list-group">
            @foreach($errors->all() as $error)
                <li class="list-group-item text-danger">{{$error}}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{route('posts.update',[$post->id])}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" value="{{$post->title)}}">
        </div>

        <div class="form-group">
            <label for="about" >Impression</label>
            <br>
            <textarea name="about" class="form-control" rows="5">{{$post->about}}</textarea>
        </div>

        <div class="form-group">
            <label for="about">image</label>
            <input type="file" name="featured" class="form-control-file">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success btn-block">UPDATE</button>
        </div>
    </form>
</div>
</div>
@endsection