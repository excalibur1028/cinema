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

     public function store(CreateTicket $request)
     {
        $user = Auth::user()->id;

        $total = $this->subTotal($request);

       Ticket::create($request->all() + ['user_id' => $user, 'price' => $total]);

        return redirect()->route('tickets.index');
     }

     protected function getMovie(CreateTicket $request)
     {
         return Movie::findOrFail($request->input('movie_id'));
     }

     protected function subTotal(CreateTicket $request)
     {
         return $request->input('quantity') * $this->getMovie($request)->price;
     }
}
