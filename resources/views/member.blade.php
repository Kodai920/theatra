@extends('layouts.page')
@section('page')

<div class="card">
    <div class="card-header">会員情報</div>

    <div class="card-body">
        <table class="rank-color mx-auto" width="90%">
            <tr class="rank-header">
                <th>No.</th>
                <th>ユーザ名</th>
                <th>メールアドレス</th>
                <th>投稿数</th>
                <th></th>
            </tr>
            <?php $i=0; ?>
            @foreach($users as $user)
            <?php $i++; ?>
            <tr>
                <td class="text-center"><strong>{{$i}}</strong></td>
                <td>
                    {{$user->name}}
                </td>
                <td>{{$user->email}}</td>
                <td>{{$user->reviews->count()}}</td>
            </tr>
            @endforeach
        </table>
    </div>

</div>


@endsection