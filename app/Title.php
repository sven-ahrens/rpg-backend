<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function tags()
    {
        return $this->hasMany('App\Tag');
    }
}
