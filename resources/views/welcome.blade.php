<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('', 'Theatra') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Sawarabi+Gothic&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ secure_asset('css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

</head>
<body>
    <div id="app">
    @include('inc.navbar')
    @include('inc.search')
    <div class="wrapper">
        <div class="welcome-image">
            <h1 class="welcome-text">さあ、最高のNETFLIXライフを。</h1>
            <a href="{{ route('register') }}" class="btn btn-lg btn-register">いますぐ始める <i class="fas fa-sign-out-alt"></i></a>
        </div>

        <div class="mt-5 justify-content-center overflow-auto text-center" width="90%" >
            @foreach($movies->sortByDesc('year') as $movie)
            @if($loop->index <= 8)
                <div id="movie-image">
                    <a href="{{route('movies.show',[$movie->id])}}" class="float-left m-2">
                    <img src="{{asset("uploads/movies/".$movie->image)}}" class="welcome-movie" alt="{{$movie->title}}">
                    </a>
                </div>
            @endif
            @endforeach
        </div>

        <div>
            <div class="container">
                <h2 class="welcome-title">THEATRAとは</h2>
                <p class="function">NETFLIXに特化したレビュー投稿サイトです。<br>NETFLIXで配信されている映画の検索・感想の投稿が可能です。</p>
            </div>
        </div>

        <div class="container">
            <h2 class="welcome-title">THEATRAにできること</h2>
            <div class="row">
                <div class="col-md-4 icons">
                    <img src="サーチアイコン (2).png" alt="">
                    <p class="function">好きな作品が見つかる検索機能</p>
                </div>
                <div class="col-md-4 icons">
                    <img src="記事アイコン1 (1).png" alt="">
                    <p class="function my-3">あなたの感想・評価を記録</p>
                </div>
                <div class="col-md-4 icons">
                    <img src="お金を握り締める手のアイコン.png" alt="">
                    <p class="function my-3">どれだけ投稿しても完全無料</p>
                </div>
            </div>
        </div>

        <div class="container">
            <h2 class="welcome-title">THEATRAの特徴</h2>
            <div class="row">
                <div class="col-md-4 icons">
                    <img src="PCでのNETFLIX 無料アイコン素材 3.png" alt="">
                    <p class="function my-3">Netflix専門のレビューサイト</p>
                </div>
                <div class="col-md-4 icons">
                    <img src="本棚アイコン (1).png" alt="">
                    <p class="function my-3">多彩なカテゴリから検索</p>
                </div>
                <div class="col-md-4 icons">
                    <img src="ゴージャスな王冠の無料アイコン.png" alt="">
                    <p class="function my-3">ここだけの人気作品ランキング</p>
                </div>
            </div>
        </div>

        <div class="container my-5">
            <h2 class="welcome-title">充実の情報量</h2>
            <div class="row">
                <div class="col-md-6 icons">
                    <img src="BLOGアイコン.png" alt="">
                    <p class="function">Netflix関連の記事更新中</p>
                </div>
                <div class="col-md-6 icons">
                    <img src="twitterのフリーアイコン素材.png" alt="">
                    <p class="function">各種SNSでも情報発信</p>
                </div>
            </div>
        </div>
    </div>
    @include('inc.footer')
    </div>
</body>
</html>
