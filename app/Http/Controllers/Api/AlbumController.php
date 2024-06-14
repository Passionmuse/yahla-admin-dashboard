<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Album;
use App\Models\AlbumFavourite;

class AlbumController extends Controller
{
    public function new_albums()
    {
        $albums = Album::orderBy('created_at', 'desc')
            ->take(2)
            ->with('artist')
            ->select('id', 'title', 'artist_id', 'album', 'image')
            ->get();

        $updated_albums = $albums->map(function ($item) {
            $item->music_count = sizeof($item->album);
            return $item;
        });

        return response()->json(['success' => true, 'data' => $updated_albums]);
    }

    public function albums()
    {
        $albums = Album::orderBy('created_at', 'desc')
            ->take(2)
            ->select('id', 'title', 'album', 'image')
            ->get();

        $updated_albums = $albums->map(function ($item) {
            $item->music_count = sizeof($item->album);
            return $item;
        });

        return response()->json(['success' => true, 'data' => $updated_albums]);
    }

    public function albums_details($id)
    {
        $album = Album::with('artist')->find($id);

        $album->music_count = sizeof($album->album);

        return response()->json(['success' => true, 'data' => $album]);
    }

    public function favourite_album(Request $request){

        $request->validate([
            'user_id' => 'required',
            'album_id' => 'required'
        ]);

        $album = AlbumFavourite::where('user_id' , $request->user_id)->first();
        if(!$album){
            $album = new AlbumFavourite();
            $album->user_id = $request->user_id;
            $album->album_id = [];
        }
        
        $existingAlbum =collect($album->album_id);
        $addedAlbum = [];
        $removedAlbum = [];
        if(isset($request->album_id)){
            
            foreach($request->album_id as $album1){
                if(!$existingAlbum->contains($album1)){
                    $existingAlbum->push($album1);
                    $addedAlbum[] = $album1;
                }else{
                    $existingAlbum = $existingAlbum->filter(fn($i) => $i !== $album1)->values();
                    $removedAlbum[] = $album1;
                }
            }
        }
        
        $album->album_id = $existingAlbum->toArray();
        if($album->save()){
            $message = 'Album';
            if(!empty($addedAlbum)){
                $message.= ' added to favourite';
            }else{
                $message.= ' removed from favourite';
            }

            return response()->json(['success' => 'true' , 'message' => $message]);
        }else{
            return response()->json(['success' => false, 'message' => 'Failed to update album favorites.']);

        }
    }


    public function get_favourite_album($user_id){
        $userFavouriteAlbum = AlbumFavourite::where('user_id' , $user_id)->first();
        
        if(!$userFavouriteAlbum){
            return response()->json(['success' => false , 'message'=> 'No user found.']);
        }
        $albums  =[];
        foreach($userFavouriteAlbum->album_id as $favouriteAlbum){
            $favouriteAlbum = Album::find($favouriteAlbum);
            if($favouriteAlbum){
            $favouriteAlbum->load('artist');
                $albums[] = $favouriteAlbum;
            }
        }
        if(isset($albums)){
            $updated_album = [];
            foreach($albums as $album){
                $countAlbum = count($album->album);
                $updated_album[] = [
                    'id' => $album->id,
                    'image' => $album->image ,
                    'total_music' => $countAlbum,
                    'title' => $album->title,
                    'artist' => [
                        'first_name' => $album->artist->first_name,
                        'last_name' => $album->artist->last_name,
                        'iamge' => $album->artist->image
                    ],
                ];
            }
        }

        return response()->json(['success' => true , 'data' => $updated_album]);
    }
    
    public function get_favourite_album_ids($user_id){
        $userFavouriteAlbum = AlbumFavourite::where('user_id' , $user_id)->first();
        
        if(!$userFavouriteAlbum){
            return response()->json(['success' => false , 'message'=> 'No user found.']);
        }
        return response()->json(['success' => true , 'data'=> $userFavouriteAlbum]);

    }
}
