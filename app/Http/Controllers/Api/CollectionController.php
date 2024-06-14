<?php

namespace App\Http\Controllers\Api;

use App\Models\Collection;
use App\Traits\UploadMedia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CollectionController extends Controller
{
    public function insert(Request $request)
    {

        $request->validate([
            'title' => 'required',
        ]);

        $collection = new Collection();
        $collection->title = $request->title;
        if ($request->hasFile('image')) {
            $path = UploadMedia::index($request->file('image) ?? '));
            $collection->image = $path;
        }

        $collection->user_id  = $request->user_id;

        $collection->save();

        return response()->json(['success' => true, 'message' => 'Collection successfully created.']);
    }

    public function add_to_collection(Request $request)
    {
        $collection = Collection::find($request->collection_id);

        $collection->feeds()->sync($request->feed_id);

        return response()->json(['success' => true, 'message' => 'Successfully added to collection.']);
    }

    public function get_collection($user_id)
    {
        $collection = Collection::where('user_id', $user_id)->get();
        if (isset($collection)) {
            return response()->json(['success' => true, 'data' => $collection]);
        }
    }

    public function destroy($id)
    {

        $collection = Collection::find($id);
        if (isset($collection)) {
            if ($collection->delete($collection->id)) {
                return response()->json(['success' => true, 'data' => $collection]);
            }
        }
    }
}
