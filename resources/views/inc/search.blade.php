<nav class="navbar navbar-expand-md navbar-light" style="background-color:#616161;">
    <div class="container">
    <form method="GET" action="{{route('search.results')}}" class="ml-auto">
        @csrf
        <div class="float-left mt-2 mr-2">
            <select>
                <option name="movie" value="movie">タイトル</option>
                <option name="category" value="category">カテゴリ</option>
                <option name="country" value="country">製作国</option>
            </select>
        </div>
        <div class="search_container">
            <input name='query' style="background-color:#E5E5E5;" placeholder="キーワードを入力"　size="25" type="text">
            <input type="submit" value="&#xf002">
        </div>
    </form>
    </div>
</nav>