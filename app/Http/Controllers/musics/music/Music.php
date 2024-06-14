<?php

namespace App\Http\Controllers\musics\music;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Music extends Controller
{
  public function index()
  {
    return view('content.musics.music.index');
  }

  public function create(){
    return view('content.musics.music.create');
  }
  
  
}
