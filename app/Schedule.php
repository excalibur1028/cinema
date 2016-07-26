<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    public function movies()
    {
        return $this->belongsTo(Movie::class, 'movie_id', 'id');
    }

    protected $fillable = ['movie_id', 'air_date'];

    protected $dates = ['air_date'];

    public function setAirDateAttribute($date)
    {
        return $this->attributes['air_date'] = Carbon::parse($date);
    }

    public function getAirDateAttribute($value)
    {
        return date('F j \\- g:i A', strtotime($value));
    }

    public static function boot()
    {
        parent::boot();
        static::creating(function($schedule)
        {
            $schedule->seats = 100;
        });
    }
}
