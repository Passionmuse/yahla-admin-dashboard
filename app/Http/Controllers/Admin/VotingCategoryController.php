<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\VotingCategory;
use Illuminate\Http\Request;

class VotingCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vote_category = VotingCategory::get();
        return view('content.voting_category.index' , compact('vote_category'));
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
            'vote_category' => 'required'
        ]);

        $model = new VotingCategory();
        $model->name = $request->vote_category;
        $img = $request->file('vote_category_image');
        $ext = rand().".".$img->getClientOriginalName();
        $img->move("public/VotingCategory/",$ext);
        $model->image = $ext;
        if($model->save()){
            return redirect()->route('vote-category.index')->with('success', 'Voting Category Has been inserted');
        }else{
            return redirect()->route('vote-category.index')->with('error', 'Failed to add vote category');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VotingCategory  $votingCategory
     * @return \Illuminate\Http\Response
     */
    public function show(VotingCategory $votingCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VotingCategory  $votingCategory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $vote_category = VotingCategory::find($id);
        // return view('content.voting_category.edit', compact('vote_category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\VotingCategory  $votingCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
  
        $vote = VotingCategory::findorFail($id);
        $vote->name = $request->vote_category;
        if($request->file('vote_category_image')){
            $img = $request->file('vote_category_image');
            $ext = rand().".".$img->getClientOriginalName();
            $img->move("public/VotingCategory/",$ext);
            $vote->image = $ext;
            }
        if($vote->update()){
           return redirect()->route('vote-category.index')->with('success', 'Voting Category Has been Updated');
       }else{
           return redirect()->route('vote-category.index')->with('error', 'Failed to update vote category');
       }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VotingCategory  $votingCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vote = VotingCategory::findorFail($id);
        if($vote->delete($vote->id)){
            return redirect()->route('vote-category.index')->with('success', 'Vote Category Has been Deleted');
        }else{
            return redirect()->route('vote-category.index')->with('error', 'Failed to delete vote category');
        }
    }

    public function status($id , $status){
        $vote = VotingCategory::find($id);
        $vote->status = $status;
        if($vote->update()){
            return redirect()->route('vote-category.index')->with('success', 'Status Has been Updated');
        }else{
            return redirect()->route('vote-category.index')->with('error', 'Status is not changed');

        }
    }
}
