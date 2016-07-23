<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Movie;
use App\Room;
use App\Http\Requests\CreateMovie;

class MoviesController extends Controller
{
    public function create()
    {
        return view('pages.dashboard.movies.create');
    }

    public function store(CreateMovie $request)
    {
        $movies = Movie::create($request->all());

        $new = $movies->id;

        return redirect()->route('dashboard.movie.show', compact('new'));
    }

    public function show(Movie $movie)
    {
        $movie->load('schedules.rooms');

        $rooms = Room::lists('name', 'id');

        return view('pages.dashboard.movies.show', compact('movie', 'rooms'));
    }
}
