<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use Illuminate\Support\Facades\Session;
use App\Movie;


class CountryController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Country::all();
        return view('countries.index')->with('countries',$countries);
    }

        /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Country $country)
    {
        $movies = Movie::all();
        return view('country.show')->with('country',$country)
                                      ->with('movies',$movies);
    }

}
