<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserThread extends Model
{
    public $incrementing = true;

    protected $casts = [
        'is_creator' => 'boolean'
    ];
}
