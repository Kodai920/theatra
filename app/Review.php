<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = ['impression','movie_id','user_id','star'];

    public function movie(){
        return $this->belongsTo('App\Movie');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
