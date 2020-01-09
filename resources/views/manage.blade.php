@extends('layouts.page')
@section('page')

<div class="card">
        <div class="card-header">ダッシュボード</div>

        <div class="card-body">
                <div class="row">
                <div class="col-md-4 text-center border border-dark rounded p-4 m-1">会員数 : {{$user->count()}}</div>
                <div class="col-md-4 text-center border border-dark rounded p-4 m-1">投稿数 : {{$reviews->count()}}</div>
                <div class="col-md-4 text-center border border-dark rounded p-4 m-1">映画数 : {{$movies->count()}}</div>
                </div>
        </div>
</div>


@endsection