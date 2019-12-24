<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Movie;


class SearchController extends Controller
{
    public function index(Request $request){

        //キーワードを入力
        $keyword = $request->input('keyword');

        //もしキーワードが入力されている場合
        if(!empty($keyword)){
            //映画名から検索
            $movies = DB::table('movies')->where('title','like','%'.$keyword.'%')->paginate(4);

            //リレーション関係にあるテーブルの国、カテゴリから検索
            $movies = Movie::whereHas('countries',function($query) use ($keyword){
                $query->where('countries','like','%'.$keyword.'%');
            })->paginate(4);

            $movies = Movie::whereHas('categories',function($query) use ($keyword){
                $query->where('categories','like','%'.$keyword.'%');
            })->paginate(4);
        }else{//キーワードが入力されていない場合
            $movies = DB::table('movies')->paginate(4);
        }
        //検索フォームへ
        return view('inc.search',[
            'movies' => $movies,
            'countries' => $countries,
            'categories' => $categories,
        ]);
    }
}
