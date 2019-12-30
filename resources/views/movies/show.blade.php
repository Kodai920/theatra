@extends('layouts.app')
@section('content')

<div class="card mb-3">
    <div class="card-header">{{$movie->title}}({{$movie->year}}年)</div>
    <div class="card-body">
        <div class="row">
            <div class="col-5">
            <img class="movie-detail-image" src="{{asset("uploads/movies/".$movie->image)}}" width="100%" height="100%" alt="{{$movie->title}}">
            </div>
            <div class="col-7">
                <ul class="mt-3 pl-0 movie-detail-info">
                    <li class="mb-2"><strong>制作国 : </strong><a href="#
                        {{-- {{route('countries.show',[$country->id])}} --}}
                        ">{{$movie->country->name}}</a></li>
                    <li class="mb-2"><strong>ジャンル : </strong>
                        @foreach($movie->categories as $category)
                        <a href="#
                        {{-- {{route('categories.show',[$category->id])}} --}}
                        ">
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
                @if(Auth::check())
                <a href="
                {{-- @if(User::has('review',['id' => $movie->id]))
                {{route('reviews.edit',[$review->id])}}
                @else --}}
                {{route('review.create',['id' => $movie->id])}}
                {{-- @endif --}}
                " class="btn btn-success btn-block btn-lg">レビューを書く</a>
                @endif
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
    </div>
</div>

@if($movie->reviews->count() > 0)
@foreach($movie->reviews->sortByDesc('created_at') as $review)
<div class="card mb-2">
    <div class="card-header">{{$review->user->name}}の感想・評価
        @if(Auth::user()->admin)
            <li class="nav-item dropdown float-right" style="list-style:none;">
                <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    <i class="fas fa-cog"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <form action="{{route('reviews.destroy',[$review->id])}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="dropdown-toggle btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onclick="return confirm('本当に削除しますか？')">削除</button>
                        </form>
                </div>
            </li>
        @endif
    </div>
    <div class="card-body pt-0">
    　 <div class="row">
        <div class="col-2">
            <img src="{{asset($review->user->profile->avator)}}" style="height:80px; width:80px;">
        </div>
        <div class="col-4 mt-2">
            <strong>投稿日 : </strong>{{$review->created_at->format('Y年m月d日')}}<br>
            <strong>評価 : </strong><i class="fas fa-star"></i> {{$review->star}}
        </div>
    </div>
    <div class="mt-2">
        {{$review->impression}}
    </div>
    </div>
</div>
@endforeach
@else
<div class="card">
    <div class="card-header">この映画にはレビューがまだありません</div>
    <div class="card-body">
       最初のレビューを書こう！
    </div>
</div>
@endif

@endsection