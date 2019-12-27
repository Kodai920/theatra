<nav class="navbar navbar-expand-md navbar-light" style="background-color:#616161;">
    <div class="container">
    <form method="GET" action="{{route('search.results')}}" class="ml-auto">
        @csrf
        <div class="float-left mt-1 mr-2">
            {{-- <select name="searchby">
                <option value="movie" selected>タイトル</option>
                <option value="category">カテゴリ</option>
                <option value="country">製作国</option>
            </select> --}}
            <input type="radio" name="searchby" id="" value="movie" class="mr-2" checked>タイトル
            <input type="radio" name="searchby" id="" value="category" class="mr-2">カテゴリ
            <input type="radio" name="searchby" id="" value="country" class="mr-2">製作国
        </div>
        <div class="search_container">
            <input name='query' style="background-color:#E5E5E5;" placeholder="キーワードを入力"　size="25" type="text">
            <input type="submit" value="&#xf002">
        </div>
    </form>
    </div>
</nav>