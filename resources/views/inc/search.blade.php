<nav class="navbar navbar-expand-md navbar-light" style="background-color:#616161;">
    <div class="container">
    <form method="GET" action="{{route('search.results')}}" class="ml-auto">
        @csrf
        <div class="float-right mt-2">
            <input class="mx-1" type="radio" name="search" value="movie">タイトル
            <input class="mx-1" type="radio" name="search" value="category">カテゴリ
            <input class="mx-1" type="radio" name="search" value="country">作成国
        </div>
        <div class="search_container ml-3">
            <input name='query' style="background-color:#E5E5E5;" placeholder="キーワードを入力"　size="25" type="text">
            <input type="submit" value="&#xf002">
        </div>
    </form>
    </div>
</nav>