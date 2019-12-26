<nav class="navbar navbar-expand-md navbar-light" style="background-color:#616161;">
    <div class="container">
        <form method="GET" action="{{route('search.results')}}" class="ml-auto">
            @csrf
            <div class="row">
                <div class="col-md-6 mt-2">
                    {{-- <div class="form-group">
                        <select name="country_id" class="form-control">
                            <option value="">-Select-</option>
                            @foreach(App\Country::all() as $country)
                                <option value="{{$country->id}}">{{$country->name}}</option>
                            @endforeach
                        </select>
                    </div> --}}
                </div>
                <div class="col-md-6 search_container">
                    <input name='query' style="background-color:#E5E5E5" placeholder="キーワードを入力"　size="25" type="text">
                    <input type="submit" value="&#xf002">
                </div>
            </div>
        </form>
    </div>
</nav>