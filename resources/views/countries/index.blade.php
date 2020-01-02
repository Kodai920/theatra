@extends('layouts.app')
@section('content')


<div class="card">
    <div class="card-header">製作国一覧
    </div>
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
                    <p class="float-right">({{$country->movies->count()}})</p>
                </td>
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



@endsection