<?php

namespace App\Http\Controllers\Admin;

use App\Models\Ad;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ManageAdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $ads = Ad::get();
        return view('content.manage-ads.index' , compact('ads'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ad = Ad::find($id);
        $ad->title = $request->title;
        $ad->description = $request->description;
        $ad->start_date = $request->start_date;
        $ad->end_date = $request->end_date;
        $ad->budget = $request->budget;

        if($ad->update()){
            return redirect()->route('manage-ads.index')->with('success' , 'Ads Updated Successfully.');
        }else{
            return redirect()->route('manage-ads.index')->with('success' , ' Failed to  Updated Ads.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ad = Ad::find($id);
        if(isset($ad->image_url)){
            $image_path = public_path('storage/'.$ad->image_url);
            if(file_exists($image_path)){
                unlink($image_path);
            }
        }
        if($ad->delete($ad->id)){
            return redirect()->route('manage-ads.index')->with('success' , 'Ads Deleted Successfully.');
        }
    }
}
