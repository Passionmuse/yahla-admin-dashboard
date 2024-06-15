<?php

namespace App\Http\Controllers\fanpage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FanPage extends Controller
{
  public function new_request_index()
  {
    return view('content.fan-page.new-request');
  }
  public function manage_fan_page_index(){
    return view('content.fan-page.manage-fan-page');
  }
  public function block_fan_page_index(){
    return view('content.fan-page.block-fan-page');
  }
}
