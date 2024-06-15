<?php

namespace App\Http\Controllers\apps\Standard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class sUserViewConnections extends Controller
{
  public function index()
  {
    return view('content.apps.Standard.app-user-view-Location');
  }
}
