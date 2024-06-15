<?php

namespace App\Http\Controllers\apps\Premium;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class pUserViewNotifications extends Controller
{
  public function index()
  {
    return view('content.apps.Premium.app-user-view-Activity');
  }
}
