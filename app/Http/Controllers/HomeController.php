<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use Auth;
use App\Movie;
use App\Review;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = User::find(Auth::id())->reviews;
        $movies = Movie::all();
        $reviews = Review::all();
        return view('home')->with('posts',$posts)
                           ->with('movies',$movies)
                           ->with('reviews',$reviews);
    }
}
