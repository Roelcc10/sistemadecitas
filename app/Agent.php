<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    public function user()
    {
        return $this->belongsTo(Agent::class);
    }
}
