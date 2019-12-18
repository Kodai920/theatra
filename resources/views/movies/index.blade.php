@extends('layouts.app')
@section('content')

<div class="card">
        <div class="card-header">投稿</div>

        <div class="card-body">
        <table class="table table-hover">
            <tbody>
                @if($movies->count() > 0)
                @foreach($movies as $movie)
                <tr>
                    <td><img src="{{$movie->image}}" width="140px" height="200px" alt="{{$movie->title}}"></td>
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
