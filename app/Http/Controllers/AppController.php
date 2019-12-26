<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Category;
use App\Country;

class AppController extends Controller
{
    public function search(Request $request){

        $movie = $request->get('movie');
        $category = $request->get('category');
        $country = $request->get('country');

        if($movie||$category||$country){
            $movies = Movie::query();
            if($movie){
                $movies = Movie::where('title','like','%'.request('query').'%')->get();

                return view('results')->with('movies',$movies)
                ->with('title','Search results : '.request('query'))
                ->with('name','Search results : '.request('query'))
                ->with('query',request('query'));
            }

            if($category){
                $movies = Movie::whereHas('categories',function($query){
                    $query->where('name','like','%'.request('query').'%');
                  })->get();

                  return view('results')->with('movies',$movies)
                  ->with('title','Search results : '.request('query'))
                  ->with('name','Search results : '.request('query'))
                  ->with('query',request('query'));
            }

            if($country){
                $movies = Movie::whereHas('country',function($query){
                    $query->where('name','like','%'.request('query').'%');
                  })->get();

                  return view('results')->with('movies',$movies)
                  ->with('title','Search results : '.request('query'))
                  ->with('name','Search results : '.request('query'))
                  ->with('query',request('query'));
            }
        }

    }
}
