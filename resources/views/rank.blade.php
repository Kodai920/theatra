@extends('layouts.app')
@section('content')

<div class="cp_tab">
        <div class="cp_tabpanels">
            <label for="tab5_1">Theatraで評価が高い作品</label>
            <input id="tab5_1" name="cp_tab" type="radio" checked="checked">
            <div class="cp_tabpanel card">
                <h4 class="card-header">評価ランキング</h4>
                <div class="card-body"></div>
            </div>
        </div>
        <div class="cp_tabpanels">
            <label for="tab5_2">投稿数が多い作品</label>
            <input id="tab5_2" name="cp_tab" type="radio">
            <div class="cp_tabpanel card">
                <h4 class="card-header">投稿数ランキング</h4>
                <div class="card-body"></div>
            </div>
        </div>
    </div>

@endsection
