@extends('layouts.app')
@section('content')

<div class="card">
<div class="card-header">マイページ</div>
<div class="card-body">

    <div class="wrapper">
        <div class="row">
            <div class="col-6">
                <div class="float-left"><img src="{{$user->profile->avator}}" alt="" style="height:80px; width:80px; border-radious:10%;"></div>
                <div class="float-left mx-3">
                    <div style="font-size:30px;">{{$user->name}}</div>
                    <div>登録日 : {{$user->created_at->format('Y年m月d日')}}</div>
                </div>
            </div>
            <div class="col-6">
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

<div>
        @if($user->reviews->count() > 0)
        @foreach($user->reviews as $review)
        <div class="card mb-2">
                <div class="card-header">{{$review->movie->title}}の感想・評価</div>
                <div class="card-body pt-0">
                　 <div class="row">
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
                <div class="card-header">THEATRAにご登録いただきありがとうございます</div>
                <div class="card-body">
                最初のレビューを書こう！
                </div>
            </div>
        @endif
    </div>
</div>

@endsection
