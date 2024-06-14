<?php

namespace App\Http\Controllers\apps\media;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Media extends Controller
{
  public function index()
  {
    return view('content.medias.index');
  }
  public function create(){
    return view('content.medias.create');
  }
}
