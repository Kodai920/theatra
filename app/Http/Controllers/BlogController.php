<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class MemberController extends Controller
{
    public function index(){

        $posts = Review::all();
        return view('blog')->with('posts',$posts);
    }
}
