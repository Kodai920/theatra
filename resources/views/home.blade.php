@extends('layouts.image')
@section('image')

<div class="wrapper">
    <div class="home-image">
        <h1 class="home-text">人生を変える映画に出会おう</h1>
    </div>
    <div class="container">

    @if($user->reviews->count() > 0)
    <div class="mt-5 overflow-auto">
        <h2 class="text-center">最近鑑賞した映画</h2><br>
        @foreach($user->reviews->sortByDesc('created_at') as $review)
        @if($loop->index <= 4)
            <div id="movie-image">
                <a href="{{route('movies.show',[$review->movie->id])}}" class="float-left m-3">
                <img src="{{asset("uploads/movies/".$review->movie->image)}}" width="190px" height="285px" alt="{{$review->movie->title}}">
                </a>
            </div>
        @endif
        @endforeach
    </div><br>
    <a href="{{route('reviews.index')}}" class="btn btn-block btn-outline-dark mb-2" style="background-color:#131313; color:#E5E5E5;">マイページへ</a><br>
    <hr color="#131313">
    @endif

    <div class="mt-5 overflow-auto text-center">
    <h2 class="text-center">最新作から名作まで{{$movies->count()}}作品</h2><br>
        @foreach($movies->sortByDesc('year') as $movie)
        @if($loop->index <= 4)
            <div id="movie-image">
                <a href="{{route('movies.show',[$movie->id])}}" class="float-left m-3">
                <img src="{{asset("uploads/movies/".$movie->image)}}" width="190px" height="285px" alt="{{$movie->title}}">
                </a>
            </div>
        @endif
        @endforeach
    </div><br>
    <a href="{{route('movies.index')}}" class="btn btn-block btn-outline-dark mb-2" style="background-color:#131313; color:#E5E5E5;">すべての映画を見る</a><br>
    <hr color="#131313">

    <div class="my-5">
        <h2 class="text-center">ジャンルから作品を探す</h2><br>
        <div class="row">
            <div class="col-md-4">
                <div id="movie-image">
                <a href="{{route('categories.show',['category'=>61])}}">
                <img class="d-block mx-auto" src="uploads/homes/netflix.jpg" width="300px" height="210px" alt="netflix">
                </a>
                </div>
                <h5 class="text-center mt-2">NETFLIXオリジナル</h5>
            </div>
            <div class="col-md-4">
                <div id="movie-image">
                <a href="{{route('categories.show',['category'=>41])}}">
                <img class="d-block mx-auto" src="uploads/homes/action.jpg" width="300px" height="210px" alt="action">
                </a>
                </div>
                <h5 class="text-center mt-2">アクション</h5>
            </div>
            <div class="col-md-4">
                <div id="movie-image">
                <a href="{{route('categories.show',['category'=>251])}}">
                <img class="d-block mx-auto" src="uploads/homes/love.jpg" width="300px" height="210px" alt="love">
                </a>
                </div>
                <h5 class="text-center mt-2">ラブコメディ</h5>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div id="movie-image">
                <a href="{{route('categories.show',['category'=>361])}}">
                <img class="d-block mx-auto" src="uploads/homes/horror.jpg" width="300px" height="210px" alt="horror">
                </a>
                </div>
                <h5 class="text-center mt-2">ホラー</h5>
            </div>
            <div class="col-md-4">
                <div id="movie-image">
                <a href="{{route('categories.show',['category'=>51])}}">
                <img class="d-block mx-auto" src="uploads/homes/humandrama.jpg" width="300px" height="210px" alt="humandrama">
                </a>
                </div>
                <h5 class="text-center mt-2">ヒューマンドラマ</h5>
            </div>
            <div class="col-md-4">
                <div id="movie-image">
                <a href="{{route('categories.show',['category'=>241])}}">
                <img class="d-block mx-auto" src="uploads/homes/comedy.jpg" width="300px" height="210px" alt="comedy">
                </a>
                </div>
                <h5 class="text-center mt-2">コメディ</h5>
            </div>
        </div><br>
        <a href="{{route('categories.index')}}" class="btn btn-block btn-outline-dark" style="background-color:#131313; color:#E5E5E5;">すべてのカテゴリを見る</a>
    </div>
    <hr color="#131313">

    <div class="my-5">
        <h2 class="text-center">製作国から作品を探す</h2><br>
        <div class="row">
                <div class="col-md-4">
                    <div id="movie-image">
                    <a href="{{route('countries.show',['country'=>21])}}">
                    <img class="d-block mx-auto" src="uploads/homes/japan.jpg" width="300px" height="210px" alt="japan">
                    </a>
                    </div>
                    <h5 class="text-center mt-2">日本</h5>
                </div>
                <div class="col-md-4">
                    <div id="movie-image">
                    <a href="{{route('countries.show',['country'=>1])}}">
                    <img class="d-block mx-auto" src="uploads/homes/us.jpg" width="300px" height="210px" alt="us">
                    </a>
                    </div>
                    <h5 class="text-center mt-2">アメリカ</h5>
                </div>
                <div class="col-md-4">
                    <div id="movie-image">
                    <a href="{{route('countries.show',['country'=>11])}}">
                    <img class="d-block mx-auto" src="uploads/homes/uk.jpg" width="300px" height="210px" alt="uk">
                    </a>
                    </div>
                    <h5 class="text-center mt-2">イギリス</h5>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div id="movie-image">
                    <a href="{{route('countries.show',['country'=>41])}}">
                    <img class="d-block mx-auto" src="uploads/homes/france.jpg" width="300px" height="210px" alt="france">
                    </a>
                    </div>
                    <h5 class="text-center mt-2">フランス</h5>
                </div>
                <div class="col-md-4">
                    <div id="movie-image">
                    <a href="{{route('countries.show',['country'=>31])}}">
                    <img class="d-block mx-auto" src="uploads/homes/india.jpg" width="300px" height="210px" alt="india">
                    </a>
                    </div>
                    <h5 class="text-center mt-2">インド</h5>
                </div>
                <div class="col-md-4">
                    <div id="movie-image">
                    <a href="{{route('countries.show',['country'=>51])}}">
                    <img class="d-block mx-auto" src="uploads/homes/korea.jpg" width="300px" height="210px" alt="korea">
                    </a>
                    </div>
                    <h5 class="text-center mt-2">韓国</h5>
                </div>
            </div><br>
            <a href="{{route('countries.index')}}" class="btn btn-block btn-outline-dark" style="background-color:#131313; color:#E5E5E5;">すべての製作国を見る</a>
    </div>
    <hr color="#131313">
    </div>
</div>

@endsection