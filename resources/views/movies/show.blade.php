@extends('layouts.app')
@section('styles')
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.6/css/star-rating.min.css" media="all" rel="stylesheet" type="text/css" />
@endsection
@section('content')

{{-- <div class="my-1">
    <a href="{{route('posts.index')}}" class="btn btn-light text-center"><i class="fas fa-arrow-left"></i> Back</a>
</div> --}}
<div class="card mb-3">
    <div class="card-header">{{$movie->title}}({{$movie->year}}年)</div>
    <div class="card-body">
        <div class="row">
            <div class="col-5">
            <img class="movie-detail-image" src="{{asset("uploads/movies/".$movie->image)}}" width="100%" height="100%" alt="{{$movie->title}}">
            </div>
            <div class="col-7">
                <ul class="mt-3 pl-0 movie-detail-info">
                    <li class="mb-2"><strong>制作国 : </strong><a href="{{route('countries.show',[$movie_country->id])}}">{{$movie_country->name}}</a></li>
                    <li class="mb-2"><strong>カテゴリ : </strong>
                        @foreach($movie->categories as $category)
                        <a href="{{route('categories.show',[$category->id])}}">
                        　{{$category->name}}
                        </a>
                        @endforeach
                    </li>
                    <li><strong>上映時間 : </strong>{{$movie->time}}分</li>
                </ul>
                <div class="my-5">
                <h3>あらすじ</h3>
                <p>{{$movie->about}}</p>
                </div>

                <div class="my-5 avg-ovral-rtng">
                    <h3>みんなの評価 : <i class="fas fa-star"></i>
                        @if($movie->reviews->count() > 0)
                        {{ round($movie->reviews->avg('star'),2)}}
                        @else
                        ー
                        @endif
                    </h3>
                </div>

                @if(Auth::check())
                    <a href="{{route('review.create',['id' => $movie->id])}}"
                        class="btn btn-success btn-block btn-lg">レビューを書く</a>
                @endif
            </div>
        </div>

        <div class="row my-5">
        <div class="col-5">
            <h3>制作</h3>
            <div><strong>監督 : </strong>{{$movie->director}} </div>
            <div><strong>脚本 : </strong>{{$movie->writer}} </div>
            <div><strong>主演 : </strong>{{$movie->cast}} </div>
        </div>
        </div>
    </div>
</div>

@if($movie->reviews->count() > 0)
@foreach($movie->reviews->sortByDesc('created_at') as $review)
<div class="card mb-2">
    <div class="card-header">
        {{$review->user->name}}の感想・評価
        @if(Auth::user()->admin)
            <li class="nav-item dropdown float-right" style="list-style:none;">
                <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    <i class="fas fa-cog"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <form action="{{route('reviews.destroy',[$review->id])}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="dropdown-toggle btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onclick="return confirm('本当に削除しますか？')">削除</button>
                        </form>
                </div>
            </li>
        @endif
    </div>
    <div class="card-body pt-0">
    　 <div class="row">
        <div class="col-2">
            <img src="{{asset($review->user->profile->avator)}}" style="height:80px; width:80px;">
        </div>
        <div class="col-4 mt-2">
            <strong>投稿日 : </strong>{{$review->created_at->format('Y年m月d日')}}<br>
            <strong>評価 : </strong><i class="fas fa-star"></i> {{$review->star}}
            <div>
                @if (Auth::user()->is_favorite($review->id))
                    <form action="{{route('favorites.unfavorite', ['id' => $review->id])}}" method="post">
                        @csrf
                        @method('DELETE')
                    <button type="submit" class="button btn-sm btn-success"><i class="far fa-thumbs-up"></I>いいね {{$review->favorite_users->count()}}</button>
                    </form>
                @else
                    <form action="{{route('favorites.favorite', ['id' => $review->id])}}" method="post">
                        @csrf
                        <button type="submit" class="button btn-sm btn-info"><i class="far fa-thumbs-up"></I>いいね {{$review->favorite_users->count()}}</button>
                    </form>
                @endif
            </div>
        </div>
    </div>
    <div class="mt-2">
        {{$review->impression}}
    </div>
    </div>
</div>
@endforeach
@else
<div class="card">
    <div class="card-header">この映画にはレビューがまだありません</div>
    <div class="card-body">
       最初のレビューを書こう！
    </div>
</div>
@endif
<script type="text/javascript">

    $("#input-id").rating();

</script>
@endsection

@section('scripts')

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

@endsection