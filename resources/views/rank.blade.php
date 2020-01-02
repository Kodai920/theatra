@extends('layouts.app')
@section('content')

<div class="cp_tab">
        <div class="cp_tabpanels">
            <label for="tab5_1">First Tab</label>
            <input id="tab5_1" name="cp_tab" type="radio" checked="checked">
            <div class="cp_tabpanel">
                <h4>First Tab</h4>
                <p>First Tab text</p>
            </div>
        </div>
        <div class="cp_tabpanels">
            <label for="tab5_2">Second Tab</label>
            <input id="tab5_2" name="cp_tab" type="radio">
            <div class="cp_tabpanel">
                <h4>Second Tab</h4>
                <p>Second Tab text</p>
            </div>
        </div>
    </div>

@endsection
