<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Movie;
use App\Room;

class PurchaseController extends Controller
{
    public function show(Movie $movie)
    {
        $movie->load('schedules.rooms');

        $rooms = Room::lists('name', 'id');

        return $movie;
    }
}
