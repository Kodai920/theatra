<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['impression'];

    public function movie(){
        return $this->belongsTo('App\Movie');
    }

    public function uesr(){
        return $this->belongsTo('App\User');
    }
}