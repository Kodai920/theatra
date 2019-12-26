<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Category;
use App\Country;

class AppController extends Controller
{
    public function search(Request $request){

      //$query = $request->query;

      //radio - movie
      $keyword = $request->get('query');

      //radio - movie based on category
      $category = $request->get('cr');

      //radio - movie based on country
      $country = $request->get('country_id');


      if( $keyword || $category || $country){
        $movies = Movie::query();

        if($keyword){
          $movies = Movie::where('title','like','%'.$keyword.'%');
        }

        if($country){
          $movies = Movie::where('country_id',$country);
        }
        // $movies = Movie::where('title','like','%'.$keyword.'%')
        //           ->orWhere('country_id',$country);
        $movies = Movie::paginate(5);
        return view('results')->with('movies',$movies)
                  ->with('title','Search results : '.$keyword);
      }


    }

}
