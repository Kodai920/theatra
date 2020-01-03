<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Review;

class RankController extends Controller
{

    public function index(){


        $movies_by_review = Movie::with('reviews')->get()->sortBy(function($movie){
            return $movie->reviews->count();
        },SORT_REGULAR,true);

        $movies_by_rating = Movie::with('reviews')->get()->sortBy(function($movie){
            return $movie->reviews->avg('star');
        },SORT_REGULAR,true);

        $reviews = Review::all();

        return view('rank')->with('movies_by_review',$movies_by_review)
                           ->with('movies_by_rating',$movies_by_rating)
                           ->with('reviews',$reviews);
    }
}
