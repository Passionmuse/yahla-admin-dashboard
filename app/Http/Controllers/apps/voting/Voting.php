<?php

namespace App\Http\Controllers\apps\voting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Voting extends Controller
{
  public function index()
  {
    return view('content.votings.index');
  }

  public function create(){
    return view('content.votings.create');
  }
}
