@extends('layouts.app')
@section('content')

<div class="card">
<div class="card-header">マイページ</div>
<div class="card-body">

    <div class="wrapper">
        <div class="row">
            <div class="5">
                <div>genre</div>
                <div></div>
            </div>
            <div class="5">
                <div>
                    <a href="{{route('profiles.index')}}" class="btn btn-secondary btn-block">プロフィール編集</a>
                </div>
            </div>
        </div>
    </div>

</div>
</div>
@endsection
