
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
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Sawarabi+Gothic&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ secure_asset('css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

</head>
<body>
    <div id="app">
    @include('inc.navbar')
    @include('inc.search')

<div class="country-image">
    <h1 class="ranking-text">製作国</h1>
</div>

<div class="container">

        <div class="card">
                <div class="card-header">製作国一覧</div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <th>国名</th>
                            <th></th>
                        </thead>
                        <tbody>
                            @if($countries->count() > 0)
                            @foreach ($countries->sortBy('name') as $country)
                            <tr>
                            <td>
                                <a href="{{route('countries.show',[$country->id])}}">
                                    {{$country->name}}
                                </a>
                                <p class="float-right">( {{$country->movies->count()}} )</p>
                            </td>
                            {{-- @if(Auth::user()->admin)
                            <td>
                                <a href=" {{route('countries.edit',[$country->id])}} " class="btn btn-info">Edit</a>
                            </td>
                            <td>
                                <form action="{{route('countries.destroy',[$country->id])}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            </td>
                            @endif --}}
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <td colspan=2>登録されている製作国がありません</td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>

</div>

    @include('inc.footer')
    </div>
</body>
</html>
