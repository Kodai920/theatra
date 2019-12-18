@extends('layouts.app')
@section('content')

<div class="card">
        <div class="card-header">投稿</div>

        <div class="card-body">
        <table class="table table-hover">
            <thead>
                <th></th>
                <th>タイトル</th>
            </thead>
            <tbody>
                @if($movies->count() > 0)
                @foreach($movies as $movie)
                <tr>
                    <td><img src="{{$movie->image}}" width="80px" height="80px"></td>
                </tr>
                @endforeach
                @else
                <tr>
                    <th colspan=2 class="text-center">作品がありません</th>
                </tr>
                @endif
            </tbody>
        </table>
    </div>

@endsection
