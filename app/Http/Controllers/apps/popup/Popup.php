<?php

namespace App\Http\Controllers\apps\popup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Popup extends Controller
{
    public function index(){
      return view('content.apps.app-popup');
    }
}
