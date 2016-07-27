<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TicketsController extends Controller
{
     public function __construct()
     {
         return $this->middleware('auth');
     }

     public function store()
     {
        return view('pages.tickets.index');
     }
}
