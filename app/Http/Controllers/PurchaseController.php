<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Movie;
use App\Room;
use App\Schedule;

class PurchaseController extends Controller
{
    public function show(Movie $movie)
    {
        $schedule = Schedule::whereMovieId($movie->id)->lists('air_date', 'air_date');
        $cinema = $movie->rooms->name;

        return view('pages.show', compact('movie', 'schedule', 'cinema'));
    }

}
