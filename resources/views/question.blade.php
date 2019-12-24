@extends('layouts.app')
@section('content')

<style type="text/css">

    #QandA-2 {
        width: 100%;
        font-family: メイリオ;
        font-size: 12px; /*全体のフォントサイズ*/
    }
    #QandA-2 h3 {
        font-size: 16px;
        margin-top: 32px;
    }
    #QandA-2 dl {
        border: 1px solid #ccc;
    }
    #QandA-2 dt {
    font-weight: bold;
        color: #111;
        background: #f4f4f4; /* 「Q」タイトルの背景色 */
        padding: 8px;
        border-top: 1px solid #ccc;
        border-bottom: 1px solid #ccc;
    }
    #QandA-2 dt:first-child {
        border-top: none;
    }
    #QandA-2 dt:before {
        content: "Q.";
        font-weight: bold;
        margin-right: 8px;
    }
    #QandA-2 dd {
        padding: 16px 16px 24px 30px;
        margin: 0;
        line-height: 140%;
    }
    #QandA-2 dd:first-line {
        font-weight: bold;
        color: #bf0000;
    }
    #QandA-2 dd:before {
        content: "A.";
        font-weight: bold;
        margin-right: 8px;
        margin-left: -21px;
    }

    </style>


    <div id="QandA-2">

        <h3>◯◯について</h3>
        <dl>
            <dt>質問タイトル</dt>
            <dd>回答内<br>回答内容</dd>
        </dl>
        <dl>
            <dt>質問タイトル</dt>
            <dd>回答内<br>回答内容</dd>
        </dl>

        <h3>◯◯について</h3>
        <dl>
            <dt>質問タイトル</dt>
            <dd>回答内<br>回答内容</dd>
        </dl>
        <dl>
            <dt>質問タイトル</dt>
            <dd>回答内<br>回答内容</dd>
        </dl>
    </div>

@endsection
