<?php

namespace App\Http\Controllers\apps\Premium;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class pUserViewBilling extends Controller
{
  public function index()
  {
    return view('content.apps.Premium.app-user-view-Videos');
  }
}
