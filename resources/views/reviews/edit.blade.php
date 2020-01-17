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

    <!-- Global site tag (gtag.js) - Google Analytics -->
    @if(env('APP_ENV') == 'development')
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


    <!-- Styles -->
    <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ secure_asset('css/custom.css') }}" rel="stylesheet">
    <link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.6/css/star-rating.min.css" media="all" rel="stylesheet" type="text/css" />

</head>
<body>
    <div id="app">
    @include('inc.navbar')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-10">

<div class="card">
<div class="card-header">レビューの編集
    <div class="float-right">
        <form action="{{route('reviews.destroy',[$review->id])}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-secondary" onclick="return confirm('本当に削除しますか？')"><i class="fas fa-trash-alt"></i></button>
        </form>
    </div>
</div>
<div class="card-body">
    @if(count($errors) > 0)
        <ul class="list-group">
            @foreach($errors->all() as $error)
                <li class="list-group-item text-danger">{{$error}}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{route('reviews.update',[$review->id])}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="impression">感想</label>
            <br>
            <textarea name="impression" class="form-control" rows="5">{{$review->impression}}</textarea>
        </div>

        <div class="form-group">
            <label for="star">評価</label>
            <input name="star" id="star-rating-demo" value="{{$review->star}}" type="number" class="rating" min=0 max=5.0 step=0.1 data-size="lg">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success btn-block">更新</button>
        </div>
    </form>
</div>
</div>
</div>
</div>
</div>
@include('inc.footer')
</div>
<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.6/js/star-rating.min.js" type="text/javascript"></script>
</body>
</html>

