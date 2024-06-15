<?php
namespace App\Http\Controllers\Admin\Currency;

use App\Traits\UploadMedia;
use Illuminate\Http\Request;
use App\Models\TicketService;
use App\Http\Controllers\Controller;

class CurrencyController extends Controller
{
    public function index(){
        return view('content.currency.index');
    }
}