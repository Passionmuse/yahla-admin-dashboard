<?php

namespace App\Http\Controllers\apps\school;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class School extends Controller
{
  public function index()
  {

    return view('content.schools.index');
  }
  public function create()
  {

    return view('content.schools.create');
  }
}
