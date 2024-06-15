<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Task extends Controller
{
  public function index()
  {
  return view('content.apps.app-task-list');
  }
}
