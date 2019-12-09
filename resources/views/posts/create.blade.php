@extends('layouts.app')
@section('content')

<div class="card">
    <div class="card-header">{{isset($post) ? 'Create Post' : 'Edit Post'}}</div>

    <div class="card-body">
        @if(count($errors) > 0)
        <ul class="list-group">
            @foreach($errors->all() as $error)
            <li class="list-group-item text-danger"> {{$error}} </li>
            @endforeach
        </ul>
        @endif

        <form action="{{isset($post) ? route('posts.store') : route('posts.update',['id'=>$post->id])}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" value="{{isset($posts) ? '' : $post->name}} ">
            </div>

            <div class="form-group">
                <label for="about">Impression</label>
                <textarea name="about" cols="30" rows="10">{{isset($posts) ? '':$post->about}} </textarea>
            </div>

            <div class="form-group">
                <label for="description">Featured image</label>
                <input type="file" name="featured" class="form-control-file">
            </div>

            <div class="form-group">
                <button class="btn btn-success btn-block" type="submit">{{isset($posts) ?'Store Post' : 'Update Post' }} </button>
            </div>
        </form>
    </div>
</div>

@endsection