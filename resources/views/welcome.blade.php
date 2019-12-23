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

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

</head>
<body>
    <div id="app">
    @include('inc.navbar')
    <div class="wrapper">
        <div class="welcome-image">
            <h1 class="welcome-text">さあ、最高のNETFLIXライフを。</h1>
            <a href="{{ route('register') }}" class="btn btn-lg btn-register">いますぐ始める <i class="fas fa-sign-out-alt"></i></a>
        </div>
        <div class="my-5">
            <h2 class="text-center">THEATRAとは</h2>
            <p class="text-center my-5 function">NETFLIXに特化したレビュー投稿サイトです。<br>NETFLIXの映画やドラマを検索したり、記録したりできます。</p>
        </div>
        <div class="container my-5">
            <h2 class="text-center my-3">THEATRAにできること</h2>
            <div class="row my-5">
                <div class="col-4 text-center icons">
                    <img src="サーチアイコン (2).png" alt="">
                    <p class="function my-3">好きな作品が見つかる検索機能</p>
                </div>
                <div class="col-4 text-center icons">
                    <img src="記事アイコン1 (1).png" alt="">
                    <p class="function my-3">あなたの感想・評価を記録できる</p>
                </div>
                <div class="col-4 text-center icons">
                    <img src="お金を握り締める手のアイコン.png" alt="">
                    <p class="function my-3">どれだけ投稿しても完全無料</p>
                </div>
            </div>
        </div>
        <hr width="75%" color="#131313">

        <div class="container my-5">
            <h2 class="text-center my-3">THEATRAの特徴</h2>
            <div class="row my-5">
                <div class="col-4 text-center icons">
                    <img src="PCでのNETFLIX 無料アイコン素材 3.png" alt="">
                    <p class="function my-3">Netflix専用のレビューサイト</p>
                </div>
                <div class="col-4 text-center icons">
                    <img src="本棚アイコン (1).png" alt="">
                    <p class="function my-3">多彩なカテゴリから検索</p>
                </div>
                <div class="col-4 text-center icons">
                    <img src="ゴージャスな王冠の無料アイコン.png" alt="">
                    <p class="function my-3">ここだけの人気作品ランキング</p>
                </div>
            </div>
        </div>
        <hr width="75%" color="#131313">

        <div class="container my-5">
            <h2 class="text-center my-3">充実の情報量</h2>
            <div class="row my-5">
                <div class="col-6 text-center icons">
                    <img src="BLOGアイコン.png" alt="">
                    <p class="function my-3">Netflix関連の記事更新中</p>
                </div>
                <div class="col-6 text-center icons">
                    <img src="twitterのフリーアイコン素材.png" alt="">
                    <p class="function my-3">各種SNSでも情報発信</p>
                </div>
            </div>
        </div>
        <hr width="75%" color="#131313">
    </div>
    @include('inc.footer')
    </div>
</body>
</html>
