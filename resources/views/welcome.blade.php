@extends('layouts.image')
@section('image')

<div class="wrapper">
    <div class="welcome-image">
        <h1 class="welcome-text">さあ、最高のNETFLIXライフを。</h1>
        <a href="{{ route('register') }}" class="btn btn-lg btn-register">いますぐ始める <i class="fas fa-sign-out-alt"></i></a>
    </div>

    <div class="container mb-5">
        <h2 class="welcome-title">THEATRAとは</h2>
        <div class="row">
            <div class="col-md-6">
                <img class="welcome-photos" src="uploads/welcomes/netflixwel.jpg" alt="">
            </div>
            <div class="col-md-6">
                <p class="function">NETFLIXに特化した、
                    レビュー投稿サイトです。<br>
                    NETFLIXで配信されている映画の検索・感想の投稿が可能です。
                </p>
                <a href="{{ route('login') }}" class="btn btn-lg btn-block btn-welcome">ログインへ <i class="fas fa-sign-out-alt"></i></a>
                <a href="{{ route('register') }}" class="btn btn-lg btn-block btn-welcome">新規登録へ <i class="fas fa-sign-out-alt"></i></a>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <h2 class="welcome-title">THEATRAにできること</h2>
        <div class="row">
                <div class="col-md-6 order-md-2">
                    <img class="welcome-photos" src="uploads/welcomes/cuttool.jpg" alt="">
                </div>
            <div class="col-md-6 order-md-1">
                <div class="icons">
                    <p class="function">＊好きな作品が見つかる検索機能</p>
                </div>
                <div class="icons">
                    <p class="function my-3">＊あなたの感想・評価を記録</p>
                </div>
                <div class="icons">
                    <p class="function my-3">＊どれだけ投稿しても完全無料</p>
                </div>
                <a href="https://www.netflix.com/browse" class="btn btn-lg btn-block btn-welcome" target="_blank">NETFLIXへ <i class="fas fa-sign-out-alt"></i></a>
                <a href="{{ route('movies.index') }}" class="btn btn-lg btn-block btn-welcome">映画一覧へ <i class="fas fa-sign-out-alt"></i></a>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <h2 class="welcome-title">THEATRAの特徴</h2>
        <div class="row">
            <div class="col-md-6">
                <img class="welcome-photos" src="uploads/welcomes/filmtwo.jpg" alt="">
            </div>
            <div class="col-md-6">
                <div class="icons">
                    <p class="function my-3">＊Netflix専門のレビューサイト</p>
                </div>
                <div class="icons">
                    <p class="function my-3">＊多彩なカテゴリから検索</p>
                </div>
                <div class="icons">
                    <p class="function my-3">＊ここだけの人気作品ランキング</p>
                </div>
                <a href="{{ route('categories.index') }}" class="btn btn-lg btn-block btn-welcome">カテゴリ一覧へ <i class="fas fa-sign-out-alt"></i></a>
                <a href="{{ route('countries.index') }}" class="btn btn-lg btn-block btn-welcome">製作国一覧へ <i class="fas fa-sign-out-alt"></i></a>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <h2 class="welcome-title">充実の情報量</h2>
        <div class="row">
                <div class="col-md-6 order-md-2">
                    <img class="welcome-photos" src="uploads/welcomes/snstwitter.jpg" alt="">
                </div>
            <div class="col-md-6 order-md-1">
                <div class="icons">
                    <p class="function">＊Netflix関連の記事更新中</p>
                </div>
                <div class="icons">
                    <p class="function">＊各種SNSでも情報発信</p>
                </div>
                <div class="icons">
                    <p class="function">＊新作や配信終了間際の作品をお知らせ</p>
                </div>
                <a href="{{ route('blog') }}" class="btn btn-lg btn-block btn-welcome">公式ブログへ <i class="fas fa-sign-out-alt"></i></a>
                <a href="#" class="btn btn-lg btn-block btn-welcome" target="_blank">公式Twitterへ <i class="fas fa-sign-out-alt"></i></a>
            </div>
        </div>
    </div>

</div>

@endsection