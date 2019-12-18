<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public function categories(){
        return $this->belongsToMany('App\Category','movie_category','movie_id','category_id');
    }

    public function country(){
        return $this->belongsTo('App\Country');
    }

    public function genre(){
        return $this->belongsTo('App\Genre');
    }
}
