<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\VideoClip;
use Illuminate\Http\Request;
use App\Models\MusicCategory;

class VideoClipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
   {
        $video  = VideoClip::with('music_category')->get();
        $music_category  = MusicCategory::get();
        $artists = Artist::get();
        return view('content.video_clips.index' , compact('video' , 'music_category' , 'artists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
     {
         //     return view('content.video_clips.create' , compact('music_category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $ringtone  = new VideoClip();
        $ringtone->artists_id = $request->artists_id;
        $ringtone->status = $request->status;
        $ringtone->video = $request->video[0] ?? null;
       
        // if($request->has('ringtone')){
        //     $path = $request->file('ringtone')->store('/images/ringtone/','public');
        //     $ringtone->ringtone_path = $path;
        // }
        if($ringtone->save()){
            return redirect()->back()->with('success' , 'Album was successfully created');
        }else{
            return redirect()->back()->with('success' , 'Album was not created successfully');

        }
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Music  $music
     * @return \Illuminate\Http\Response
     */
    public function show(VideoClip $music)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Music  $music
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $video = VideoClip::findorFail($id);
        $music_category = MusicCategory::get();
        return view('content.video_clips.edit' , compact('music_category' , 'video'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Music  $music
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      
        $video = VideoClip::findorFail($id);
        $video->name = $request->title;
        $video->category_id = $request->category_id;
        $video->artist_id = $request->artist_id;
        $video->video = $request->video_paths ?? [];
        $video->status = $request->status;        
        if($video->update()){
            return redirect()->back()->with('success', 'Video Has been Updated');

        }else{
            return redirect()->back()->with('success', 'Video not updated');

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Music  $music
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $video = VideoClip::findorFail($id);
        if($video->audio){
            foreach($video->video as $video_file){
                $image_path = public_path('storage/'.$video_file);
                if(file_exists($image_path)){
                    unlink($image_path);
                }
            }
        }

        if($video->delete($video->id)){
           return redirect()->route('video-clips.index')->with('success', 'Video  Has been Deleted');

        }else{
           return redirect()->route('video-clips.index')->with('success', 'Video not Deleted');

        }
    }
    public function status($id , $status){
        $video = VideoClip::find($id);
       
        $video->status = $status;
        if($video->update()){
            return redirect()->route('video-clips.index')->with('success', 'Status Has been Updated');
        }else{
            return redirect()->route('video-clips.index')->with('error', 'Status is not changed');

        }
    }

    public function deleteVideo(Request $request, $id)
    {
        $video = VideoClip::find($id);
        $video->video = array_filter($video->video, function ($path) use ($request) {
            return !($path === $request->path); 
        });
        $video->save();
        unlink(public_path('storage/' . $request->path));
        return [
            'status' => true
        ];
    }
}
