<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\SubCategoryBazar;
use Illuminate\Http\Request;

class SubCategoryBazarController extends Controller
{
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
            'category_id' => 'required',
            'name'=> 'required'
        ]);

        $model = new SubCategoryBazar();
        $model->category_id = $request->category_id;
        $model->name = $request->name;
        $model->city = $request->city;
        $model->state = $request->state;
        if($model->save()){
            return redirect()->route('bazar-category.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SubCategoryBazar  $subCategoryBazar
     * @return \Illuminate\Http\Response
     */
    public function show(SubCategoryBazar $subCategoryBazar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SubCategoryBazar  $subCategoryBazar
     * @return \Illuminate\Http\Response
     */
    public function edit(SubCategoryBazar $subCategoryBazar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SubCategoryBazar  $subCategoryBazar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $request->validate([
            'category_id' => 'required',
            'name'=> 'required'
        ]);

        $subCategoryBazar = SubCategoryBazar::find($id);
        $subCategoryBazar->category_id = $request->category_id;
        $subCategoryBazar->name = $request->name;
        $subCategoryBazar->city = $request->city;
        $subCategoryBazar->state = $request->state;
        if($subCategoryBazar->save()){
            return redirect()->route('bazar-category.index')->with('success', 'Subcategory successfully updated');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubCategoryBazar  $subCategoryBazar
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subCategoryBazar = SubCategoryBazar::find($id);
        $subCategoryBazar->delete();
        return redirect()->route('bazar-category.index')->with('success', 'Subcategory successfully deleted');
    }
}
