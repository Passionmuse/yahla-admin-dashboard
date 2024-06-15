<?php

namespace App\Http\Controllers;
use App\Models\AppInfo;

use Illuminate\Http\Request;

class AppInfoController extends Controller
{

    public function index(){
        $appinfo = AppInfo::latest()->first();
        return view('content.apps.app-appinfo',compact('appinfo'));
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'address' => 'nullable|string',
            'apartment' => 'nullable|string',
            'phone' => 'nullable|string',
            'city' => 'nullable|string',
            'state' => 'nullable|string',
            'pincode' => 'nullable|string',
            'country_region' => 'nullable|string',
        ]);
      
        // Remove null values from the validated data
        $filteredData = array_filter($validatedData, function ($value) {
            return $value !== null;
        });
    
        
if ($request->hasFile('image')) {
    $imageName = time() . '.' . $request->image->extension();
    $request->image->move(public_path('images'), $imageName);
    $filteredData['image'] = 'images/' . $imageName;
}

    
        // Create a new instance of AppInfo model with filtered data
        $appInfo = new AppInfo($filteredData);
    
        // Save the new record to the database
        $appInfo->save();
    
        // Redirect the user to a specific route after successful storage
        return redirect()->back()->with('success', 'App info stored successfully.');
    }
    


}
