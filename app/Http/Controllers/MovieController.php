<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use Illuminate\Support\Facades\Session;
use App\Country;
use App\Category;
use App\Genre;
use App\Review;
use App\profile;
use Auth;


class MovieController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin')->except(['index','show','create']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::all();
        return view('movies.index')->with('movies',$movies);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('movies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'about' => 'required',
            'year' => 'required',
            'time' => 'required',
            'director' => 'required',
            'writer' => 'required',
            'cast' => 'required',
            'country_id' => 'required'
        ]);

        //mass assignment
        $movie = Movie::create([
            'title' => $request->title,
            'about' => $request->about,
            'year' => $request->year,
            'time' => $request->time,
            'director' => $request->director,
            'writer' => $request->writer,
            'cast' => $request->cast,
            'country_id' => $request->country_id,
        ]);

        $movie->save();
        Session::flash('success','登録完了');
        return redirect()->route('movies.create');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        $category = Category::all();
        $country = Country::all();
        return view('movies.show')->with('movie',$movie)
                                  ->with('category',$category)
                                  ->with('country',$country)
                                  ->with('review',Review::all());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        return view('movies.edit')->with('movie',$movie);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {
        if($request->hasFile('image')){
            $image = $request->image;
            $image_new_name = time().$image->getClientOriginalName();
            $image->move('uploads/posts',$image_new_name);
            $movie->image_img = asset($image_new_name);
        }

        Session::flash('success','Post Updated Successfully');

        return redirect()->route('movies.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
