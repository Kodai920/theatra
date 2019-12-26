<nav class="navbar navbar-expand-md navbar-light" style="background-color:#616161;">
    <div class="container">
    <form method="GET" action="{{route('search.results')}}" class="ml-auto">
        @csrf
        <div class="float-left mt-2">
            <label><input class="mx-1" type="radio" name="search" value="movie" checked>タイトル</label>
            <label><input class="mx-1" type="radio" name="search" value="category">カテゴリ</label>
            <label><input class="mx-1" type="radio" name="search" value="country">製作国</label>
        </div>
        <div class="ml-3 float-left search_container">
            <input name='title' style="background-color:#E5E5E5;" placeholder="キーワードを入力"　size="25" type="text">
            <input type="submit" value="&#xf002">
        </div>
    </form>
    </div>
</nav>