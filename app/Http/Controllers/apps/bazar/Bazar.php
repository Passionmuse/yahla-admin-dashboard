<?php

namespace App\Http\Controllers\apps\bazar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Bazar extends Controller
{
  public function index()
  {
    return view('content.bazars.index');
  }

  public function show_category(){
    return view('content.bazars.show_category');
  }

}
