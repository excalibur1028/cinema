<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\CreateSchedule;
use App\Movie;
use App\Schedule;

class SchedulesController extends Controller
{
    public function store(Movie $movie, CreateSchedule $request)
    {
        $movie->schedules()->create($request->all());

        return redirect()->back();
    }
}
