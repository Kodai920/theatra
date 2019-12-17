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
            <a href="{{ route('register') }}" class="btn btn-lg btn-register">いますぐ始める</a>
        </div>
        <div class="my-5">
            <h2 class="text-center">THEATRAとは</h2>
            <p class="text-center my-3 explain">NETFLIXに特化したレビュー投稿サイトです。NETFLIXの映画やドラマを検索したり、記録したりできます。</p>
        </div>
        <div class="container">
            <h2 class="text-center my-3">主な機能</h2>
            <div class="row">
                <div class="col-4 icons">
                    <img src="サーチアイコン.png" alt="">
                    <p class="function my-3">好きな映画・ドラマが見つかる検索機能</p>
                </div>
                <div class="col-4 icons">
                    <img src="記事アイコン1.png" alt="">
                    <p class="function my-3">あなたの感想・評価を記録できる</p>
                </div>
                <div class="col-4 icons">
                    <img src="フリーのドル袋アイコン（円）.png" alt="">
                    <p class="function my-3">どれだけ投稿しても完全無料</p>
                </div>
            </div>
        </div>
        <hr width="75%" color="#131313">
    </div>
    @include('inc.footer')
    </div>
</body>
</html>
