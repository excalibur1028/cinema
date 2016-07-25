<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }

    public function rooms()
    {
        return $this->belongsTo(Room::class, 'room_id', 'id');
    }

    protected $dates = ['release_date'];

    protected $fillable = ['title', 'description'];

    public function getCoverAttribute()
    {
        if(! $this->attributes['cover']){
            return 'img/movie-poster.jpg';
        }
        return $this->attributes['cover'];
    }
}
