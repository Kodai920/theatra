@extends('layouts.app')
@section('content')

<div class="card">
    <div class="card-header">{{$movie->title}}({{$movie->year}}年)</div>
    <div class="card-body">
        <div class="row">
            <div class="col-5">
            <img src="{{asset("uploads/movies/".$movie->image)}}" width="100%" height="100%" alt="{{$movie->title}}">
            </div>
            <div class="col-7">
                <ul class="mt-3">
                    <li>制作国 : <a href="#">{{$movie->country->name}}</a></li>
                    <li>ジャンル : 
                        @foreach($movie->categories as $category)
                        <a href="#">
                        {{$category->name}} 
                        </a>
                        @endforeach
                    </li>
                    <li>上映時間 : {{$movie->time}}分</li>
                </ul>
                <div class="my-5">
                <h3>あらすじ</h3>
                <p>{{$movie->about}}</p>
                </div>
                <div>
                    <a href="#" class="btn btn-success btn-block btn-lg">レビューを書く</a>
                </div>
            </div>
        </div>

        <div class="row my-5">
        <div class="col-5">
            <h3>制作</h3>
            <div> 監督 : {{$movie->director}} </div>
            <div> 脚本 : {{$movie->writer}} </div>
            <div> キャスト : {{$movie->cast}} </div>
        </div>
        </div>
    </div>
</div>

{{-- <div class="card">
    <div class="card-header">レビュー</div>
    <div class="card-body">
        @foreach($movies as $movie)
        <div id="movie-image">
            <a href="{{route('movies.show',[$movie->id])}}" class="float-left m-4">
            <img src="{{$movie->image}}" width="210px" height="300px" alt="{{$movie->title}}">
            </a>
        </div>
    @endforeach
    </div>
</div> --}}

@endsection