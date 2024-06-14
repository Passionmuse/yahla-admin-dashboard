<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Music;
use App\Models\MusicCategory;
use Illuminate\Http\Request;

class MusicController extends Controller
{
    public function index(Request $request)
{
    // Music with latest uploads
    if ($request->has('latest_uploads')) {
        $query = Music::with('artist')->latest();
    
        if ($request->has('limit')) {
            $limit = $request->input('limit');
            $latest = $query->take($limit)->get();
        } else {
            $latest = $query->get();
        }
    
        if ($latest->isEmpty()) {
            return response()->json(['success' => false, 'data' => []]);
        } else {
            // Modify the response data to include only the first name of the artist
            $modifiedData = $latest->map(function ($music) {
                return [
                    'id' => $music->id,
                    'name' => $music->name,
                    'category_id' => $music->category_id,
                    'audio' => $music->audio,
                    'status' => $music->status,
                    'created_at' => $music->created_at,
                    'updated_at' => $music->updated_at,
                    'popular' => $music->popular,
                    'artist_id' => $music->artist_id,
                    'artist' => [
                        'id' => $music->artist->id,
                        'first_name' => $music->artist->first_name, // Only include first name
                    ],
                ];
            });
    
            return response()->json(['success' => true, 'data' => $modifiedData]);
        }
    }
    
    
    // Music with category
    if ($request->has('category')) {
        $category = $request->input('category');
        
        $category = MusicCategory::where('name', $category)->with('musics.artist')->first();
        $data = $category->musics;

        if ($data->isEmpty()) {
            return response()->json(['success' => false, 'data' => []]);
        } else {
            $modifiedData = $data->map(function($music){
                return [
                    'id' => $music->id,
                    'name' => $music->name,
                    'category_id' => $music->category_id,
                    'audio' => $music->audio,
                    'status' => $music->status,
                    'created_at' => $music->created_at,
                    'updated_at' => $music->updated_at,
                    'popular' => $music->popular,
                    'artist_id' => $music->artist_id,
                    'artist' => [
                        'id' => $music->artist->id,
                        'first_name' => $music->artist->first_name, // Only include first name
                    ],
                ];
            });
            return response()->json(['success' => true, 'data' => $modifiedData]);
        }
    }

    // Popular song 
    if($request->has('popular')){
        $query = Music::with('artist')->where('popular' , '>' , 0);

        if($request->has('limit')){
            $limit = $request->input('limit');
            $popular = $query->limit($limit)->get(); 
        }else{
            $popular = $query->get();
        }
        if($popular->isEmpty()){
            return response()->json(['success' => false , 'popular' => []]);
        }else{
            $modifedData = $popular->map(function($music){
              return [
                'id' => $music->id,
                'name' => $music->name,
                'category_id' => $music->category_id,
                'audio' => $music->audio,
                'status' => $music->status,
                'created_at' => $music->created_at,
                'updated_at' => $music->updated_at,
                'popular' => $music->popular,
                'artist_id' => $music->artist_id,
                'artist' => [
                    'id' => $music->artist->id,
                    'first_name' => $music->artist->first_name
                ],
            ];  
            });
            return response()->json(['succcess' => true , 'popular' => $modifedData]);
        }
    }

    return response()->json(['success' => false, 'message' => 'Invalid request']);
}

    public function popular_song($id){
        $music = Music::find($id);
        
        if(!$music){
            return response()->json(['success' => false , 'message' => 'Music not found..']);
        }
        $music->popular += 1;
        if($music->save()){
            return response()->json(['success' => true ]);
        }else{
            return response()->json(['succcess' => false]);
        }
    }

    

}
