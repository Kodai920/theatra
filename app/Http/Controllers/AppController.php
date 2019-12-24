<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Category;
use App\Country;

class AppController extends Controller
{
    public function search(){
        $movies = Movie::where('title','like','%'.request('query').'%')->get();
        $countries = Country::where('name','like','%'.request('query').'%')->get();
        $categories = Category::where('name','like','%'.request('query').'%')->gety();

        return view('results')->with('movies',$movies)
                              ->with('title','Search results : '.request('query'))
                              ->with('query',request('query'))
                              ->with('cateogries',$categories)
                              ->with('countries',$countries);
    }
}
