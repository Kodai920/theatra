@extends('layouts.page')
@section('page')

<div class="card">
        <div class="card-header">ダッシュボード</div>

        <div class="card-body">
                <div class="row mx-auto">
                <div class="col-md-3 text-center border border-dark rounded p-5 m-2">会員数 : {{$user->count()}}</div>
                <div class="col-md-3 text-center border border-dark rounded p-5 m-2">投稿数 : {{$reviews->count()}}</div>
                <div class="col-md-3 text-center border border-dark rounded p-5 m-2">映画数 : {{$movies->count()}}</div>
                </div>
        </div>
</div>


@endsection