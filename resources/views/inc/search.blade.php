<nav class="navbar navbar-expand-md navbar-light" style="background-color:red;">
    <form method="GET" action=" {{route('search.results')}}">
        @csrf
        <input class="overlay_search-input" name='query' placeholder="タイトル、カテゴリまたは製作国を入力してください" type="text">
        <a href="#" class="overlay_search-close">
            <span></span>
            <span></span>
        </a>
    </form>
</nav>