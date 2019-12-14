@extends('layouts.app')
@section('content')

<div class="card">
    <div class="card-header">投稿</div>

    <div class="card-body">
    <table class="table table-hover">
        <thead>
            <th></th>
            <th>タイトル</th>
        </thead>
        <tbody>
            @if($posts->count() > 0)
            @foreach($posts as $post)
            <tr>
                <td><img src="{{$post->featured_img}}" width="80px" height="80px"></td>
                <td>
                    {{$post->title}}
                </td>
                <td>
                    <a class="btn btn-primary" href="{{route('posts.show',[$post->id])}}"><i class="fas fa-eye"></i></a>
                </td>
                <td>
                    <a class="btn btn-info" href="{{route('posts.edit',[$post->id])}}"><i class="fas fa-edit"></i></a>
                </td>
                <td>
                    <form action="{{route('posts.destroy',[$post->id])}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
            @else
            <tr>
                <th colspan=2 class="text-center">No posts yet!</th>
            </tr>
            @endif
        </tbody>
    </table>
</div>
</div>
@endsection