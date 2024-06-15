<?php

namespace App\Http\Controllers\apps\donation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Donation extends Controller
{
  public function index()
  {
    return view('content.donations.index');
  }

  public function create(){
    return view('content.donations.create');
  }
}
