<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = ['user_id', 'movie_id', 'cinema', 'schedule', 'quantity'];

    protected $dates = ['schedule'];

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function movies()
    {
        return $this->belongsTo(Movie::class, 'movie_id', 'id');
    }
}
