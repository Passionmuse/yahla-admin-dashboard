<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Invoice;
class InvoiceController extends Controller
{
    

    public function update_address(Request $request){
    
      
        $address = new Invoice();
        $address = Invoice::first() ?? $address;
        $address->address = $request->address;
        $address->title = $request->title;
        $address->logo = $request->logo??null;
        if($address->save()){
            return back()->with('success' , 'Address updated successfully');
        }
    }
}
