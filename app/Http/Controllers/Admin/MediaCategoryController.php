<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MediaCategory;
use Illuminate\Http\Request;

class MediaCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $media_category = MediaCategory::get();
        return view('content.media_category.index' , compact('media_category'));
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
            'media_category' => 'required'
        ]);

        $model = new MediaCategory();
        $model->name = $request->media_category;
        if($model->save()){
            return redirect()->route('media-category.index')->with('success', 'Media  Category Has been inserted');
        }else{
            return redirect()->route('media-category.index')->with('error', 'Failed to add media category');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MediaCategory  $mediaCategory
     * @return \Illuminate\Http\Response
     */
    public function show(MediaCategory $mediaCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MediaCategory  $mediaCategory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $media_category = MediaCategory::find($id);
        return view('content.media_category.edit', compact('media_category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MediaCategory  $mediaCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $music = MediaCategory::findorFail($id);
        $music->name = $request->media_category;
        if($music->update()){
           return redirect()->route('media-category.index')->with('success', 'Media Category Has been Updated');
       }else{
           return redirect()->route('media-category.index')->with('error', 'Failed to update media category');
       }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MediaCategory  $mediaCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $media = MediaCategory::findorFail($id);
        if($media->delete($media->id)){
            return redirect()->route('media-category.index')->with('success', 'Media Category Has been Deleted');
        }else{
            return redirect()->route('media-category.index')->with('error', 'Failed to delete Media category');
        }
    }
    public function status($id , $status){
        $media = MediaCategory::find($id);
        $media->status = $status;
        if($media->update()){
            return redirect()->route('media-category.index')->with('success', 'Status Has been Updated');
        }else{
            return redirect()->route('media-category.index')->with('error', 'Status is not changed');

        }
    }
}
