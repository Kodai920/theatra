<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Review;


class MemberController extends Controller
{
    public function index(){

        $user = User::all();
        $reviews = Review::all();
        return view('member')->with('user',$user)
                             ->with('reviews',$reviews);
    }
}
