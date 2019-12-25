<nav class="navbar navbar-expand-md navbar-light" style="background-color:#616161;">
    <form method="GET" action="{{route('search.results')}}" class="search_container mr-auto">
        @csrf
        <input name='query' style="background-color:#E5E5E5;" placeholder="キーワードを入力"　size="25" type="text">
        <input type="submit" value="&#xf002">
    </form>
</nav>