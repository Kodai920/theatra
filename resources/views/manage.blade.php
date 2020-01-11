@extends('layouts.page')
@section('page')

<div class="card">
        <div class="card-header">ダッシュボード</div>

        <div class="card-body">
                <div class="row">
                <div class="col-md-3 dash-count">会員数 : {{$user->count()}}</div>
                <div class="col-md-3 dash-count">投稿数 : {{$reviews->count()}}</div>
                <div class="col-md-3 dash-count">映画数 : {{$movies->count()}}</div>
                <div class="col-md-3 dash-count">カテゴリ数 : {{$category->count()}}</div>
                <div class="col-md-3 dash-count">製作国数 : {{$country->count()}}</div>
                </div>
        </div>
</div>


@endsection