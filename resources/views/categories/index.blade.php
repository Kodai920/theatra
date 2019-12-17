@extends('layouts.app')
@section('content')


<div class="card">
    <div class="card-header">All Categories
        <a class="btn btn-info float-right" href="{{route('categories.create')}}">新規カテゴリ</a>
    </div>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <th>Name</th>
                <th></th>
            </thead>
            <tbody>
                @if($categories->count() > 0)
                @foreach ($categories as $category)
                <tr>
                <td>{{$category->name}}</td>
                <td>
                    <a href=" {{route('categories.edit',[$category->id])}} " class="btn btn-info">Edit</a>
                </td>
                <td>
                    <form action="{{route('categories.destroy',[$category->id])}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
                </tr>
                @endforeach
                @else
                <tr>
                    <td colspan=2>No categories found yet.</td>
                </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>



@endsection