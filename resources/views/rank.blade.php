@extends('layouts.app')
@section('content')

<div class="tab_wrap">
        <div class="tab_area">
            <label class="tab1_label" for="tab1">評価順</label>
            <label class="tab2_label" for="tab2">投稿数順</label>
        </div>
        <div class="panel_area">
            <div id="panel1" class="tab_panel">
                <p>panel1</p>
            </div>
            <div id="panel2" class="tab_panel">
                <p>panel2</p>
            </div>
        </div>
    </div>

@endsection
