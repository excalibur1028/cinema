<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Movie;

class DashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $movies = Movie::all();

        return view('pages.dashboard.index', compact('movies'));
    }
}
