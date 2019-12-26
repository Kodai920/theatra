<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Category;
use App\Country;

class AppController extends Controller
{
    public function search(Request $request){

            $movies = Movie::query();

            if(Input::has('movie')){
                $movies = $movies->where('title','like','%'.request('query').'%')->get();

                return view('results')->with('movies',$movies)
                ->with('title','Search results : '.request('query'))
                ->with('name','Search results : '.request('query'))
                ->with('query',request('query'));
            }

            if(Input::has('category')){
                $movies = $movies->whereHas('categories',function($query){
                    $query->where('name','like','%'.request('query').'%');
                  })->get();

                  return view('results')->with('movies',$movies)
                  ->with('title','Search results : '.request('query'))
                  ->with('name','Search results : '.request('query'))
                  ->with('query',request('query'));
            }

            if(Input::has('country')){
                $movies = $movies->whereHas('country',function($query){
                    $query->where('name','like','%'.request('query').'%');
                  })->get();

                  return view('results')->with('movies',$movies)
                  ->with('title','Search results : '.request('query'))
                  ->with('name','Search results : '.request('query'))
                  ->with('query',request('query'));
            }
    }
}
