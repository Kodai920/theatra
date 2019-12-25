@extends('layouts.app')
@section('content')

<div class="card">
<div class="card-header">レビュー</div>
<div class="card-body">
    @if(count($errors) > 0)
        <ul class="list-group">
            @foreach($errors->all() as $error)
                <li class="list-group-item text-danger">{{$error}}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{route('reviews.update',[$review->id])}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="about">感想</label>
            <br>
            <textarea name="about" class="form-control" rows="5">{{$review->impression}}</textarea>
        </div>

        <div class="form-group">
            <label for="star">評価</label>
            <input id="star-rating-demo" value="{{$review->star}}" type="number" class="rating" min=0 max=5 step=0.1 data-size="lg">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success btn-block">更新</button>
        </div>
    </form>
</div>
</div>
@endsection
