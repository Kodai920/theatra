@extends('layouts.page')
@section('page')

<div class="card">
        <div class="card-header">映画情報</div>

        <div class="card-body">
                <table class="rank-color mx-auto" width="100%">
                    <tr class="rank-header">
                        <th>No.</th>
                        <th>タイトル</th>
                        <th>公開年</th>
                        <th>製作国</th>
                        <th>投稿数</th>
                        <th>削除</th>
                    </tr>
                    <?php $i=0; ?>
                    @foreach($movies as $info)
                    <?php $i++; ?>
                    <tr>
                        <td><strong>{{$i}}</strong></td>
                        <td>
                            {{$info->title}}
                        </td>
                        <td>{{$info->year}}年</td>
                        <td>{{$info->country->name}}</td>
                        <td class="text-center">{{$info->reviews->count()}}</td>
                        <td>
                            <form action="{{route('movies.destroy',[$info->id])}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm" onclick="return confirm('本当に削除しますか？')"><i class="fas fa-trash-alt"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
            <div class="mx-auto">{{$movies->links()}}</div>
        </div>


@endsection