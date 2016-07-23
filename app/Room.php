<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }
}
