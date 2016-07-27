<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\CreateTicket;
use Auth;
use App\Ticket;

class TicketsController extends Controller
{
     public function __construct()
     {
         return $this->middleware('auth');
     }

     public function store(CreateTicket $request)
     {
        $user = Auth::user()->id;

       $test =  Ticket::create($request->all() + ['user_id' => $user]);

       dd($test);

        return view('pages.tickets.index');
     }
}
