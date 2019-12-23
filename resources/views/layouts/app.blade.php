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

</head>
<body>
    <div id="app">
    @include('inc.navbar')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-10">
                @yield('content')
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
