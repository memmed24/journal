<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $fillable = ['seen', 'user_id', 'notification_type'];

    //notification_type 1 - upload document 

    public function user() 
    {
        return $this->belongsTo(User::class);
    }

}
