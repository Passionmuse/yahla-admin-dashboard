<?php

namespace App\Http\Controllers\apps\Vip;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class vUserViewNotifications extends Controller
{
  public function index()
  {
    return view('content.apps.Vip.app-user-view-Activity');
  }
}
