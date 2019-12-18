<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = ['name'];

    public function movies(){
        return $this->hasMany('App\Movie');
    }
}
