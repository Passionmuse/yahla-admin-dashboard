<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Models\UserCode;
use App\Mail\SendCodeMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class AccountSettingController extends Controller
{
  public function change_password(Request $request)
  // this is the code when user try to change your password.
  {
    $request->validate([
      'oldPassword' => 'required',

    ]);
    if (!Hash::check($request->oldPassword, $request->user()->password)) {
      return response()->json(['success' => false, 'message' => 'Current password is incorrect.']);
    } else {
      User::whereId($request->user()->id)->update([
        'password' => Hash::make($request->password)
      ]);
      return response()->json(['success' => true, 'message' => 'Password successfully updated.']);
    }
  }


  public function change_email(Request $request){

    // This is the code when user try to change your email..
    $request->validate([
      'oldEmail' => 'required|email',
      'newEmail' => 'required|email',
      'confirmEmail' => 'required|email|same:newEmail',
    ]);

    $code = UserCode::where('code' , $request->code)->first();
    if(isset($code)){

      $user = User::where('email' , $request->oldEmail)->first();
      if(isset($user)){

        $user->email = $request->newEmail;
        $user->update();
        $code->delete($code->id);
        return response()->json(['success' => true, 'message' => 'Email successfully updated.']);

      }else{
        return response()->json(['success' => false, 'message' => 'No user found with the email.']);
      }

    }else{
      return response()->json(['success' => false , 'message' => 'OPT code is incorrect.']);
    }

  }
  public function send_email_code(Request $request)
  {
    // First Run this Api to send the email that provided email.
    $request->validate([
      'oldEmail' => 'required|email',
    ]);

    $user = User::where('email', $request->oldEmail)->first();
    if (!$user) {
      return response()->json(['success' => false, 'message' => 'Email is not valid.']);
    } else {
      if ($request->NewEmail == $request->confirmEmail) {
        $code = rand(1000, 9999);
        UserCode::updateorCreate(
          ['user_id' => $user->id],
          ['code' => $code]
        );
        try {
          $details = [
            'title' => 'Mail from Yekhbun.org',
            'code' => $code,
            'username' => $user->username ?? '',
          ];
          Mail::to($request->oldEmail)->send(new SendCodeMail($details));
          return response()->json(['success' => true, 'message' => "Email Verfication code sent to your email"], 201);
        } catch (\Exception $e) {
          info("Error: " . $e->getMessage());
        }
      }
    }
  }

  public function resend_email_code(Request $request ){

    // This is the code when user click on resend button..
    $user = UserCode::with('user')->where('user_id', $request->user_id)->first();
    $code=  rand(1000, 9999);
    try{
      $details =[
        'title' => 'Mail from Yekhbun.org',
        'code' => $code,
        'username' => $user->user->username ?? '',
      ];
      Mail::to($request->NewEmail)->send(new SendCodeMail($details));
      $user->code = $code;
      $user->save();
      return response()->json(['success' => true, 'message' => "Email successfully resent. "]);
    }catch (\Exception $e){
      info("Error: " . $e->getMessage());
    }
  }

  public function upgrade_account(Request $request){
    $request->validate([
      'email' => 'required',
      'level' => 'required'
    ]);

    $user = User::where('email'  , $request->email)->first();

    if(isset($user)){
      
      $user->level = $request->level;
      $user->save();
      $levels = [
        0 => 'Standard',
        1 => 'Premium',
        2 => 'VIP'
      ];
      return response()->json(['success' => true, 'message' =>"User Upgrade to {$levels[$request->level]} Successfully."]);
    }else{
      return response()->json(['success' => false, 'message' =>'User not found.']);
    }
  } 
  
}