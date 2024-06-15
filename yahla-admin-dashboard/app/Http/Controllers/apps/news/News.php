<?php

namespace App\Http\Controllers\apps\news;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class News extends Controller
{
  public function index()
  {
    return view('content.news.index');
  }

  public function create(){
    return view('content.news.create');
  }
}
