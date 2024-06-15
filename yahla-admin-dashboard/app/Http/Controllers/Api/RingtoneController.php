<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ringtone;

class RingtoneController extends Controller
{
    // Get ringtone

    public function get(){
        $ringtone = Ringtone::get();
        if($ringtone->isEmpty()){
            return response()->json(['success' => false, 'data' => []]);
        }else{
            return response()->json(['success' => true, 'data' => $ringtone]);
        }
    }
}
