@extends('layouts.page')
@section('page')

<div class="card">
    <div class="card-header">会員情報</div>

    <div class="card-body">
        <table class="rank-color mx-auto" width="100%">
            <tr class="rank-header">
                <th>No.</th>
                <th>ユーザ名</th>
                <th>メールアドレス</th>
                <th>投稿数</th>
                <th>削除</th>
            </tr>
            <?php $i=0; ?>
            @foreach($user as $member)
            <?php $i++; ?>
            <tr>
                <td><strong>{{$i}}</strong></td>
                <td>
                    {{$member->name}}
                </td>
                <td>{{$member->email}}</td>
                <td>{{$member->reviews->count()}}</td>
                <td>削除</td>
            </tr>
            @endforeach
        </table>
    </div>

</div>


@endsection