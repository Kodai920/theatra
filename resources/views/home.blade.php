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
        <div class="container">

        <div class="mt-5 overflow-auto">
            <h2 class="text-center">最近見た映画</h2><br>
            @if($user->reviews->count() > 0)
            @foreach($user->reviews->sortByDesc('created_at') as $review)
            @if($loop->index <= 4)
                <div id="movie-image">
                    <a href="{{route('movies.show',[$review->movie->id])}}" class="float-left m-2">
                    <img src="{{asset("uploads/movies/".$review->movie->image)}}" width="200px" height="285px" alt="{{$review->movie->title}}">
                    </a>
                </div>
            @endif
            @endforeach
            @else
            <div>
                <h4>まだレビューがありません</h4>
            </div>
        @endif
        </div><br>
        <hr color="#131313">

        <div class="mt-5 overflow-auto text-center">
            <h2 class="text-center">最新の映画が200本以上</h2><br>
            @foreach($movies->sortByDesc('year') as $movie)
            @if($loop->index <= 4)
                <div id="movie-image">
                    <a href="{{route('movies.show',[$movie->id])}}" class="float-left m-2">
                    <img src="{{asset("uploads/movies/".$movie->image)}}" width="200px" height="285px" alt="{{$movie->title}}">
                    </a>
                </div>
            @endif
            @endforeach
        </div><br>
        <a href="{{route('movies.index')}}" class="btn btn-block btn-outline-dark mb-2" style="background-color:#E40914;">すべての映画を見る</a><br>
        <hr color="#131313">

        <div class="my-5">
            <h2 class="text-center">ジャンルから作品を探す</h2><br>
            <div class="row">
                <div class="col-4">
                    <div id="movie-image">
                    <a href="{{route('categories.show',['category'=>61])}}">
                    <img class="d-block mx-auto" src="uploads/homes/netflix.jpg" width="300px" height="210px" alt="netflix">
                    </a>
                    </div>
                    <h5 class="text-center mt-2">NETFLIXオリジナル</h5>
                </div>
                <div class="col-4">
                    <div id="movie-image">
                    <a href="{{route('categories.show',['category'=>41])}}">
                    <img class="d-block mx-auto" src="uploads/homes/action.jpg" width="300px" height="210px" alt="netflix">
                    </a>
                    </div>
                    <h5 class="text-center mt-2">アクション</h5>
                </div>
                <div class="col-4">
                    <div id="movie-image">
                    <a href="{{route('categories.show',['category'=>251])}}">
                    <img class="d-block mx-auto" src="uploads/homes/love.jpg" width="300px" height="210px" alt="netflix">
                    </a>
                    </div>
                    <h5 class="text-center mt-2">ラブコメディ</h5>
                </div>
            </div>

            <div class="row">
                <div class="col-4">
                    <div id="movie-image">
                    <a href="{{route('categories.show',['category'=>361])}}">
                    <img class="d-block mx-auto" src="uploads/homes/horror.jpg" width="300px" height="210px" alt="netflix">
                    </a>
                    </div>
                    <h5 class="text-center mt-2">ホラー</h5>
                </div>
                <div class="col-4">
                    <div id="movie-image">
                    <a href="{{route('categories.show',['category'=>51])}}">
                    <img class="d-block mx-auto" src="uploads/homes/humandrama.jpg" width="300px" height="210px" alt="netflix">
                    </a>
                    </div>
                    <h5 class="text-center mt-2">ヒューマンドラマ</h5>
                </div>
                <div class="col-4">
                    <div id="movie-image">
                    <a href="{{route('categories.show',['category'=>241])}}">
                    <img class="d-block mx-auto" src="uploads/homes/comedy.jpg" width="300px" height="210px" alt="netflix">
                    </a>
                    </div>
                    <h5 class="text-center mt-2">コメディ</h5>
                </div>
            </div><br>
            <a href="{{route('categories.index')}}" class="btn btn-block btn-outline-dark" style="background-color:#E40914;">すべてのカテゴリを見る</a>
        </div>
        <hr color="#131313">

        <div class="my-5">
            <h2 class="text-center">製作国から作品を探す</h2><br>
            <div class="row">
                    <div class="col-4">
                        <div id="movie-image">
                        <a href="{{route('countries.show',['country'=>21])}}">
                        <img class="d-block mx-auto" src="uploads/homes/japan.jpg" width="300px" height="210px" alt="netflix">
                        </a>
                        </div>
                        <h5 class="text-center mt-2">日本</h5>
                    </div>
                    <div class="col-4">
                        <div id="movie-image">
                        <a href="{{route('countries.show',['country'=>1])}}">
                        <img class="d-block mx-auto" src="uploads/homes/us.jpg" width="300px" height="210px" alt="netflix">
                        </a>
                        </div>
                        <h5 class="text-center mt-2">アメリカ</h5>
                    </div>
                    <div class="col-4">
                        <div id="movie-image">
                        <a href="{{route('countries.show',['country'=>11])}}">
                        <img class="d-block mx-auto" src="uploads/homes/uk.jpg" width="300px" height="210px" alt="netflix">
                        </a>
                        </div>
                        <h5 class="text-center mt-2">イギリス</h5>
                    </div>
                </div>

                <div class="row">
                    <div class="col-4">
                        <div id="movie-image">
                        <a href="{{route('countries.show',['country'=>41])}}">
                        <img class="d-block mx-auto" src="uploads/homes/france.jpg" width="300px" height="210px" alt="netflix">
                        </a>
                        </div>
                        <h5 class="text-center mt-2">フランス</h5>
                    </div>
                    <div class="col-4">
                        <div id="movie-image">
                        <a href="{{route('countries.show',['country'=>31])}}">
                        <img class="d-block mx-auto" src="uploads/homes/india.jpg" width="300px" height="210px" alt="netflix">
                        </a>
                        </div>
                        <h5 class="text-center mt-2">インド</h5>
                    </div>
                    <div class="col-4">
                        <div id="movie-image">
                        <a href="{{route('countries.show',['country'=>51])}}">
                        <img class="d-block mx-auto" src="uploads/homes/korea.jpg" width="300px" height="210px" alt="netflix">
                        </a>
                        </div>
                        <h5 class="text-center mt-2">韓国</h5>
                    </div>
                </div><br>
                <a href="{{route('countries.index')}}" class="btn btn-block btn-outline-dark" style="background-color:#E40914;">すべての製作国を見る</a>
        </div>
        <hr color="#131313">
    </div>
    </div>
    @include('inc.footer')
    </div>
</body>
</html>
