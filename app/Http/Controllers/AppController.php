<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Category;
use App\Country;

class AppController extends Controller
{
    public function search(Request $request){

      $movie_name = $request->get('title');
      $category_name = $request->get('category_id');
      $country = $request->get('country_id');


      if( $movie_name || $category_name || $country){

        $movies = Movie::where('title','like','%'.$movie_name.'%')
                  ->orWhere('category', $category_name)
                  ->orWhere('country',$country);

        return view('results')->with('movies',$movies)
                  ->with('title','Search results : '.request('query'))
                  ->with('name','Search results : '.request('query'))
                  ->with('query',request('query'))
                   ->with('category',$category_name)
                   ->with('country',$country);
      }
      else{
        return view('movies.index')->with('movies',Movie::all());
      }


    }

}
