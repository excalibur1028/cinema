<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = ['title', 'description'];

    public function getCoverAttribute()
    {
        if(! $this->attributes['cover']){
            return 'img/movie-poster.jpg';
        }
        return $this->attributes['cover'];
    }

    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }
}
