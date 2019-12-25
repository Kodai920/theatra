<nav class="navbar navbar-expand-md navbar-light" style="background-color:#616161;">
    <form method="GET" action="{{route('search.results')}}" class="search_container">
        @csrf
        <input name='query' placeholder="タイトル、カテゴリまたは製作国を入力してください" type="text">
        <input type="submit" value="検索">
    </form>
</nav>