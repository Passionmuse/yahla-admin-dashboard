<?php

namespace App\Http\Controllers\apps\Vip;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class vUserViewBilling extends Controller
{
  public function index()
  {
    return view('content.apps.Vip.app-user-view-Videos');
  }
}
