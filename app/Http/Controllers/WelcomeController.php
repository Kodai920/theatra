<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class WelcomeController extends Controller
{
        /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $movies = Movie::all();
        return view('welcome')->with('movies',$movies);
    }
}
