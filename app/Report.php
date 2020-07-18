<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $fillable = [
        'reason',
        'reportable_type',
        'reportable_id'
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function bannedUsers()
    {
        return $this->belongsToMany('App\User', 'admonition');
    }

    public function admonitionUsers()
    {
        return $this->belongsToMany('App\User', 'admonition');
    }
}
