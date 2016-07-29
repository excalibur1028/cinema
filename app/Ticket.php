<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Auth;

class Ticket extends Model
{
    protected $fillable = ['user_id', 'movie_id', 'cinema', 'schedule', 'quantity', 'price'];

    protected $dates = ['schedule'];

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function movies()
    {
        return $this->belongsTo(Movie::class, 'movie_id', 'id');
    }

    public function getGrandTotal()
    {
        return $this->whereCompleted('false')->whereUserId(Auth::user()->id)->sum('price');
    }
}
