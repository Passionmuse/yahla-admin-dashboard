<?php

namespace App\Http\Controllers\Admin;

use App\Models\Donation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDonationRequest;
use App\Http\Requests\UpdateDonationRequest;
use App\Models\Organization;

class DonationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $donations = Donation::orderBy("updated_at", "DESC")->get();
        $organizations = Organization::where("status", 1)->get();
        return view("content.donations.index", compact("donations", "organizations"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $organizations = Organization::where("status", 1)->get();
        return view("content.donations.create", compact("organizations"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDonationRequest $request)
    {
        $validated = $request->validated();

        $validated['tags'] = array_map(function ($item) {
            return $item->value;
        }, json_decode($validated['tags']));

        $validated['start_date'] .= ' 00:00:00';
        $validated['end_date'] .= ' 23:59:59'; 

        $donation = Donation::create($validated);

        return back()->with("success", "Donation successfully created.");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $donation = Donation::find($id);
        return view("content.donations.show", compact("donation"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $donation = Donation::find($id);
        $organizations = Organization::where("status", 1)->get();
        return view("content.donations.edit", compact("donation", "organizations"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDonationRequest $request, $id)
    {
        $validated = $request->validated();

        $validated['tags'] = array_map(function ($item) {
            return $item->value;
        }, json_decode($validated['tags']));

        $validated['start_date'] .= ' 00:00:00';
        $validated['end_date'] .= ' 23:59:59'; 

        $donation = Donation::find($id);
        $donation->fill($validated);
        $donation->save();

        return back()->with("success", "Donation successfully updated.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $donation = Donation::find($id);
        $donation->delete();

        return back()->with("success", "Donation successfully deleted.");
    }
}
