<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\UploadVideoCategory;
use Illuminate\Http\Request;

class UploadVideoCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $video_category = UploadVideoCategory::get();
        return view('content.upload_video_category.index' , compact('video_category'));
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
            'video_category' => 'required'
        ]);

        $model = new UploadVideoCategory();
        $model->category = $request->video_category;
        if($model->save()){
            return redirect()->route('upload-video-category.index')->with('success', 'Video Category Has been inserted');
        }else{
            return redirect()->route('upload-video-category.index')->with('error', 'Failed to add video category');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UploadVideoCategory  $uploadVideoCategory
     * @return \Illuminate\Http\Response
     */
    public function show(UploadVideoCategory $uploadVideoCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UploadVideoCategory  $uploadVideoCategory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $video_category = UploadVideoCategory::find($id);
        return view('content.upload_video_category.edit', compact('video_category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UploadVideoCategory  $uploadVideoCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
          
        $video = UploadVideoCategory::findorFail($id);
         $video->category = $request->video_category;
         if($video->update()){
            return redirect()->route('upload-video-category.index')->with('success', 'Video Category Has been Updated');
        }else{
            return redirect()->route('upload-video-category.index')->with('error', 'Failed to update video category');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UploadVideoCategory  $uploadVideoCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $video = UploadVideoCategory::findorFail($id);
        if($video->delete($video->id)){
            return redirect()->route('upload-video-category.index')->with('success', 'Video Category Has been Deleted');
        }else{
            return redirect()->route('upload-video-category.index')->with('error', 'Failed to delete Video category');
        }
    }

    public function status($id , $status){
        $video = UploadVideoCategory::find($id);
        $video->status = $status;
        if($video->update()){
            return redirect()->route('upload-video-category.index')->with('success', 'Status Has been Updated');
        }else{
            return redirect()->route('upload-video-category.index')->with('error', 'Status is not changed');

        }
    }
}
