<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use App\Models\UserCode;
use Illuminate\Support\Facades\Auth;

class TwoFAController extends Controller
{
    public function index()
    {
        $pageConfigs = ['myLayout' => 'blank'];
        return view('content.2FA.2fa', ['pageConfigs' => $pageConfigs]);
    }
     
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function store(Request $request)
    {
        $request->validate([
            'otp'=>'array|required'
        ]);
        // $code  = $request->otp_1.''.$request->otp_2.''.$request->otp_3.''.$request->otp_4.''.$request->otp_5.''.$request->otp_6;
        $code = implode('',$request->otp);
        $find = UserCode::where('user_id', auth()->user()->id)
                        ->where('code', $code)
                        ->where('updated_at', '>=', now()->subMinutes(2))
                        ->first();
  
        if (!is_null($find)) {
            Session::put('user_2fa', auth()->user()->id);
            activity()
                ->event('logged_in')
                ->log("<strong>" . Auth::user()->name . "</strong> logged in");
           return redirect()->intended(route('dashboard-analytics'));
        }
  
        return back()->with('error', 'You entered wrong code.');
    }
      /**
     * Write code on Method
     *
     * @return response()
     */
    public function resend()
    {
        auth()->user()->generateCode();
  
        return back()->with('success', 'We sent you code on your email.');
    }


    public function check(){
        $imageName = 'logo.png';
        // Path to the image file
$imagePath = public_path('assets/img/'.$imageName);

// Get the MIME type of the image
$mime = mime_content_type($imagePath);

// Read the image file contents
$imageData = file_get_contents($imagePath);

// Encode the image data as base64
$base64Data = base64_encode($imageData);

// Create the data URI
$dataURI = 'data:' . $mime . ';base64,' . $base64Data;

        return view('content.emails.code' , compact('dataURI'));
    }
}
