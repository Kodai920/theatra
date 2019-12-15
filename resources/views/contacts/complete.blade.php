@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">送信完了</div>
                <div></div>
                <div class="card-body">
                    お問い合わせいただきまして、誠にありがとうございます。<br>
                    お客様のご要望を取り入れ、サービスの質の向上に努めてまいります。
                </div>
                <hr>
                <a href="{{route('home')}}" class="btn btn-secondary float-right">ホームに戻る</a>
            </div>
        </div>
    </div>
</div>
@endsection