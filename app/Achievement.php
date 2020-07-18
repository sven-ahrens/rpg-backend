<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{
    protected $fillable = [
        'challenge',
        'title_en',
        'title_de',
        'slug',
        'description_en',
        'description_de'
    ];

    protected $casts = [
      'created_at' => 'datetime',
      'updated_at' => 'datetime',
    ];

    public function users()
    {
        return $this->belongsToMany('App\User');
    }

    public function notification()
    {
        return $this->morphOne('App\Notification', 'notificationable');
    }
}
