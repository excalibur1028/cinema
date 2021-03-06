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
        $rooms = Room::lists('name', 'id');

        return view('pages.dashboard.movies.create', compact('rooms'));
    }

    public function store(CreateMovie $request)
    {
        $movies = Movie::create($request->all());
        $new = $movies->id;

        alert()->success('Movie Successfuly Created', 'Good Job')->autoclose(4000);

        return redirect()->route('dashboard.movie.show', compact('new'));
    }

    public function show(Movie $movie)
    {
        return view('pages.dashboard.movies.show', compact('movie'));
    }

    public function destroy(Movie $movie)
    {
        $movie->delete();

        return redirect()->route('dashboard.home');
    }
}
