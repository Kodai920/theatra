@extends('layouts.app')
@section('content')

    {{-- <table class="table table-hover">
        <tbody> --}}
            @foreach($movies as $movie)
            {{-- <tr>
            <td> --}}
                <div>
                    <img src="{{$movie->image}}" width="210px" height="300px" alt="{{$movie->title}}">
                </div>
            {{-- </td>
            </tr> --}}
            @endforeach
        {{-- </tbody>
    </table> --}}

@endsection
