<?php

namespace App\Http\Controllers\apps\posts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Post extends Controller
{
  public function index()
  {
    return view('content.post.post');
  }
}
