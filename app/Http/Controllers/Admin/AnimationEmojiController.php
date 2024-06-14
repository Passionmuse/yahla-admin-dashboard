<?php

namespace App\Http\Controllers\Admin;

use App\Traits\UploadMedia;
use Illuminate\Http\Request;
use App\Models\AnimationEmoji;
use App\Http\Controllers\Controller;

class AnimationEmojiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
            // 'emoji' => 'required|max_emoji_dimensions:60,60',
            'emoji' => 'required',
            
        ]);

        $animated = new AnimationEmoji();
        $animated->emoji = $request->emoji??null;
        if($animated->save()){
            return redirect()->back()->with('success'  , 'Animated Emoji successfully added.');
        }else{
            return redirect()->back()->with('error'  , 'Failed to add Animatd Emoji feed.');

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AnimationEmoji  $animationEmoji
     * @return \Illuminate\Http\Response
     */
    public function show(AnimationEmoji $animationEmoji)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AnimationEmoji  $animationEmoji
     * @return \Illuminate\Http\Response
     */
    public function edit(AnimationEmoji $animationEmoji)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AnimationEmoji  $animationEmoji
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
   
        $inputfiled = "emoji_$id";
        $request->validate([
            'emoji_'.$id => 'nullable',
        ]);
        $animated = AnimationEmoji::find($id);
        $animated->emoji = $request->input($inputfiled)??null;
        if($animated->update()){
            return redirect()->back()->with('success' , 'Animated Emoji updated successfully.');
        }else{
            return redirect()->back()->with('success' , 'Failed to update Animated Emoji .');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AnimationEmoji  $animationEmoji
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $animated = AnimationEmoji::find($id);
        if(isset($animated->emoji)){
            $emoji_path = public_path('storage/'.$animated->emoji);
            if(file_exists($emoji_path)){
                unlink($emoji_path);
            }
        }
        if($animated->destroy($id)){
            return redirect()->back()->with('success' , 'Animated Emoji has been removed sucessfully.');
        }else{
            return redirect()->back()->with('error' , 'Animated Emoji has not  been removed .');

        }
    }
     
    public function deleteImage($id)
    {
        $music = AnimationEmoji::find($id);
        if ($music && isset($music->emoji)) {
            $path = public_path('storage/' . $music->emoji);
            if (file_exists($path)) {
                unlink($path);
            }
    
            // Remove the image filename from the model attribute
            $music->emoji = null;
            $music->save();
        }
        
        return [
            'status' => true
        ];
    }
}
