<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Category;
use App\Country;

class AppController extends Controller
{
    public function search(Request $request){

      // $movie = $request->get('title');
      // $category = $request->get('name');
      // $country = $request->get('name');

      // if($movie||$country||$category){

      //   $movies = Movie::query();

      //   if($movie){
          $movies = Movie::where('title','like','%'.request('query').'%')
        // }

        // if($category){
          ->whereHas('categories',function($query){
            $query->where('name','like','%'.request('query').'%');
          })
        // }

        // if($country){
          ->whereHas('country',function($query){
            $query->where('name','like','%'.request('query').'%');
          })->get();
    //     }

    //     return view('results')->with('movies',$movies)
    //     ->with('title','Search results : '.request('query'))
    //     ->with('name','Search results : '.request('query'))
    //     ->with('query',request('query'));
    //   }
    }
}
