@extends('layouts.app')
@section('content')

<div class="card">
<div class="card-header">編集</div>

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
        @method('PUT')
        <div class="form-group">
            <label for="title">タイトル</label>
            <input type="text" name="title" class="form-control" value="{{$post->title}}">
        </div>

        <div class="form-group">
            <label for="excerpt">抜粋</label>
            <br>
            <textarea name="excerpt" class="form-control" rows="5">{{$post->excerpt}}</textarea>
        </div>

        <div class="form-group">
            <label for="about">記事</label>
            <br>
            <textarea name="about" class="form-control" rows="30">{{$post->about}}</textarea>
        </div>

        <div class="form-group">
            <label for="about">アイキャッチ</label>
            <input type="file" name="featured" class="form-control-file">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success btn-block">更新</button>
        </div>
    </form>
</div>
</div>
@endsection