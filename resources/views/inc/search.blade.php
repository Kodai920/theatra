<nav class="navbar navbar-expand-md navbar-light" style="background-color:#616161;">
    <div class="container">
        <form method="GET" action="{{route('search.results')}}" class="search_container ml-auto">
            @csrf
            <div class="row">
                <div class="col-md-8">
                    <input class="mx-1" type="radio" name="search-box">タイトル
                    <input class="mx-1" type="radio" name="search-box">カテゴリ
                    <input class="mx-1" type="radio" name="search-box">作成国
                </div>
                <div class="col-md-4">
                    <input name='title'  placeholder="キーワードを入力"　size="25" type="text">
                    <input type="submit" value="&#xf002">
                </div>
            </div>
        </form>
    </div>
</nav>