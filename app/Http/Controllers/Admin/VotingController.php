<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PostGallery;
use App\Models\Voting;
use App\Models\VotingCategory;
use Illuminate\Http\Request;

class VotingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $votes = Voting::with('voting_category')->get();
        $vote_category = VotingCategory::get();
        return view('content.voting.index' , compact('votes' , 'vote_category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('content.voting.create' , compact('vote_category'));
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
            'name' => 'required',
            'image' => 'required',
            'description' => 'required'
          ]); 

          $options = [];
          if ($request->{'group-a'}) {
            $options = array_map(function ($option) {
                return ["title" => $option['option']];
            }, $request->{'group-a'});
          }

          $vote = new Voting();
          $vote->name = $request->name;
          $vote->category_id = $request->category_id;
          $vote->description = $request->description;
          $vote->options = $options;
          $vote->banner = $request->image ?? null;
          if($vote->save()){

            $id  = $vote->id;
            $post_gallery  = new PostGallery();
            $post_gallery->vote_id=$id;
            $post_gallery->media_type = 0;
            $post_gallery->media_url = url('/') .'/storage/'. $request->image;
            $post_gallery->user_id = $request->userId;
            if($request->has('post_id')){
                $post_gallery->post_id = $request->post_id;
            }
            if($request->has('news_id')){
                $post_gallery->news_id = $request->news_id;
            }
            if($request->has('history_id')){
                $post_gallery->history_id = $request->history_id;
            }
            $post_gallery->save();
            
            return redirect()->route('vote.index')->with('success', 'Vote Has been inserted');
        }else{
            return redirect()->route('vote.index')->with('error', 'Failed to add vote');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Voting  $voting
     * @return \Illuminate\Http\Response
     */
    public function show(Voting $voting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Voting  $voting
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        // $vote = Voting::find($id);
        // return view('content.voting.index', compact('vote'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Voting  $voting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $vote = Voting::find($id);
        $vote->name = $request->name;
        $vote->category_id = $request->category_id;
        $vote->description = $request->description;
        $options = $vote->options;
        if ($request->{'group-a'}) {
            $options = array_map(function ($option) {
                return ["title" => $option['option']];
            }, $request->{'group-a'});
        }
        $vote->options = $options;

        $vote->banner = $request->image??null;

        if($vote->update()){
            return redirect()->route('vote.index')->with('success', 'Vote Has been Updated');
        }else{
            return redirect()->route('vote.index')->with('error', 'Failed to update vote');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Voting  $voting
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vote = Voting::find($id);
        if($vote->banner){
            $image_path = public_path('storage/'.$vote->banner);
                if(file_exists($image_path)){
                    unlink($image_path);
                }
        }
        if($vote->delete($vote->id)){
            return redirect()->route('vote.index')->with('success', 'Vote Has been Delted');

        }else{
            return redirect()->route('vote.index')->with('success', 'Vote not deleted');

        }
    }

      public function status($id , $status){
        $vote = Voting::find($id);
        $vote->status = $status;
        if($vote->update()){
            return redirect()->route('vote.index')->with('success', 'Status Has been Updated');
        }else{
            return redirect()->route('vote.index')->with('error', 'Status is not changed');

        }
    }

    public function deleteImage($id)
    {
        $music = Voting::find($id);
        if ($music && isset($music->banner)) {
            $path = public_path('storage/' . $music->banner);
            if (file_exists($path)) {
                unlink($path);
            }
    
            // Remove the image filename from the model attribute
            $music->banner = null;
            $music->save();
        }
        
        return [
            'status' => true
        ];
    }
}
