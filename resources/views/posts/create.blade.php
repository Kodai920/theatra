@extends('layouts.page')
@section('page')

<div class="card">
<div class="card-header">記事作成</div>

<div class="card-body">
    @if(count($errors) > 0)
        <ul class="list-group">
            @foreach($errors->all() as $error)
                <li class="list-group-item text-danger">{{$error}}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{route('posts.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">タイトル</label>
            <input type="text" name="title" class="form-control">
        </div>

        <div class="form-group">
            <label for="excerpt">抜粋</label>
            <br>
            <textarea name="excerpt" class="form-control" rows="5"></textarea>
        </div>

        <div class="form-group">
            <label for="about">記事</label>
            <br>
            <textarea name="about" class="form-control" rows="30"></textarea>
        </div>

        <div class="form-group">
            <label for="about">アイキャッチ</label>
            <input type="file" name="featured" class="form-control-file">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success btn-block">投稿</button>
        </div>
    </form>
</div>
</div>
@endsection