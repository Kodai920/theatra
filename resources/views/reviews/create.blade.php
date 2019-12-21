<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('', 'Theatra') }}</title>

    <!-- Scripts -->
    <script src="{{ secure_asset('js/app.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Bebas+Neue&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap-star-rating/star-rating.css" media="all" rel="stylesheet" type="text/css"/>

</head>
<body>
    <div id="app">
    @include('inc.navbar')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-3">
                @if(Auth::check())
                <ul class="list-group">
                    <li class="list-group-item">
                        <a href="{{route('home')}}">ホーム</a>
                    </li>
                    <li class="list-group-item">
                        <a href="{{route('posts.index')}}">投稿</a>
                    </li>
                    <li class="list-group-item">
                        <a href="{{route('posts.create')}}">新しい投稿をする</a>
                    </li>
                    <li class="list-group-item">
                        <a href="{{route('categories.index')}}">カテゴリ</a>
                    </li>
                    <li class="list-group-item">
                        <a href="{{route('movies.index')}}">映画</a>
                    </li>
                </ul>
                @endif
            </div>
            <div class="col-md-9">
                    <div class="card">
                    <div class="card-header">レビュー</div>
                    <div class="card-body">
                        @if(count($errors) > 0)
                            <ul class="list-group">
                                @foreach($errors->all() as $error)
                                    <li class="list-group-item text-danger">{{$error}}</li>
                                @endforeach
                            </ul>
                        @endif
                        <form action="#" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="about">感想</label>
                                <br>
                                <textarea name="about" class="form-control" rows="5"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">評価</label>
                                <input id="star-rating-demo" value="4" type="number" class="rating" min=0 max=5 step=0.1 data-size="lg">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-block">投稿</button>
                            </div>
                        </form>
                    </div>
                    </div>
            </div>
        </div>
    </div>
    @include('inc.footer')
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="js/bootstrap-star-rating/star-rating.js" type="text/javascript"></script>
    <script>
        @if(Session::has('success'))
        toastr.success(" {{Session::get('success')}} ")
        @endif
        @if(Session::has('info'))
        toastr.info(" {{Session::get('info')}} ")
        @endif
    </script>
</body>
</html>
