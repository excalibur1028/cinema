<?php
namespace App\Http\Controllers;

use Auth;
use App\Ticket;
use App\Movie;
use App\User;
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
        $tickets = Auth::user()->tickets()->whereCompleted(false)->latest()->get();

        return view('pages.tickets.index', compact('tickets'));
     }

     public function completed()
     {
        $tickets = Auth::user()->tickets()->whereCompleted(true)->latest()->get();

        return view('pages.tickets.completed', compact('tickets'));
     }

     public function store(CreateTicket $request)
     {
        $user = Auth::user()->id;

        $total = $this->subTotal($request);

       Ticket::create($request->all() + ['user_id' => $user, 'price' => $total]);

        return redirect()->route('tickets.index');
     }

     public function purchase(Request $request)
     {
        $user = Auth::user();

        if($user->hasBraintreeId()){
            $user->charge($user->tickets->first()->getPriceToDollar());
        }
        else{
            $user->createAsBraintreeCustomer($request->get('payment_method_nonce'));
            $user->charge($user->tickets->first()->getPriceToDollar());
        }

        foreach($user->tickets as $ticket)
        {
            $ticket->completed = true;
            $ticket->save();
        }

        flash()->overlay('Transaction Completed', 'Thank You');

        return redirect()->route('tickets.completed');
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
