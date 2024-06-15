<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryDepartment;
use App\Models\SubCategoryDepartment;
use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Support\Facades\Log;

class CategoryDepartmentController extends Controller
{

    public function destroy123($id)
    {
        $subCategory = SubCategoryDepartment::findOrFail($id);
        $subCategory->delete();
        return redirect()->back()->with('success', 'Category deleted successfully.');

        
    }
    public function store(Request $request)
    {
        Log::info('Store method called'); // Custom log message

        $request->validate([
            'name' => 'required|string|max:255',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Retrieve all input data
        $input = $request->all();
        Log::info('Input Data: ', $input);  // Log input data

        // Handle the file upload if there is one
        if ($thumbnail = $request->file('thumbnail')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $thumbnail->getClientOriginalExtension();
            $thumbnail->move(public_path($destinationPath), $profileImage);
            $input['thumbnail'] = "$destinationPath$profileImage";
            Log::info('Thumbnail Path: ' . $input['thumbnail']);  // Log thumbnail path
        }

        Log::info('Final Input Data: ', $input);  // Log final input data

        // Create a new category
        $category = CategoryDepartment::create($input);
        Log::info('Category Created: ', $category->toArray());  // Log created category

         
        // Redirect back with a success message
        return redirect()->back()->with('success', 'Category created successfully.');
    }
 // In CategoryDepartmentController

public function edit($id)
{
    $category = CategoryDepartment::findOrFail($id);
    return response()->json(['category' => $category]);
}

public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $category = CategoryDepartment::findOrFail($id);

    if ($thumbnail = $request->file('thumbnail')) {
        $destinationPath = 'images/';
        $profileImage = date('YmdHis') . "." . $thumbnail->getClientOriginalExtension();
        $thumbnail->move(public_path($destinationPath), $profileImage);
        $category->thumbnail = "$destinationPath$profileImage";
    }

    $category->name = $request->input('name');
    $category->save();

    return redirect()->back()->with('success', 'Category updated successfully.');
}



}
