@extends('layouts.image')
@section('image')

<div class="category-image">
    <h1 class="ranking-text">カテゴリ</h1>
</div>

<div class="container mb-5">
        <div class="card">
                <div class="card-header">カテゴリ一覧
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <th>カテゴリ名</th>
                            <th></th>
                        </thead>
                        <tbody>
                            @if($categories->count() > 0)
                            @foreach ($categories->sortBy('name') as $category)
                            <tr>
                            <td>
                                <a href="{{route('categories.show',[$category->id])}}">
                                    {{$category->name}}
                                </a>
                                <p class="float-right">( {{$category->movies->count()}} )</p>
                            </td>
                            {{-- @if(Auth::user()->admin)
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
                            @endif --}}
                            </tr>
                            @endforeach
                            @else
                            <tr>
                              <td colspan=2>カテゴリがありません</td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>

</div>




@endsection