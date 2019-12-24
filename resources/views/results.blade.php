@extends('layouts.app')
@section('content')

<!-- Stunning Header -->

<div class="stunning-header stunning-header-bg-lightviolet">
    <div class="stunning-header-content">
        <h1 class="stunning-header-title">Search results: {{$query}} </h1>
    </div>
</div>

<!-- End Stunning Header -->
<!-- Post Details -->

<div class="container">
    <div class="row medium-padding120">
        <main class="main">

            <div class="row">
                        <div class="case-item-wrap">
                            @if(count($movies) > 0)
                            @foreach($movies as $movie)
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="case-item">
                                    <div class="case-item__thumb">
                                        <a href="{{route('movies.show',[$movie->id])}}" class="float-left m-4">
                                        <img src="{{asset("uploads/movies/".$movie->image)}}" width="210px" height="300px" alt="{{$movie->title}}">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @else
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <h3 class="text-center">該当する項目はありません。</h3>
                                </div>
                            @endif
                    </div>
            </div>

            <!-- End Post Details -->
        </main>
    </div>
</div>

@endsection