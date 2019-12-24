@extends('layouts.app')
@section('content')

      <div class="qablock">
        <p class="question_txt" data-hoge="q1"><span class="qicon">Q</span>ドラマ作品が見つからない</p>
        <div class="show_button closebutton"></div>
        <div id="toggle_q1" class="answer_txt" style="display:none;">
          <p>
                レビューを書きたい、 Clip!したいが、ドラマ作品が見つからない場合は下記内容を一度確認またはお試しください。

                <strong>基本情報の確認</strong>
                □ドラマ作品のタイトルはあっていますか？<br>
                □キャスト（監督・キャスト）の名前はあっていますか？<br>

                <strong>検索時の入力画面の確認</strong>
                □ドラマ作品をFilmarks映画版のページで探されていないでしょうか。 映画版でドラマ作品を検索されてもヒットしないため、ドラマ版に切り替えてご確認ください。<br>

                <strong>未登録作品である場合</strong>
                □上記手順から検索されても作品が見つからない場合、Filmarksに登録されていない作品である可能性がございます。
                下記フォームより未登録作品情報をお送りください。
                弊社登録基準を満たしたものを順次登録してまいります。
                https://forms.gle/yrPHKSWHgj6iY2wD9

                ※リアリティショーやアニメについては現在登録を行なっていないことご了承ください。
                ※映画への未登録リクエストは現在停止しております。上記フォームから映画情報をお寄せいただきましてもご登録しかねますことご了承ください。
                ※お寄せいただきましたドラマ情報は弊社登録基準を満たした作品のみ登録をおこないます。
          </p>
        </div>
      </div>

      <div class="qablock">
        <p class="question_txt" data-hoge="q2"><span class="qicon">Q</span>質問内容をここに記述</p>
        <div class="show_button closebutton"></div>
        <div id="toggle_q2" class="answer_txt" style="display:none;">
          <p>回答内容をここに記述</p>
        </div>
      </div>

      <div class="qablock">
        <p class="question_txt" data-hoge="q3"><span class="qicon">Q</span>質問内容をここに記述</p>
        <div class="show_button closebutton"></div>
        <div id="toggle_q3" class="answer_txt" style="display:none;">
          <p>回答内容をここに記述</p>
        </div>
      </div>

      <div class="qablock">
        <p class="question_txt" data-hoge="q1"><span class="qicon">Q</span>質問内容をここに記述</p>
        <div class="show_button closebutton"></div>
        <div id="toggle_q1" class="answer_txt" style="display:none;">
          <p>回答内容をここに記述</p>
        </div>
      </div>

      <div class="qablock">
        <p class="question_txt" data-hoge="q2"><span class="qicon">Q</span>質問内容をここに記述</p>
        <div class="show_button closebutton"></div>
        <div id="toggle_q2" class="answer_txt" style="display:none;">
          <p>回答内容をここに記述</p>
        </div>
      </div>

      <div class="qablock">
        <p class="question_txt" data-hoge="q3"><span class="qicon">Q</span>質問内容をここに記述</p>
        <div class="show_button closebutton"></div>
        <div id="toggle_q3" class="answer_txt" style="display:none;">
          <p>回答内容をここに記述</p>
        </div>
      </div>

@endsection
