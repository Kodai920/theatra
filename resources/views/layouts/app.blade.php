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
    <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    {{-- Insert below other link, style and script tags --}}
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <div id="app">
    @include('inc.navbar')
    @include('inc.search')
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.6/js/star-rating.min.js" type="text/javascript"></script>

     <script>
        @if(Session::has('success'))
        toastr.success(" {{Session::get('success')}} ")
        @endif
        @if(Session::has('info'))
        toastr.info(" {{Session::get('info')}} ")
        @endif
    </script>
    	<script type="text/javascript">
            $(function(){
                $('.cal-rating').each(function() {
                            
                    $(this).on('change', function() {
                        calcavg();
                    })
                });
                function calcavg() {
                            var total = 0;
                            var avg = 0;
                            
                            $('.cal-rating').each(function() {
                                if (!isNaN(this.value) && this.value.lenght !=0) {
                                    total +=parseFloat(this.value);
                                    // alert(total);
                                }
                            });
                            if (!isNaN(total) && total !=0) {
                                // var txtboxes = $('.cal-rating').length;
                                var txtboxes = 6;
                                Average = parseFloat(total) / 6;
                            }
                            $('#totalMarks').html(total);
                              // Show Average upto 2 decimal places using .toFixed() method.
                            var star = parseFloat(Average.toFixed(2)) * 20;
                            $('.avg-ovral-rtng .rating-stars').css("width", star + "%");
                        }
                    $(".cal-rating, .rating").rating({
                        showClear: false,
                        showCaption: false
                    });
                    // $("#avg-ovral-field").rating({
                    // 	showCaption: false
                    // });
            })
            </script>
</body>
</html>
