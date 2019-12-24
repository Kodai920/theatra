@extends('layouts.app')
@section('content')

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
