<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Movie;
use App\Room;
use App\Schedule;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        $movies = Movie::all();

        return view('pages.index', compact('movies'));
    }

    public function show(Movie $movie)
    {
        $movie->load('schedules.rooms');

        $schedule = Schedule::where('movie_id', '=', $movie->id)->lists('start_time');

        dd($schedule);
        // $room = Schedule::with('rooms')->where('movie_id', '=', $movie->id)->lists('name');

        return view('pages.show', compact('movie', 'schedule', 'room'));
    }

}
