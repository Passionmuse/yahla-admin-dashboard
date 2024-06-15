<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BackgroundFeed;
use Illuminate\Http\Request;
use App\Traits\UploadMedia;
use Intervention\Image\Facades\Image;
class BackgroundFeedController extends Controller
{
    use UploadMedia;
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
            'image' => 'required|max_image_dimensions:375,314',
        ]);

        $background = new BackgroundFeed();
        $background->image =  $request->image??null;

        if ($background->save()) {
            return redirect()->back()->with('success', 'Background feed successfully added.');
        } else {
            return redirect()->back()->with('errors', 'Failed to add background feed.');
     }
     
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
    

      $inputfiled = "image_$id";
    //   return $request->input($inputfiled);

        $request->validate([
            'image_'.$id => 'nullable|max_image_dimensions:375,314',
        ]);

        $background = BackgroundFeed::find($id);
        $background->image = $request->input($inputfiled)??null;

        if ($background->update()) {
            return redirect()->back()->with('success', 'Background Feed updated successfully.');
        } else {
            return redirect()->back()->with('success', 'Failed to update Background Feed.');
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
        $background = BackgroundFeed::find($id);
        if (isset($background->image)) {
            $image_path = public_path('storage/' . $background->image);
            if (file_exists($image_path)) {
                unlink($image_path);
            }
        }
        if ($background->destroy($id)) {
            return redirect()->back()->with('success', 'Background Feed has been removed sucessfully.');
        } else {
            return redirect()->back()->with('error', 'Background Feed has not  been removed .');
        }
    }
    
    public function deleteImage($id)
    {
        $music = BackgroundFeed::find($id);
        if ($music && isset($music->image)) {
            $path = public_path('storage/' . $music->image);
            if (file_exists($path)) {
                unlink($path);
            }
    
            // Remove the image filename from the model attribute
            $music->image = null;
            $music->save();
        }
        
        return [
            'status' => true
        ];
    }
}
