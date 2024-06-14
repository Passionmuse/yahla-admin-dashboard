<?php

namespace App\Http\Controllers\apps\tickets;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Ticket extends Controller
{
  public function index()
  {

    return view('content.tickets.index');
  }
}
