<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Review;
use App\Country;

class InfoController extends Controller
{
    public function index(){
        $movies = Movie::all();
        $reviews = Review::all();
        $country = Country::all();
        return view('info')->with('movies',$movies)
                           ->with('reviews',$reviews)
                           ->with('country',$country);
    }
}
