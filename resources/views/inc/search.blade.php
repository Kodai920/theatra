<nav class="navbar navbar-expand-md navbar-light" style="background-color:#616161;">
    <div class="container">
    <form method="GET" action="{{route('search.results')}}" class="search_container ml-auto">
        @csrf
        <input name='title' style="background-color:#E5E5E5;" placeholder="キーワードを入力"　size="25" type="text">
        <input type="submit" value="&#xf002">
    </form>
    </div>
</nav>