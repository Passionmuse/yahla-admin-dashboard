<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\BackgroundFeed;
use App\Traits\UploadMedia;

class FeedBackgroundImageController extends Controller
{
    use UploadMedia;

    public function upload(Request $request){
        
        $feed = new BackgroundFeed();
        $feed->title = $request->title;
        
        if ($request->hasFile('image'))
            $path = UploadMedia::index($request->file('image'));

        $feed->image = $path ?? '';

        if($feed->save()){
            return response()->json(['success' => true , 'data' =>$feed]);
        }else{
            return response()->json(['success' => false , 'data' =>$feed]);
        }
    }

    public function get(){

        $feed = BackgroundFeed::get();
        return response()->json(['success' => true , 'data' =>$feed]);
    }
}
