@extends('layouts.page')
@section('page')

<div class="card">
    <div class="card-header">会員情報</div>

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
                <td>{{$post->created_at}}</td>
                <td>編集</td>
                <td>削除</td>
            </tr>
            @endforeach
        </table>
    </div>

</div>


@endsection