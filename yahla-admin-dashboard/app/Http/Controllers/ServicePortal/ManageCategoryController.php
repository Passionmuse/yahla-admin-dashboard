<?php

namespace App\Http\Controllers\ServicePortal;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Helpers\Helpers;
use App\Http\Requests\StoreCategoryRequest;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;


class ManageCategoryController extends Controller
{
    /**
     * Display a view of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $categories = Category::all();
        return view('content.serviceportal.manage_categories')->with(['categories' => $categories]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return 
     */
    public function store(StoreCategoryRequest $request)
    {
        //
        $request_data = $request->validated();

        if($request->hasFile('image')){
            $file = $request->file('image');
            $request_data['image'] = '/category_images/' . Helpers::upload_file('/category_images',$file);
        } else {
            $request_data['image'] = "/category_images/default.jpg";
        }
        
        
        Category::create($request_data);

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  $category_id
     */
    public function destroy($category_id)
    {
        Category::where(['_id' => $category_id])->delete();
        return response()->json(['success' => 'Category deleted successfully']);
    }
}
