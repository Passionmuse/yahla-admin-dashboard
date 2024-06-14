<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HistoryCategory;
use Illuminate\Http\Request;

class HistoryCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $history_category = HistoryCategory::get();
        return view('content.history_category.index', compact('history_category'));
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
            'history_category' => 'required'
        ]);

        $model = new HistoryCategory();
        $model->name = $request->history_category;
        $img = $request->file('history_category_image');
        $ext = rand().".".$img->getClientOriginalName();
        $img->move("public/historyCategory/",$ext);
        $model->image = $ext;
        if($model->save()){
            return redirect()->route('history-category.index')->with('success', 'History Category Has been inserted');
        }else{
            return redirect()->route('history-category.index')->with('error', 'Failed to add history category');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HistoryCategory  $historyCategory
     * @return \Illuminate\Http\Response
     */
    public function show(HistoryCategory $historyCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HistoryCategory  $historyCategory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $history_category = HistoryCategory::find($id);
        return view('content.history_category.edit' , compact('history_category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HistoryCategory  $historyCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $history = HistoryCategory::findorFail($id);
        $history->name = $request->history_category;
        if($request->file('history_category_image'))
        {
            $img = $request->file('history_category_image');
            $ext = rand().".".$img->getClientOriginalName();
            $img->move("public/historyCategory/",$ext);
            $history->image = $ext;
        }
        if($history->update()){
           return redirect()->route('history-category.index')->with('success', 'History Category Has been Updated');
       }else{
           return redirect()->route('history-category.index')->with('error', 'Failed to update history category');
       }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HistoryCategory  $historyCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $history = HistoryCategory::findorFail($id);
        if($history->delete($history->id)){
           return redirect()->route('history-category.index')->with('success', 'History Category Has been Deleted');
       }else{
           return redirect()->route('history-category.index')->with('error', 'Failed to delete history category');
       }
    }

    public function status($id , $status){
        $history = HistoryCategory::find($id);
        $history->status = $status;
        if($history->update()){
            return redirect()->route('history-category.index')->with('success', 'Status Has been Updated');
        }else{
            return redirect()->route('history-category.index')->with('error', 'Status is not changed');

        }
    }
}
