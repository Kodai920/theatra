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
        $countries = Country::all();
        $movie = Movie::all();
        $count = $movie->country_id->get()->count();
        return view('countries.index')->with('countries',$countries)
                                      ->with('movie',$movie);
    }

        /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Country $country)
    {
        return view('countries.show')->with('country',$country);
    }

}
