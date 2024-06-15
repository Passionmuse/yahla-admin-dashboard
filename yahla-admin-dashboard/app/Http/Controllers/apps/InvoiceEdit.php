<?php

namespace App\Http\Controllers\apps;

use App\Models\Invoice;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InvoiceEdit extends Controller
{
  public function index()
  {
    $address = Invoice::first();
    return view('content.apps.app-invoice-edit' , compact('address'));
  }
}
