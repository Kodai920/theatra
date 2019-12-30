@extends('layouts.app')
@section('content')

<div class="card">
    <div class="card-header">映画のデータ作成</div>

    <div class="card-body">
        @if(count($errors) > 0)
        <ul class="list-group">
            @foreach($errors->all() as $error)
            <li class="list-group-item text-danger"> {{$error}} </li>
            @endforeach
        </ul>
        @endif

        <form action="{{route('movies.store')}}" method="post">
            @csrf
            @if(isset($category))
              @method('PUT')
            @endif
            <div class="form-group">
                <label for="title">タイトル</label>
                <input type="text" name="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="about">あらすじ</label>
                <textarea name="about" cols="30" rows="10" placeholder="あらすじを記入" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="year">製作年</label>
                <input type="number" name="year" class="form-control">
            </div>
            <div class="form-group">
                <label for="time">上映時間</label>
                <input type="number" name="time" class="form-control">
            </div>
            <div class="form-group">
                <label for="director">監督</label>
                <input type="text" name="director" class="form-control">
            </div>
            <div class="form-group">
                <label for="writer">脚本</label>
                <input type="text" name="writer" class="form-control">
            </div>
            <div class="form-group">
                <label for="cast">主演</label>
                <input type="text" name="cast" class="form-control">
            </div>
            <div class="form-group">
                <label for="country_id">製作国</label>
                <select name="country_id" id="">
                    @foreach($countries as $country)
                        <option value="{{$country->id}}">{{$country->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <button class="btn btn-success btn-block" type="submit">
                　　追加
                </button>
            </div>
        </form>
    </div>
</div>
@endsection