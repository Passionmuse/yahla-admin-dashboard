<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;

use Spatie\Activitylog\Models\Activity;

class AdminProfileController extends Controller
{
    public function index(){

        $user = Auth::user();

        $activity = Auth::user()->actions()->orderBy('created_at', 'DESC')->paginate(20);
        // return view('content.admin_profile.index', compact("activity"));
        return view('content.pages.pages-account-settings-account' , compact('activity','user'));
    }
    
     public function admin_activity(){


       
        return view('content.pages.admin_activity' );
    }
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'f_name' => 'required|string|max:255',
            'l_name' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:20',
            'email' => 'required|string|email|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        // Fetch the authenticated user's profile
        $profile = User::find(auth()->user()->id);
    
        // Update the profile fields with the request data
        $profile->f_name = $request->f_name;
        $profile->l_name = $request->l_name;
        $profile->phone = $request->phone;
        $profile->email = $request->email;
    
        // Handle the image upload if a new image is provided
        if ($request->hasFile('image')) {
            $destination = 'uploads/students/'.$profile->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/students/', $filename);
            $profile->image = $filename;  // Store only the filename
        }
    
        // Save the profile and provide feedback to the user
        if ($profile->save()) {
            return back()->with('success', 'Your profile has been updated');
        } else {
            return back()->with('error', 'Failed to update your profile');
        }
    }
    


    public function security(){
        return view('content.pages.pages-account-settings-security');
    }

    public function enable(Request $request){

        if($request->has('enable')){
             auth()->user()->enable_2fa  = true;
             auth()->user()->save();
             return back()->with('success', 'Two Factor Authentication Enabled');
        }else{
            auth()->user()->enable_2fa  = false;
            auth()->user()->save();
            return back()->with('error', 'Two Factor Authentication Disabled');
        }

    }

    public function account(){
        $activity = Auth::user()->actions()->orderBy('created_at', 'DESC')->paginate(20);

        return view('content.pages.pages-account-settings-account' , compact('activity'));
    }
    public function billing(){
        return view('content.pages.pages-account-settings-billing');
    }
    public function notification(){
        return view('content.pages.pages-account-settings-notifications');
    }
    public function connection(){
        return view('content.pages.pages-account-settings-connections');
    }

    public function change_password(Request $request)
    {
        $request->validate([
            'currentPassword' => 'required',
            'newPassword' => 'required',
            'confirmPassword' => 'required'
        ]);
        if(!Hash::check($request->currentPassword, auth()->user()->password)){
            return back()->with("error", "Old Password Doesn't match!");
        }else{
            if($request->newPassword == $request->confirmPassword){

                 User::whereId(auth()->user()->id)->update([
                        'password' => Hash::make($request->newPassword)
                    ]);
                    return back()->with("success", "Password changed successfully!");

             }else{
                return back()->with('error', 'Your New Password  and Confirm Password  is not matched');
             }
        }
    }
}
