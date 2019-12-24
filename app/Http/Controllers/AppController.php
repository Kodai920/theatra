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

        $countries = Movie::whereHas('countries', function ($query){
            $query->where('country', 'like','%'.request('query').'%');
        })->get();

        $categories = Movie::whereHas('categories', function ($query){
            $query->where('category', 'like','%'.request('query').'%');
        })->get();

        return view('results')->with('movies',$movies)
                              ->with('title','Search results : '.request('query'))
                              ->with('query',request('query'))
                              ->with('cateogries',$categories)
                              ->with('countries',$countries);
    }
}
