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
    <link href="https://fonts.googleapis.com/css?family=Sawarabi+Mincho&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

</head>
<body>
    <div id="app">
    @include('inc.navbar')
    @include('inc.search')
    <div class="wrapper">
        <div class="home-image">
            <h1 class="home-text">Yogee New Waves</h1>
        </div>
        <div class="my-5">
            <h2 class="text-center">最近の投稿</h2>
        </div>
        <hr width="80%" color="#131313">
        <div class="my-5">
            <h2 class="text-center">映画・ドラマが2000本以上</h2>
        </div>
        <hr width="80%" color="#131313">
        <div class="my-5">
            <h2 class="text-center">ジャンルで作品を探す</h2>
            <div class="row-9">
                <div class="col-3 text-center">
                    <img src="uploads/homes/netflix.jpg" width="300px" height="210px" alt="netflix">
                    <h5 class="text-center">NETFLIXオリジナル</h5>
                </div>
                <div class="col-3 text-center">
                    <img src="uploads/homes/netflix.jpg" width="300px" height="210px" alt="netflix">
                    <h5 class="text-center">NETFLIXオリジナル</h5>
                </div>
                <div class="col-3 text-center">
                    <img src="uploads/homes/netflix.jpg" width="300px" height="210px" alt="netflix">
                    <h5 class="text-center">NETFLIXオリジナル</h5>
                </div>
                <div class="col-3">

                </div>
                <div class="col-3">

                </div>
            </div>
        </div>
        <hr width="80%" color="#131313">
        <div class="my-5">
            <h2 class="text-center">製作国から作品を探す</h2>
        </div>
        <hr width="80%" color="#131313">
    </div>
    @include('inc.footer')
    </div>
</body>
</html>
