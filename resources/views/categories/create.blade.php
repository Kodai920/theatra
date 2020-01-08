@extends('layouts.page')
@section('page')

<div class="card">
        <div class="card-header">カテゴリを作る</div>

        <div class="card-body">
            @if(count($errors) > 0)
            <ul class="list-group">
                @foreach($errors->all() as $error)
                <li class="list-group-item text-danger"> {{$error}} </li>
                @endforeach
            </ul>
            @endif
            <form action="{{route('categories.store')}}" method="post">
                @csrf
                @if(isset($category))
                  @method('PUT')
                @endif
                <div class="form-group">
                    <label for="title">カテゴリ名</label>
                    <input type="text" name="name" class="form-control">
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