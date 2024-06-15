<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Media;
class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(['Media ' =>Media::get()] , 200);
        
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
            'title' => 'required',
            'category_id' => 'required'
        ]);
          $imagePath  = $request->image;
          if($request->hasFile('image')){
                    $path = $request->file('image')->store('/images/media/' , 'public');
                    $imagePath = $path;
             }

        $media = Media::create([
               'title' => $request->title,
               'images' => $imagePath,
               'category_id' => $request->category_id,
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
        $media = Media::find($id);
        $media->title=$request->title ?? $media->title;
        $media->category_id = $request->category_id ?? $media->category_id;
        
        if($request->hasFile('image')){
            if(isset($media->images)){
                $image_path = public_path('storage/'.$media->images);
                if(isset($image_path)){
                    unlink($image_path);
                }
                $path  = $request->file('image')->store('/images/media/'  , 'public');
                $media->images = $path;
            }
        }

        if($media->update()){
            return response()->json('Media  Updated Successfully' , 200);
         }else{
            return response()->json('Failed to updated media' , 400);
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
        $media = Media::findorFail($id);
        if($media->images){
            $image_path = public_path('storage/'.$media->images);
            if(isset($image_path)){
                unlink($image_path);
            }
        }
        if($media->delete($media->id)){
            return response()->json('Meida  Deleted Successfully' , 200);
         }else{
            return response()->json('Failed to delete media' , 400);
         }
    }
}
