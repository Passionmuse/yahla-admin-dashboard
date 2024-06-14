<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BazarCategory;
use Illuminate\Http\Request;

class BazarCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
           $bazar_category = BazarCategory::with('bazarsubcategory')->get();
        return view('content.bazar_category.index' , compact('bazar_category'));
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
            'bazar_category' => 'required'
        ]);

        $model = new BazarCategory();
        $model->name = $request->bazar_category;
        if($model->save()){
            return redirect()->route('bazar-category.index')->with('success', 'Bazar  Category Has been inserted');
        }else{
            return redirect()->route('bazar-category.index')->with('error', 'Failed to add bazar category');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BazarCategory  $bazarCategory
     * @return \Illuminate\Http\Response
     */
    public function show(BazarCategory $bazarCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BazarCategory  $bazarCategory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bazar_category = BazarCategory::find($id);
        return view('content.bazar_category.edit' , compact('bazar_category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BazarCategory  $bazarCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $bazar = BazarCategory::findorFail($id);
        $bazar->name = $request->bazar_category;
        if($bazar->update()){
           return redirect()->route('bazar-category.index')->with('success', 'Bazar Category Has been Updated');
       }else{
           return redirect()->route('bazar-category.index')->with('error', 'Failed to update bazar category');
       }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BazarCategory  $bazarCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $bazar = BazarCategory::findorFail($id);
        if($bazar->delete($bazar->id)){
            return redirect()->route('bazar-category.index')->with('success', 'bazar Category Has been Deleted');
        }else{
            return redirect()->route('bazar-category.index')->with('error', 'Failed to delete bazar category');
        }
    }
    public function status($id , $status){
        $bazar = BazarCategory::find($id);
        $bazar->status = $status;
        if($bazar->update()){
            return redirect()->route('bazar-category.index')->with('success', 'Status Has been Updated');
        }else{
            return redirect()->route('bazar-category.index')->with('error', 'Status is not changed');

        }
    }
}
