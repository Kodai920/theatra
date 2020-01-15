@extends('layouts.app')
@section('content')

<div class="card mb-3">
<div class="card-header">マイページ</div>
<div class="card-body">

    <div class="wrapper">
        <div class="row">
            <div class="col-md-6 row">
                <div class="float-left col-3"><img src="{{$user->profile->avator}}" alt="" style="height:80px; width:80px;"></div>
                <div class="mx-3 col-6">
                    <div style="font-size:30px;">{{$user->name}}</div>
                    <div>登録日 : {{$user->created_at->format('Y年m月d日')}}</div>
                    <div>投稿数 : {{$user->reviews->count()}}</div>
                </div>
                <p></p>
                <div class="mt-2 ml-3" style="color:gray;">{{$user->profile->about}}</div>
            </div>
            <div class="col-md-6">
                <div>
                  <a href="{{route('profiles.index')}}" class="btn btn-secondary btn-block">プロフィール編集</a>
                  <div class="twitter my-4">
                    <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-size="large" data-lang="ja" data-show-count="false">Tweet</a>
                  </div>
                </div>
            </div>
        </div>
</div>
</div>
</div>

<div>
    @if($user->reviews->count() > 0)
    @foreach($user->reviews->sortByDesc('created_at') as $review)
    <div class="card mb-2">
            <div class="card-header">{{$review->movie->title}}({{$review->movie->year}}年)のレビュー
                @if(Auth::id())
                    <li class="nav-item dropdown float-right" style="list-style:none;">
                        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <i class="fas fa-cog"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{route('reviews.edit',[$review->id])}}">
                                編集
                            </a>
                        </div>
                    </li>
                @endif
            </div>
            <div class="card-body pt-0">
                <div class="row mt-2">
                <div class="col-3 mx-2" id="movie-imag ">
                    <a href="{{route('movies.show',[$review->movie->id])}}">
                    <img src="{{asset("uploads/movies/".$review->movie->image)}}" class="d-block mx-auto" width="105px" height="150px" alt="{{$review->movie->title}}">
                    </a>
                </div>
                <div class="col-9">
                    <strong>投稿日 : </strong>{{$review->created_at->format('Y年m月d日')}}<br>
                    <strong>評価 : </strong><i class="fas fa-star"></i>{{$review->star}}<br>
                    <div class="mt-2">
                        {{$review->impression}}
                    </div>
                </div>
                </div>
            </div>
        </div>
    @endforeach
    @else
        <div class="card">
            <div class="card-header">まだレビューがありません</div>
            <div class="card-body">
            最初のレビューを書こう！
            </div>
        </div>
    @endif
    </div>
</div>

@endsection