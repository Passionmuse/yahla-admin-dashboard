<?php

namespace App\Http\Controllers\musics\artist;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Artist extends Controller
{
  public function index()
  {
    return view('content.musics.artist.index');
  }
  public function create(){
    return view('content.musics.artist.create');
  }
}
