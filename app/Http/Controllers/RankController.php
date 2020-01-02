<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Review;

class RankController extends Controller
{

    public function index(){

        $movies = Movie::all();
        $reviews = Reviews::all();

        return view('rank')->with('movie',$movie)
                           ->with('review',$review);
    }
}
