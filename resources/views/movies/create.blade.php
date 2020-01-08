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
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">


    <!-- Styles -->
    <link href="{{ secure_asset('css/custom.css') }}" rel="stylesheet">
    <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

</head>
<body>
    <div id="app">
    @include('inc.navbar')
    @include('inc.search')
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-3 mb-5">
                <ul class="list-group">
                    <li class="list-group-item">
                        <a href="{{route('manage')}}">ダッシュボード</a>
                    </li>
                    <li class="list-group-item">
                        <a href="#">会員情報</a>
                    </li>
                    <li class="list-group-item">
                        <a href="#">映画情報</a>
                    </li>
                    <li class="list-group-item">
                        <a href="{{ route('movies.create') }}">映画追加</a>
                    </li>
                    <li class="list-group-item">
                        <a href="#">ブログ投稿</a>
                    </li>
                    <li class="list-group-item">
                        <a href="{{route('categories.create')}}">カテゴリ追加</a>
                    </li>
                    <li class="list-group-item">
                        <a href="{{route('countries.create')}}">製作国追加</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-9 mb-3">
                <div class="card">
                            <div class="card-header">映画のデータ作成</div>

                            <div class="card-body">
                                @if(count($errors) > 0)
                                <ul class="list-group">
                                    @foreach($errors->all() as $error)
                                    <li class="list-group-item text-danger"> {{$error}} </li>
                                    @endforeach
                                </ul>
                                @endif

                                <form action="{{route('movies.store')}}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="title">タイトル</label>
                                        <input type="text" name="title" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="about">あらすじ</label>
                                        <textarea name="about" cols="30" rows="10" placeholder="あらすじを記入" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="year">製作年</label>
                                        <input type="number" name="year" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="time">上映時間</label>
                                        <input type="number" name="time" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="director">監督</label>
                                        <input type="text" name="director" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="writer">脚本</label>
                                        <input type="text" name="writer" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="cast">主演</label>
                                        <input type="text" name="cast" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="country_id">製作国</label>
                                        <select name="country_id" id="">
                                            @foreach($countries as $country)
                                                <option value="{{$country->id}}">{{$country->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-success btn-block" type="submit">
                                        　　追加
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
    @include('inc.footer')
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
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