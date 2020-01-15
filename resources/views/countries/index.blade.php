@extends('layouts.image')
@section('image')

<div class="country-image">
    <h1 class="ranking-text">製作国</h1>
</div>

<div class="container mb-5">
        <div class="card">
                <div class="card-header">製作国一覧</div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <th>国名</th>
                            <th></th>
                        </thead>
                        <tbody>
                            @if($countries->count() > 0)
                            @foreach ($countries->sortBy('name') as $country)
                            <tr>
                            <td>
                                <a href="{{route('countries.show',[$country->id])}}">
                                    {{$country->name}}
                                </a>
                                <p class="float-right">( {{$country->movies->count()}} )</p>
                            </td>
                            {{-- @if(Auth::user()->admin)
                            <td>
                                <a href=" {{route('countries.edit',[$country->id])}} " class="btn btn-info">Edit</a>
                            </td>
                            <td>
                                <form action="{{route('countries.destroy',[$country->id])}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            </td>
                            @endif --}}
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <td colspan=2>登録されている製作国がありません</td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
</div>

@endsection