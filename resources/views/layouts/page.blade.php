<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('','最高のNetflixライフを。| Theatra') }}</title>

    <!-- Scripts -->
    <script src="{{ secure_asset('js/app.js') }}"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    @if(env('APP_ENV') == 'production')
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-156411610-1"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-156411610-1');
        </script>
    @endif

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kosugi+Maru&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ secure_asset('css/manage.css') }}" rel="stylesheet">
    <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">
    @include('inc.navbar')
    @include('inc.search')
    <div class="admin-image">
        <h1 class="admin-text">管理画面</h1>
    </div>
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-3 mb-3">
                <ul class="list-group border border-secondary">
                    <li class="list-group-item admin-title">
                        <h3>管理画面</h3>
                    </li>
                    <li class="list-group-item admin-item">
                        <a href="{{route('manage')}}">ダッシュボード</a>
                    </li>
                    <li class="list-group-item admin-item">
                        <a href="{{route('member')}}">会員情報</a>
                    </li>
                    <li class="list-group-item admin-item">
                        <a href="{{route('info')}}">映画情報</a>
                    </li>
                    <li class="list-group-item admin-item">
                        <a href="{{route('movies.create')}}">映画追加</a>
                    </li>
                    <li class="list-group-item admin-item">
                        <a href="{{route('blog')}}">ブログ一覧</a>
                    </li>
                    <li class="list-group-item admin-item">
                        <a href="{{route('posts.create')}}">ブログ投稿</a>
                    </li>
                    <li class="list-group-item admin-item">
                        <a href="{{route('categories.create')}}">カテゴリ追加</a>
                    </li>
                    <li class="list-group-item admin-item">
                        <a href="{{route('countries.create')}}">製作国追加</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-9 mb-3">
                @yield('page')
            </div>
        </div>
    </div>
    @include('inc.footer')
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
</body>
</html>