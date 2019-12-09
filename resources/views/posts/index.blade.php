@extends('layouts.app')
@section('content')

<div class="card">
    <div class="card-header">Posts</div>
    <table class="table table-hover">
        <thead>
            <th>Image</th>
            <th>Title</th>
        </thead>
        <tbody>
            @if($posts->count()->0)
            @foreach($posts as $post)
            <tr>
                <td><img src="{{$post->featured->img}}" width="80px" height="80px"></td>
                <td>
                    {{$post->title}}
                </td>
                <td>
                    <a class="btn btn-primary" href=" {{route('posts.show',['id'=>$post->id])}}"><i class="fas fa-eye"></i></a>
                </td>
                <td>
                    <a class="btn btn-info" href=" {{route('posts.create',['id'=>$post->id])}}"><i class="fas fa-edit"></i></a>
                </td>
                <td>
                    <form action=" {{route('posts.destroy',['id'=>$post->id])}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger"></button>
                    </form>
                </td>
                @endif
            </tr>
            @else
            <tr>
                <th colspan=2 class="text-center">No Posts Yet</th>
            </tr>
            @endif
        </tbody>
    </table>
</div>

@endsection