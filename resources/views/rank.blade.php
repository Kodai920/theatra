@extends('layouts.app')
@section('content')

<h2 class="text-center">RANKING</h2>
<div class="cp_tab">
        <div class="cp_tabpanels">
            <label for="tab5_1">Theatraで評価が高い作品</label>
            <input id="tab5_1" name="cp_tab" type="radio" checked="checked">
            <div class="cp_tabpanel card pt-0">
                <h4 class="card-header">評価ランキング</h4>
                <div class="card-body">
                </div>
            </div>
        </div>
        <div class="cp_tabpanels">
            <label for="tab5_2">投稿数が多い作品</label>
            <input id="tab5_2" name="cp_tab" type="radio">
            <div class="cp_tabpanel card pt-0">
                <h4 class="card-header">投稿数ランキング</h4>
                <div class="card-body">
                    <table>
                        <tr>
                            <th>No.</th> <th></th> <th>タイトル</th> <th>投稿数</th>
                        </tr>
                        @for($i=1; $i<=11; $i++)
                        @foreach($movies as $movie)
                        <tr>
                            <td>
                              {{$i}}
                            </td>
                            <td>
                                <img src="{{asset("uploads/movies/".$movie->image)}}" alt="">
                            </td>
                            <td>{{$movie->title}}</td>
                            <td>{{$movie->reviews->count()}}</td>
                        </tr>
                        @endforeach
                        @endfor
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
