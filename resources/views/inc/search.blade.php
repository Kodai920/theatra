<nav class="navbar navbar-expand-md navbar-light" style="background-color:#616161;">
    <div class="container">
        <form method="GET" action="{{route('search.results')}}" class="ml-auto">
            @csrf
            <div class="row">
                <div class="col-md-6 mt-2">
                    <input class="mx-1" type="radio" name="mr" name="search" checked>タイトル
                    <input class="mx-1" type="radio" name="cr" name="search">カテゴリ
                    <input class="mx-1" type="radio" name="conr" name="search">作成国
                </div>
                <div class="col-md-6 search_container">
                    <input name='query' style="background-color:#E5E5E5" placeholder="キーワードを入力"　size="25" type="text">
                    <input type="submit" value="&#xf002">
                </div>
            </div>
        </form>
    </div>
</nav>