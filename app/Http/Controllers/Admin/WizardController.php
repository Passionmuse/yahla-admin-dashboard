<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WizardController extends Controller
{
    public function wizard_ex_checkout(){
        return view('content.wizard-example.wizard-ex-property-listing');
    }
}