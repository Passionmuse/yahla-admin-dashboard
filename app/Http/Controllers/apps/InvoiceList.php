<?php

namespace App\Http\Controllers\apps;

use App\Http\Controllers\Controller;
use App\Models\GenerateInvoice;
use Illuminate\Http\Request;

class InvoiceList extends Controller
{
  public function index()
  {
    $user_invoice =  GenerateInvoice::with('user')->latest()->get();
    return view('content.apps.app-invoice-list',compact('user_invoice'));
  }
}
