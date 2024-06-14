<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ringtone;
use Illuminate\Http\Request;

class RingtoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ringtones  = Ringtone::get();
        return view('content.ringtone.index' , compact('ringtones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //echo "<pre>";print_r($request->all());exit;
        // $request->validate([
        //     'ringtone_path' => 'required|mimes:mp3,ogg|max:20480', // max size 20MB
        // ]);

        $ringtone  = new Ringtone();
        $ringtone->title = $request->title;
        $ringtone->ringtone_path = $request->ringtone_path[0] ?? null;
        // if($request->has('ringtone')){
        //     $path = $request->file('ringtone')->store('/images/ringtone/','public');
        //     $ringtone->ringtone_path = $path;
        // }
        if($ringtone->save()){
            return redirect()->back()->with('success' , 'Ringtone was successfully created');
        }else{
            return redirect()->back()->with('success' , 'Ringtone was not created successfully');

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ringtone  $ringtone
     * @return \Illuminate\Http\Response
     */
    public function show(Ringtone $ringtone)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ringtone  $ringtone
     * @return \Illuminate\Http\Response
     */
    public function edit(Ringtone $ringtone)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ringtone  $ringtone
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Find the existing ringtone record
        $ringtone = Ringtone::find($id);
        
        if (!$ringtone) {
            return redirect()->back()->with('danger', 'Ringtone not found');
        }
    
        // Update the title
        $ringtone->title = $request->title;
    
        // Update the ringtone path if a new file is uploaded
        if ($request->hasFile('ringtone_path')) {
            // Delete the old ringtone file if it exists
            if ($ringtone->ringtone_path) {
                $oldPath = storage_path('app/public/' . $ringtone->ringtone_path);
                if (file_exists($oldPath)) {
                    unlink($oldPath);
                }
            }
    
            // Store the new ringtone file
            $path = $request->file('ringtone_path')->store('/ringtones', 'public');
            $ringtone->ringtone_path = $path;
        }
    
        // Save the updated record
        if ($ringtone->save()) {
            return redirect()->back()->with('success', 'Ringtone was successfully updated');
        } else {
            return redirect()->back()->with('danger', 'Ringtone was not updated successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ringtone  $ringtone
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ringtone = Ringtone::find($id);
        if(isset($ringtone->ringtone_path)){
           $img_path = public_path('storage/'.$ringtone->ringtone_path);
           if(file_exists($img_path)){
             unlink($img_path);
           }
        }
        if($ringtone->destroy($ringtone->id)){
         return redirect()->route('ringtone.index')->with('success' , 'Ringtone was Deleted successfully');
 
        }else{
         return redirect()->route('ringtone.index')->with('success' , 'Ringtone was not  Deleted ');
 
        }
    }

    public function deleteRingtone($id)
    {
       // echo $id;exit;
        $ringtone = Ringtone::find($id);
        if ($ringtone && isset($ringtone->ringtone_path)) {
            $path = public_path('storage/' . $ringtone->ringtone_path);
            if (file_exists($path)) {
                unlink($path);
            }
    
            // Remove the image filename from the model attribute
            if(!empty($ringtone)){
                $ringtone->delete(); 
            }
          
        }
        return redirect()->back()->with('success' , 'Ringtone  Deleted  Successfully');
    }
}
