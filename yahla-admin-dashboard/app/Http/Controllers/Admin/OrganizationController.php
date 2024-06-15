<?php

namespace App\Http\Controllers\Admin;

use App\Models\Organization;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreOrganizationRequest;
use App\Http\Requests\UpdateOrganizationRequest;

class OrganizationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $organizations = Organization::orderBy("updated_at", "DESC")->get();
        return view("content.organizations.index", compact("organizations"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("content.organizations.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrganizationRequest $request)
    {
        $validated = $request->validated();

        // $imagePath = null;
        // if ($request->hasFile('logo')) {
        //     $imagePath = $request->logo->store("/organizations", "public");
        //     $validated["logo"] = $imagePath;
        // }

        $organization = Organization::create($validated);

        return back()->with("success", "Organization successfully created.");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $organization = Organization::find($id);
        return view("content.organizations.show", compact("organization"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $organization = Organization::find($id);
        return view("content.organizations.edit", compact("organization"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOrganizationRequest $request, $id)
    {
        $validated = $request->validated();

        // $imagePath = null;
        // if ($request->hasFile('logo')) {
        //     $imagePath = $request->logo->store("/organizations", "public");
        //     $validated["logo"] = $imagePath;
        // }

        $organization = Organization::find($id);
        $organization->fill($validated);
        $organization->save();

        return back()->with("success", "Organization successfully updated.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $organization = Organization::find($id);

        // Delete Image
        if ($organization->logo)
            Storage::delete($organization->logo);

        $organization->delete();

        return back()->with("success", "Organization successfully deleted.");
    }

    public function deleteOrganizationLogo($id)
    {
        $organization = Organization::find($id);
        if ($organization && isset($organization->logo)) {
            $path = public_path('storage/' . $organization->logo);
            if (file_exists($path)) {
                unlink($path);
            }
    
            // Remove the image filename from the model attribute
            $organization->logo = null;
            $organization->save();
        }
        
        return [
            'status' => true
        ];
    }
}
