<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProfileController extends Controller
{
    public function index(){
        return view('profiles.index')->with('user',Auth::user());
    }

    public function update(){

    }
}
