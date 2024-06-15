<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MediaCategory;

class MediaCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(['Media Category' =>MediaCategory::get()] , 200);
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
            'name' => 'required',
           
          ]);

        $media = MediaCategory::create([
               'name' => $request->name,
           ]);
          return response()->json([
           "success" => true,
           "message" => "Meida Category successfully created.",
           "data" => $media
       ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $media = MediaCategory::findorFail($id);
        $media->name = $request->name ?? $media->name;
        if($media->update()){
           return response()->json('Media Category Updated Successfully' , 200);
        }else{
           return response()->json('Failed to updated media category' , 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $media = MediaCategory::findorFail($id);
        if($media->delete($media->id)){
          return response()->json('Media Category Deleted Successfully' ,200);
        }else{
           return response()->json('Failed to delete media category' , 400);
        }
    }
}
