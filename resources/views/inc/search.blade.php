{{-- 検索フォーム --}}
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <form class="form-inline">
                <div class="form-group">
                    <input type="text" name="keyword" value="{{$keyword}}"
                    placeholder="タイトル、カテゴリ、または製作国を入力">
                    <input type="submit" value="検索">
                </div>
            </form>
        </div>
    </div>
</div>

{{-- 映画の表示 --}}
<div class="container">
    @if(count($movies) > 0)
    <div class="row">
    @foreach($movies as $movie)
        <div id="movie-image">
        <a href="{{route('movies.show',[$movie->id])}}" class="float-left m-4">
        <img src="{{asset("uploads/movies/".$movie->image)}}" width="210px" height="300px" alt="{{$movie->title}}">
        </a>
        </div>
    @endforeach
    </div>
    @endif
</div>