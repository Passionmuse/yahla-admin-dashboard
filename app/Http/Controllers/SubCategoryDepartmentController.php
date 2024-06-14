<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubCategoryDepartment;
use App\Models\CategoryDepartment;
use App\Models\Country;
use Illuminate\Support\Facades\Log;

class SubCategoryDepartmentController extends Controller
{
    public function destroy123($id)
    {
        $subCategory = SubCategoryDepartment::findOrFail($id);
        $subCategory->delete();
        return redirect()->back()->with('success', 'Sub Category deleted successfully.');
    }

    public function manage_department()
    {
        $categories = Country::with('subCategoryDepartments')->get();
        return view('content.system_log.department', compact('categories'));
    }

    public function getSubCategories($id)
    {
        $category = CategoryDepartment::findOrFail($id);
        return view('content.system_log.department', compact('category'));
    }

    public function store(Request $request)
    {
        Log::info('Store method called');

        $request->validate([
            'name' => 'required|string|max:255',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'country_id' => 'required|string',
        ]);

        $input = $request->all();
        Log::info('Input Data: ', $input);

        if ($request->hasFile('thumbnail')) {
            $thumbnail = $request->file('thumbnail');
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $thumbnail->getClientOriginalExtension();
            $thumbnail->move(public_path($destinationPath), $profileImage);
            $input['thumbnail'] = $destinationPath . $profileImage;
            Log::info('Thumbnail Path: ' . $input['thumbnail']);
        }

        Log::info('Final Input Data: ', $input);

        $subcategory = SubCategoryDepartment::create($input);
        Log::info('Subcategory Created: ', $subcategory->toArray());

        return redirect()->back()->with('success', 'Subcategory created successfully.');
    }

    public function update(Request $request, $id)
    {
        Log::info('Update method called');

        $request->validate([
            'name' => 'required|string|max:255',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'country_id' => 'required|string',
        ]);

        $subCategory = SubCategoryDepartment::findOrFail($id);

        $input = $request->all();
        Log::info('Input Data: ', $input);

        if ($request->hasFile('thumbnail')) {
            $thumbnail = $request->file('thumbnail');
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $thumbnail->getClientOriginalExtension();
            $thumbnail->move(public_path($destinationPath), $profileImage);
            $input['thumbnail'] = $destinationPath . $profileImage;
            Log::info('Thumbnail Path: ' . $input['thumbnail']);
        }

        $subCategory->update($input);
        Log::info('Subcategory Updated: ', $subCategory->toArray());

        return redirect()->back()->with('success', 'Subcategory updated successfully.');
    }
}
