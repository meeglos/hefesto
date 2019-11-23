<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    //
    protected $fillable = [
        'userid', 'destination', 'action', 'status', 'type', 'category', 'closed_at', 'code'
    ];
}
