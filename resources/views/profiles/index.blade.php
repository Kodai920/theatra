@extends('layouts.app')
@section('content')

<div class="card">
    <div class="card-header">Profile</div>
    <div class="card-body">
        @if(count($errors) > 0)
        <ul class="list-group">
            @foreach($errors->all() as $error)
            <li class="list-group-item text-danger">{{$error}}</li>
            @endforeach
        </ul>
        @endif

        <form action="{{route('profiles.update',[$user->id])}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">アカウント名</label>
                <input type="text" name="name" value="{{Auth::user()->name}}" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">メールアドレス</label>
                <input type="email" name="email" value="{{Auth::user()->email}}" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">新しいパスワード</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="form-group">
                <label for="avator">アイコン画像</label>
                <input type="file" name="avator" class="form-control">
            </div>
            <div class="form-group">
                <label for="about">自己紹介</label>
                <textarea name="about"  cols="30" rows="5" class="form-control">{{$user->profile->about}}</textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success btn-block">更新</button>
            </div>
        </form>
    </div>
</div>

@endsection