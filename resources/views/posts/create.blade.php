@extends('layouts.app')
@section('content')

<div class="card">
    <div class="card-header">{{isset($posts) ? 'Create Post' : 'Edit Post'}}</div>

    <div class="card-body">
        @if(count($errors) > 0)
        <ul class="list-group">
            @foreach($errors->all() as $error)
            <li class="list-group-item text-danger"> {{$error}} </li>
            @endforeach
        </ul>
        @endif

        <form action="{{isset($post) ? route('posts.store') : route('posts.update',['id'=>$post->id])}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" value="{{isset($posts) ? '' : $post->title}} ">
            </div>

            <div class="form-group">
                <label for="about">Impression</label>
                <textarea name="about" cols="30" rows="10" class="form-control">{{isset($posts) ? '' : $post->about}}</textarea>
            </div>

            <div class="form-group">
                <label for="about">Featured image</label>
                <input type="file" name="featured" class="form-control-file">
            </div>

            <div class="form-group">
                <button class="btn btn-success btn-block" type="submit">{{isset($posts) ?'Store Post' : 'Update Post'}} </button>
            </div>
        </form>
    </div>
</div>

@endsection