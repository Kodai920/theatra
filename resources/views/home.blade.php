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
        <div class="home-image">
            <h1 class="home-text">お気に入りの映画をみつけよう</h1>
        </div>
        <div class="my-5 ml-5">
            <h2 class="">最近の投稿</h2>
        </div>
        <hr width="75%" color="#131313">
        <div class="my-5 ml-5">
            <h2>映画・ドラマが2000本以上</h2>
            @foreach($movies as $movie)
            <div id="movie-image">
                <a href="{{route('movies.show',[$movie->id])}}" class="float-left m-4">
                <img src="{{asset("uploads/movies/".$movie->image)}}" width="210px" height="300px" alt="{{$movie->title}}">
                </a>
            </div>
        @endforeach
        </div>
        <hr width="75%" color="#131313">
        <div class="my-5 ml-5">
            <h2>ジャンルから検索する</h2>
        </div>
        <hr width="75%" color="#131313">
    </div>
    @include('inc.footer')
    </div>
</body>
</html>
