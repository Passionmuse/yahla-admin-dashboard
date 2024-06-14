<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\MusicCategory;
use Illuminate\Http\Request;

class MusicCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $music_category = MusicCategory::get();
        return view('content.music-category.index' , compact('music_category'));
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
            'music_category' => 'required'
        ]);

        $model = new MusicCategory();
        $model->name = $request->music_category;
       $model->icon = $request->icon??null;
        if($model->save()){
            return redirect()->route('music-category.index')->with('success', 'Music Category Has been inserted');
        }else{
            return redirect()->route('music-category.index')->with('error', 'Failed to add music category');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MusicCategory  $musicCategory
     * @return \Illuminate\Http\Response
     */
    public function show(MusicCategory $musicCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MusicCategory  $musicCategory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $music_category = MusicCategory::find($id);
        return view('content.music-category.edit', compact('music_category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MusicCategory  $musicCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
   
        $music = MusicCategory::findorFail($id);
         $music->name = $request->music_category;
         $music->icon = $request->icon??null;

         if($music->update()){
            return redirect()->route('music-category.index')->with('success', 'Music Category Has been Updated');
        }else{
            return redirect()->route('music-category.index')->with('error', 'Failed to update music category');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MusicCategory  $musicCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $music = MusicCategory::findorFail($id);
        if($music->delete($music->id)){
            return redirect()->route('music-category.index')->with('success', 'Music Category Has been Deleted');
        }else{
            return redirect()->route('music-category.index')->with('error', 'Failed to delete music category');
        }
    }
    public function status($id , $status){
        $music = MusicCategory::find($id);
        $music->status = $status;
        if($music->update()){
            return redirect()->route('music-category.index')->with('success', 'Status Has been Updated');
        }else{
            return redirect()->route('music-category.index')->with('error', 'Status is not changed');

        }
    }
    public function deleteMusic($id)
    {
        $music = MusicCategory::find($id);
        if ($music && isset($music->icon)) {
            $path = public_path('storage/' . $music->icon);
            if (file_exists($path)) {
                unlink($path);
            }
    
            // Remove the image filename from the model attribute
            $music->icon = null;
            $music->save();
        }
        
        return [
            'status' => true
        ];
    }
}
