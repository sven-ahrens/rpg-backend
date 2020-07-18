<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        'messages'
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function userRecipient()
    {
        return $this->belongsTo('App\User', 'recipient_id');
    }

    public function userSend()
    {
        return $this->belongsTo('App\User', 'sender_id');
    }

    public function notification()
    {
        return $this->morphOne('App\Notification', 'notificationable');
    }
}
