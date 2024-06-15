<?php

namespace App\Http\Controllers\Admin;
use App\Models\Music;
use App\Models\Artist;
use Illuminate\Http\Request;
use App\Models\MusicCategory;
use App\Models\Country;
use App\Http\Controllers\Controller;

class MusicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
   {
        
        // phpinfo();
        // exit();

        $type  = $request->segments()[0];
        $music  = Music::where('type',$type)->with('music_category')->get();
        $music_category  = MusicCategory::get();
        $artists = Artist::get();
        return view('content.music.index' , compact('music' , 'music_category' , 'artists' , 'type'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
     {
         //     return view('content.music.create' , compact('music_category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
 
        $ringtone  = new Music();
        $ringtone->artists_id = $request->artists_id;
        $ringtone->status = $request->status;
        $ringtone->audio = $request->audio[0] ?? null;
        // if($request->has('ringtone')){
        //     $path = $request->file('ringtone')->store('/images/ringtone/','public');
        //     $ringtone->ringtone_path = $path;
        // }
        if($ringtone->save()){
            return redirect()->back()->with('success' , 'Music was successfully created');
        }else{
            return redirect()->back()->with('success' , 'Music was not created successfully');

        }
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Music  $music
     * @return \Illuminate\Http\Response
     */
    public function show(Music $music)
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
        $music = Music::findorFail($id);
        $music_category = MusicCategory::get();
        return view('content.music.edit' , compact('music_category' , 'music'));
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

        $music = Music::findorFail($id);
        $music->name = $request->title;
        $music->category_id = $request->category_id;
        $music->artist_id = $request->artist_id;
        $music->audio = $request->audio_paths ?? [];
        $music->status = $request->status;
        if($music->update()){
            return redirect()->back()->with('success', 'Music Has been Updated');

        }else{
            return redirect()->back()->with('success', 'Music not updated');

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
        $music = Music::findorFail($id);
        if($music->audio){
            foreach($music->audio as $audio_file){
                $image_path = public_path('storage/'.$audio_file);
                if(file_exists($image_path)){
                    unlink($image_path);
                }
            }
        }

        if($music->delete($music->id)){
           return redirect()->route('music.index')->with('success', 'Music  Has been Deleted');

        }else{
           return redirect()->route('music.index')->with('success', 'Music not Deleted');

        }
    }
    public function status($id , $status){
        $music = Music::find($id);

        $music->status = $status;
        if($music->update()){
            return redirect()->route('music.index')->with('success', 'Status Has been Updated');
        }else{
            return redirect()->route('music.index')->with('error', 'Status is not changed');

        }
    }

    public function deleteMusic(Request $request, $id)
    {
        $music = Music::find($id);
        $music->image = array_filter($music->audio, function ($path) use ($request) {
            return !($path === $request->path);
        });
        $music->save();
        unlink(public_path('storage/' . $request->path));
        return [
            'status' => true
        ];
    }

    public function pricing()
    {
      return view('content.music.pricing');
    }
    
     public function video()
     {
        return view('content.video_clips.view');
      }
      
         public function country()
     {
            $countries = Country::orderBy("name", "ASC")->get();
        return view('content.music.country',compact('countries'));
      }
      
     
  
}
