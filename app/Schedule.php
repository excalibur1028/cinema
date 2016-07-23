<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = ['movie_id', 'room_id', 'air_date', 'start_time'];

    protected $dates = ['air_date', 'start_time'];

    public function getStartTimeAttribute($time)
    {
        return $this->attributes['start_time'] = Carbon::createFromTime('g:i a', $time);
    }

    public function movies()
    {
        return $this->belongsTo(Movie::class, 'movie_id', 'id');
    }

    public function rooms()
    {
        return $this->belongsTo(Room::class, 'room_id', 'id');
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
