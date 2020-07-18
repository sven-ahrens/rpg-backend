<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'messages'
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function notification()
    {
        return $this->morphOne('App\Notification', 'notificationable');
    }

    public function user()
    {
        return $this->hasMany('App\User');
    }
}
