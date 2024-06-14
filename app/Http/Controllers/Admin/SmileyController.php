<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Smiley;
use Illuminate\Http\Request;

class SmileyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $smileys  = Smiley::get();
        return view('content.smiley.index' , compact('smileys'));
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
        $request->validate([
            'smiley' => 'required'
        ]);

        $smiley  = new Smiley();
        $smiley->name = $request->title;
        $smiley->code = $request->code;
        $smiley->smiley_path = $request->smiley;

        // if($request->has('smiley')){
        //     $path = $request->file('smiley')->store('/images/smiley/','public');
        //     $smiley->smiley_path = $path;
        // }

        if($smiley->save()){
            return redirect()->route('smiley.index')->with('success' , 'Smiley was successfully created');
        }else{
            return redirect()->route('smiley.index')->with('success' , 'Smiley was not created successfully');

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Smiley  $smiley
     * @return \Illuminate\Http\Response
     */
    public function show(Smiley $smiley)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Smiley  $smiley
     * @return \Illuminate\Http\Response
     */
    public function edit(Smiley $smiley)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Smiley  $smiley
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $smiley  =Smiley::find($id);
        $smiley->name = $request->title;
        $smiley->code = $request->code;
        $smiley->smiley_path = $request->smiley;
        // if($request->has('smiley')){
        //     if(isset($smiley->smiley_path)){
        //         $img_path = public_path('storage/'.$smiley->smiley_path);
        //         if(file_exists($img_path)){
        //             unlink($img_path);
        //         }
        //         $path = $request->file('smiley')->store('/images/smiley/','public');
        //         $smiley->smiley_path = $path;
        //     }
            
        // }
        if($smiley->update()){
            return redirect()->route('smiley.index')->with('success' , 'Smiley was successfully Updated');
        }else{
            return redirect()->route('smiley.index')->with('success' , 'Smiley was not updated successfully');

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Smiley  $smiley
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $smiley = Smiley::find($id);
       if(isset($smiley->smiley_path)){
          $img_path = public_path('storage/'.$smiley->smiley_path);
          if(file_exists($img_path)){
            unlink($img_path);
          }
       }
       if($smiley->destroy($smiley->id)){
        return redirect()->route('smiley.index')->with('success' , 'Smiley was Deleted successfully');

       }else{
        return redirect()->route('smiley.index')->with('success' , 'Smiley was not  Deleted ');

       }
    }

    public function deleteSmiley($id)
    {
        $smiley = Smiley::find($id);
        if ($smiley && isset($smiley->smiley_path)) {
            $path = public_path('storage/' . $smiley->smiley_path);
            if (file_exists($path)) {
                unlink($path);
            }
    
            // Remove the image filename from the model attribute
            $smiley->smiley_path = null;
            $smiley->save();
        }
        
        return [
            'status' => true
        ];
    }
}
