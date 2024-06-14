<?php

namespace App\Http\Controllers\Api;

use App\Models\Artist;
use App\Models\Album;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArtistController extends Controller
{
    public function get_all_artist_music()
    {

        $artist = Artist::select('id', 'first_name', 'last_name')->withCount('musics')->get();

        if ($artist->isEmpty()) {
            return response()->json(['success' => false, 'data' => []]);
        } else {
            return response()->json(['success' => true, 'data' => $artist]);
        }
    }

    public function get_single_artist_music($id)
    {
        $artist = Artist::select('id', 'image', 'first_name', 'last_name', 'province_id')->where('id', $id)->with('musics', 'province.country')->first();
        if (is_null($artist)) {
            return response()->json(['success' => false, 'data' => []]);
        } else {
            return response()->json(['success' => true, 'data' => $artist]);
        }
    }

    public function get_two_latest_artist()
    {
        $artist = Artist::withCount('musics')->with('province.country')->latest()->limit(2)->get();
        if ($artist->isEmpty()) {
            return response()->json(['success' => false, 'data' => []]);
        } else {
            $modifiedData = $artist->map(function ($data) {
                return [
                    'id' => $data->id,
                    'first_name' => $data->first_name,
                    'image' => $data->image,
                    'musics_count' => $data->musics_count,
                    'album_count' => Album::where('artist_id', $data->id)->count() ?? 0,
                    'province' => [
                        'id' => $data->province->id,
                        'name' => $data->province->name,
                        'country' => [
                            'id' => $data->province->country->id,
                            'name' => $data->province->country->name,
                        ],
                    ],
                ];
            });
            return response()->json(['success' => true, 'data' => $modifiedData]);
        }
    }
}
