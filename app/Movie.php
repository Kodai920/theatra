<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = ['title','year','about','image'];

    public function categories(){
        return $this->belongsToMany('App\Category');
    }

    public function country(){
        return $this->belongsTo('App\Country');
    }

    public function genre(){
        return $this->belongsTo('App\Genre');
    }

    public function reviews(){
        return $this->hasMany('App\Review');
    }
}
