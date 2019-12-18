@extends('layouts.app')
@section('content')

    {{-- <table class="table table-hover">
        <tbody> --}}
            @foreach($movies as $movie)
            {{-- <tr>
            <td> --}}
                <div>
                    <a href="#" class="float-right m-4">
                    <img src="{{$movie->image}}" width="210px" height="300px" alt="{{$movie->title}}">
                    </a>
                </div>
            {{-- </td>
            </tr> --}}
            @endforeach
        {{-- </tbody>
    </table> --}}

@endsection
