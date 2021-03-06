@extends('layouts.app')
@section('content')

<div class="card">
    <div class="card-header">編集</div>

    <div class="card-body">
        @if(count($errors) > 0)
        <ul class="list-group">
            @foreach($errors->all() as $error)
            <li class="list-group-item text-danger"> {{$error}} </li>
            @endforeach
        </ul>
        @endif

        <form action="{{ route('countries.update',[$country->id])}}" method="post">
            @csrf
            @if(isset($country))
              @method('PUT')
            @endif
            <div class="form-group">
                <label for="name">国名</label>
                <input type="text" name="name" class="form-control" value="{{$country->name}}">
            </div>
            <div class="form-group">
                <button class="btn btn-success btn-block" type="submit">
                   更新
                </button>
            </div>
        </form>
    </div>
</div>
@endsection