<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];

    public function movies(){
        return $this->belongsToMany('App\Movie','movie_category','movie_id','category_id');
    }
}
