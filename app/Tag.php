<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [
        'name_en',
        'name_de'
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function titles()
    {
        return $this->belongsToMany('App\Tag', 'title_tags');
    }
}
