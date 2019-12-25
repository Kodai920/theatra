<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;
use Illuminate\Support\Facades\Session;
use App\Movie;
use Auth;
use App\Profile;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        return view('reviews.index')->with('reviews',Review::all())
                                    ->with('user',$user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $movie = Movie::find($id);
        return view('reviews.create')->with('movie',$movie);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        $this->validate($request,[
            'impression' => 'nullable',
            'star' => 'required',
        ]);

        $movie = Movie::find($id);
        $review = new Review;
        $review->impression = $request->impression;
        $review->star = $request->star;
        $review->movie_id = $movie->id;
        $review->user_id = Auth::id();
        $review->save();

        Session::flash('success','投稿完了');
        return redirect()->route('movies.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Review $review)
    {
        return view('reviews.edit')->with('review',$review);
                                  ;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Review $review)
    {
        $this->validate($request,[
            'impression' => 'nullable',
            'star' => 'required',
        ]);

        $review->impression = $request->impression;
        $review->star = $request->star;
        $review->save();

        Session::flash('success','更新完了');
        return redirect()->route('reviews.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Review $review)
    {
        $review->delete();
        return redirect()->route('reviews.index');
    }
}
