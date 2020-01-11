@extends('layouts.page')
@section('page')

<div class="card">
    <div class="card-header">ブログ一覧</div>

    <div class="card-body">
        <table class="rank-color mx-auto" width="100%">
            <tr class="rank-header">
                <th>No.</th>
                <th>タイトル</th>
                <th>投稿日</th>
                <th>編集</th>
                <th>削除</th>
            </tr>
            <?php $i=0; ?>
            @foreach($posts as $post)
            <?php $i++; ?>
            <tr>
                <td><strong>{{$i}}</strong></td>
                <td>
                    {{$post->title}}
                </td>
                <td>{{$post->created_at->format('Y/m/d')}}</td>
                <td>
                    <a class="btn btn-sm btn-success" href="{{route('posts.edit',[$post->id])}}"><i class="fas fa-edit"></i></a>
                </td>
                <td>
                    <form action="{{route('posts.destroy',[$post->id])}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('本当に削除しますか？')"><i class="fas fa-trash-alt"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>

</div>


@endsection