<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    //
    protected $fillable = [
        'id', 'userid', 'destination', 'action', 'status', 'type', 'category', 'code', 'closed_at'
    ];
}
