<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Post;
use App\Category;
use App\Country;
use App\Review;
use App\User;
use Auth;

class ManageController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('admin');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        $user = User::all();
        $movies = Movie::all();
        $reviews = Review::all();
        $posts = Post::all();
        $category = Category::all();
        $country = Country::all();
        return view('manage')
                           ->with('movies',$movies)
                           ->with('country',$country)
                           ->with('category',$category)
                           ->with('user',$user)
                           ->with('posts',$posts)
                           ->with('reviews',$reviews);
    }
}
