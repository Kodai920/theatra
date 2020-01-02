<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = ['title','year','about','image'];

    use Rateable;

    public function categories(){
        return $this->belongsToMany('App\Category');
    }

    public function country(){
        return $this->belongsTo('App\Country');
    }

    // public function reviews(){
    //     return $this->morphMany('App\Review','reviewable');
    // }

    public function reviews(){
        return $this->hasMany('App\Review');
    }

}
