@extends('layouts.app')
@section('content')

<div class="card">
        <div class="card-header">映画</div>

        <div class="card-body">
        <table class="table table-hover">
            <tbody>
                @foreach($movies as $movie)
                <tr>
                <td><img src="{{$movie->image}}" width="210px" height="300px" alt="{{$movie->title}}"></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
