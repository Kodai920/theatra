@extends('layouts.app')
@section('content')

<div class="card">
<div class="card-header">マイページ</div>
<div class="card-body">

    <div class="wrapper">
        <div class="row">
            <div class="col-6">
                <div></div>
                <div>{{Auth::user()->name}}</div>
                <div>登録日 : {{Auth::user()->created_at->format('Y年m月d日')}}</div>
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

        <div>
            @foreach($reviews as $review)
            @endforeach
        </div>
    </div>

</div>
</div>
@endsection
