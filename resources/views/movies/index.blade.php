@extends('layouts.app')
@section('content')

    {{-- <table class="table table-hover">
        <tbody> --}}
            @foreach($movies as $movie)
            {{-- <tr>
            <td> --}}
                <img src="{{'movies/'.$movie->image}}" width="210px" height="300px" alt="{{$movie->title}}">
            {{-- </td>
            </tr> --}}
            @endforeach
        {{-- </tbody>
    </table> --}}

@endsection
