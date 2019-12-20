@extends('layouts.app')
@section('content')

<div class="card">
    <div class="card-header">{{$movie->title}}({{$movie->year}}年)</div>
    <div class="card-body">
        <div class="row">
            <div class="col-5">
            <img class="movie-detail-image" src="{{asset("uploads/movies/".$movie->image)}}" width="100%" height="100%" alt="{{$movie->title}}">
            </div>
            <div class="col-7">
                <ul class="mt-3 pl-0 movie-detail-info">
                    <li class="mb-2"><strong>制作国 : </strong><a href="#">{{$movie->country->name}}</a></li>
                    <li class="mb-2"><strong>ジャンル : </strong>
                        @foreach($movie->categories as $category)
                        <a href="#">
                        {{$category->name}}
                        </a>
                        @endforeach
                    </li>
                    <li><strong>上映時間 : </strong>{{$movie->time}}分</li>
                </ul>
                <div class="my-5">
                <h3>あらすじ</h3>
                <p>{{$movie->about}}</p>
                </div>
                <a href="#" class="btn btn-success btn-block btn-lg">レビューを書く</a>
            </div>
        </div>

        <div class="row my-5">
        <div class="col-5">
            <h3>制作</h3>
            <div><strong>監督 : </strong>{{$movie->director}} </div>
            <div><strong>脚本 : </strong>{{$movie->writer}} </div>
            <div><strong>キャスト : </strong>{{$movie->cast}} </div>
        </div>
        </div>
        <div>
            @include('inc.disqus')
        </div>
</div>

@endsection