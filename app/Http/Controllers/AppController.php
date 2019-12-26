<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Category;
use App\Country;

class AppController extends Controller
{
    public function search(Request $request){

      $query = $request->query;

      //radio - movie
      $movie_radio = $request->get('mr');

      //radio - movie based on category
      $category_radio = $request->get('cr');

      //radio - movie based on country
      $country = $request->get('country_id');


      if( $movie_radio || $category_radio || $country){

        $movies = Movie::where('title','like','%'.$query.'%')
                  ->orWhere('name', $category)
                  ->orWhere('country_id',$country);

        return view('results')->with('movies',$movies)
                  ->with('title','Search results : '.request('query'));
      }
      else{
        return view('movies.index')->with('movies',Movie::all());
      }


    }

}
