@extends('layouts.page')
@section('page')

<div class="card mb-3">
        <div class="card-header">ダッシュボード</div>

        <div class="card-body">
                <div class="row">
                <div class="col-md-3 dash-count">会員数 : {{$user->count()}}</div>
                <div class="col-md-3 dash-count">投稿数 : {{$reviews->count()}}</div>
                <div class="col-md-3 dash-count">映画数 : {{$movies->count()}}</div>
                <div class="col-md-3 dash-count">カテゴリ数 : {{$category->count()}}</div>
                <div class="col-md-3 dash-count">製作国数 : {{$country->count()}}</div>
                <div class="col-md-3 dash-count">記事数 : {{$posts->count()}}</div>
                </div>
        </div>
</div>

<div class="card mb-3">
        <div class="card-header">最近の投稿</div>
        <div class="card-body">
                <div class="row">
                        @foreach($posts->sortByDesc('created_at') as $post)
                        @if($loop->index <= 1)
                        <div class="card col-md-5 mx-4 my-3">
                                <div class="card-body">
                                <div class="text-center" style="color:gray;">
                                        {{$post->created_at->format('Y/m/d')}}
                                </div>
                                <div class="text-center my-3">
                                        <h3>{{$post->title}}</h3>
                                </div>
                                <div class="my-2">
                                        <img src="{{asset("uploads/posts/".$post->featured_img)}}" width="100%" height="150px">
                                </div><br>
                                <div>
                                        {{$post->excerpt}}
                                </div>
                                <div class="text-center my-2">
                                        <a href="{{route('posts.show',[$post->id])}}" class="btn btn-light text-center border border-dark">Read More</a>
                                </div>
                                </div>
                        </div>
                        @endif
                        @endforeach
                </div>
        </div>
</div>


<div class="card mb-3">
        <div class="card-header">お問い合わせ</div>

        <div class="card-body">
        <div class="row">
                @foreach($posts->sortByDesc('created_at') as $post)
                @if($loop->index <= 1)
                <div class="card col-md-5 mx-4 my-3">
                        <div class="card-body">
                        <div class="text-center" style="color:gray;">
                                {{$post->created_at->format('Y/m/d')}}
                        </div>
                        <div class="text-center my-3">
                                <h3>{{$post->title}}</h3>
                        </div>
                        <div class="my-2">
                                <img src="{{asset("uploads/posts/".$post->featured_img)}}" width="100%" height="150px">
                        </div><br>
                        <div>
                                {{$post->excerpt}}
                        </div>
                        <div class="text-center my-2">
                                <a href="{{route('posts.show',[$post->id])}}" class="btn btn-light text-center border border-dark">Read More</a>
                        </div>
                        </div>
                </div>
                @endif
                @endforeach
        </div>
        </div>
</div>





@endsection