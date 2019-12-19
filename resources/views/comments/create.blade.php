@extends('layouts.app')
@section('content')

<div class="card">
<div class="card-header">のレビュー</div>

<div class="card-body">
    @if(count($errors) > 0)
        <ul class="list-group">
            @foreach($errors->all() as $error)
                <li class="list-group-item text-danger">{{$error}}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{route('comments.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="about">感想</label>
            <br>
            <textarea name="about" class="form-control" rows="5"></textarea>
        </div>

        <div class="range-group form-group">
            <input type="range" min="1" max="5" value="" class="input-range" />>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success btn-block">投稿</button>
        </div>
    </form>
</div>
</div>
@endsection