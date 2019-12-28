<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\CreateCategoryRequest;
use App\Movie;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('categories.index')->with('categories',$categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateCategoryRequest $request)
    {
        $category = new Category;
        $category->name = $request->name;
        $category->save();

        Session::flash('success','カテゴリ作成完了');
        return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        $movies = Movie::all();
        foreach($categories as $category){

            $movies = $categories->movies()->orderby('movie_id')->get();//中間テーブル経由でタグのrecordを取得

            $tagName = [];
            foreach($movies as $movie){//タグも複数あるので、繰り返す。
            $movieTitle[] = $movie->title;//取得してきたレコードのid
            }
            $categoreis['movies'] = $movieTitle;//送るデータに追加（同foreachで回すため）
        }
        return view('categories.show')->with('category',$category)
                                      ->with('movies',$movies);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('categories.edit')->with('category',$category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateCategoryRequest $request, Category $category)
    {
        $category->name = $request->name;
        $category->save();

        Session::flash('success','カテゴリ編集完了');
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        Session::flash('success','カテゴリ削除完了');
        return redirect()->route('categories.index');
    }
}
