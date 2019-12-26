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
     // $category = Category::where('name','like','%'.$query.'%');
     // $movie_by_category = Category::find($category->id)->movies;

      //radio - movie based on country
      $country_radio = $request->get('conr');
      $country = Country::where('name','like','%'.$query.'%');
      //$movie_by_country = Country::find($country->id)->movies;



      if( $movie_radio || $category_radio || $country_radio){

        $movies = Movie::where('title','like','%'.$query.'%')
                  ->orWhere('category', $category->id)
                  ->orWhere('country',$country->id);

        return view('results')->with('movies',$movies)
                  ->with('title','Search results : '.request('query'));
      }
      else{
        return view('movies.index')->with('movies',Movie::all());
      }


    }

}
