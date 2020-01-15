@extends('layouts.image')
@section('image')

<div class="ranking-image">
        <h1 class="ranking-text">RANKING</h1>
    </div>
    
    <div class="container">
        <div class="cp_tab">
                <div class="cp_tabpanels">
                    <label for="tab5_1">Theatraで評価が高い作品</label>
                    <input id="tab5_1" name="cp_tab" type="radio" checked="checked">
                    <div class="cp_tabpanel card pt-0">
                        <h4 class="card-header">評価ランキング</h4>
                        <div class="card-body">
                            <table class="rank-color mx-auto" width="90%">
                                <tr class="rank-header">
                                    <th>No.</th>
                                    <th></th>
                                    <th>タイトル</th>
                                    <th>みんなの評価</th>
                                </tr>
                                <?php $i=0; ?>
                                @foreach($movies_by_rating as $movie)
                                <?php $i++; ?>
                                <tr>
                                    <td class="text-center"><strong>{{$i}}</strong></td>
                                    <td>
                                    <img class="d-block mx-auto" src="{{asset("uploads/movies/".$movie->image)}}" height="100px" width="75px" alt="{{$movie->title}}">
                                    </td>
                                    <td>{{$movie->title}}</td>
                                    <td>{{ round($movie->reviews->avg('star'),2)}}</td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
                <div class="cp_tabpanels">
                    <label for="tab5_2">投稿数が多い作品</label>
                    <input id="tab5_2" name="cp_tab" type="radio">
                    <div class="cp_tabpanel card pt-0">
                        <h4 class="card-header">投稿数ランキング</h4>
                        <div class="card-body">
                            <table class="rank-color mx-auto" width="90%">
                                <tr class="rank-header">
                                    <th>No.</th>
                                    <th></th>
                                    <th>タイトル</th>
                                    <th>投稿数</th>
                                </tr>
                                <?php $i=0; ?>
                                @foreach($movies_by_review as $movie)
                                <?php $i++; ?>
                                <tr>
                                    <td class="text-center"><strong>{{$i}}</strong></td>
                                    <td>
                                    <img class="d-block mx-auto" src="{{asset("uploads/movies/".$movie->image)}}" height="100px" width="75px" alt="{{$movie->title}}">
                                    </td>
                                    <td>{{$movie->title}}</td>
                                    <td>{{$movie->reviews->count()}}</td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </div>

@endsection