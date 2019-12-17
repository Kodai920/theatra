<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public function categories(){
        return $this->belongsToMany('App\Category','movie_category','movie_id','category_id');
    }
}
