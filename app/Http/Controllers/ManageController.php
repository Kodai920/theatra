<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Post;
use App\Review;
use App\User;
use Auth;

class ManageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin')->except(['index']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = User::all();
        $movies = Movie::all();
        $reviews = Review::all();
        $posts = Post::all();
        $categories = Post::all();
        $countries = Post::all();
        return view('manage')
                           ->with('movies',$movies)
                           ->with('countries',$countires)
                           ->with('categories',$categories)
                           ->with('user',$user)
                           ->with('posts',$posts)
                           ->with('reviews',$reviews);
    }
}
