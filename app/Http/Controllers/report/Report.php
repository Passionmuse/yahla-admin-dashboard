<?php

namespace App\Http\Controllers\report;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Report extends Controller
{
  public function user_report()
  {
    return view('content.reports.report');
  }
  public function user_warning(){
    return view('content.reports.warning');
  }
}
