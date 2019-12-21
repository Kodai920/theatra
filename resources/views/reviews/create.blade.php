@extends('layouts.app')
@section('content')

<div class="card">
<div class="card-header">{{$review->movie->title}}({{$review->movie->year}}年)のレビュー</div>

<div class="card-body">
    @if(count($errors) > 0)
        <ul class="list-group">
            @foreach($errors->all() as $error)
                <li class="list-group-item text-danger">{{$error}}</li>
            @endforeach
        </ul>
    @endif

    <form action="#" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="about">感想</label>
            <br>
            <textarea name="about" class="form-control" rows="5"></textarea>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success btn-block">投稿</button>
        </div>
    </form>
</div>
</div>
@endsection