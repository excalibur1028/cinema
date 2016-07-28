<?php
namespace App\Http\Controllers;

use Auth;
use App\Ticket;
use App\Movie;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\CreateTicket;

class TicketsController extends Controller
{
     public function __construct()
     {
         return $this->middleware('auth');
     }

     public function index()
     {
         $tickets = Auth::user()->tickets;

         return view('pages.tickets.index', compact('tickets'));
     }

     public function store(Movie $movie, CreateTicket $request)
     {
        $user = Auth::user()->id;
        $movie = $movie->id;

       Ticket::create($request->all() + ['user_id' => $user] + ['movie_id' => $movie]);

        return redirect()->route('tickets');
     }
}
