<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Post;
use App\Review;
use App\User;

class AdminController extends Controller
{
    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     $this->middleware('admin')->except(['index']);
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        $movies = Movie::all();
        $reviews = Review::all();
        $posts = Post::all();
        return view('admin')
                           ->with('movies',$movies)
                           ->with('user',$user)
                           ->with('post',$post)
                           ->with('reviews',$reviews);
    }
}
