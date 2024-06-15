<?php

namespace App\Http\Controllers\apps\history;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class History extends Controller
{
  public function index()
  {
    return view('content.history.index');
  }

  public function create(){
    return view('content.history.create');
  }
}
