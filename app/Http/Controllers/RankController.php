<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Review;

class RankController extends Controller
{

    public function index(){


        $movies = Movie::with('reviews')->get()->sortBy(function($movie){
            return $movie->reviews->count();
        },SORT_REGULAR,true);
        $reviews = Review::all();

        return view('rank')->with('movies',$movies)
                           ->with('reviews',$reviews);
    }
}
