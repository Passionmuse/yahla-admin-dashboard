<?php

namespace App\Http\Controllers\apps\video;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Video extends Controller
{
  public function index()
  {

    return view('content.videos.index');
  }
  public function create()
  {

    return view('content.videos.create');
  }
}
