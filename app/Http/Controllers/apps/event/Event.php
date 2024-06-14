<?php

namespace App\Http\Controllers\apps\event;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Event extends Controller
{
  public function index()
  {
    return view('content.events.index');
  }

  public function create(){
    return view('content.events.create');
  }
}
