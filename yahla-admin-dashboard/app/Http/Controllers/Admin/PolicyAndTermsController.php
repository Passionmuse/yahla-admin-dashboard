<?php

namespace App\Http\Controllers\Admin;

use App\Models\Setting;
use App\Models\PolicyTerm;
use Illuminate\Http\Request;
use App\Models\PolicyAndTerm;
use App\Http\Controllers\Controller;
use App\Models\Translation;
use App\Models\Language;


class PolicyAndTermsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = PolicyAndTerm::all();
        //return  view('content.policy_and_terms.index' , compact('decode' , 'disclaimer' , 'tab'));
        return  view('content.policy_and_terms.index' , compact('data'));
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
            'name' => 'required',
        ]);

        PolicyAndTerm::create([
            'name' => $request->name
        ]);

        return back()->with('success', 'New privacy policy and terms section has been created.');
    
 
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $policy = PolicyAndTerm::find($id);
         if($policy->delete($policy->id)){
            return redirect()->back();
         }
    }

    public function saveFileds(Request $request) {
        $validated = $request->validate([
            'privacy_policy' => 'required',
            //'disclaimer' => 'required',
        ]);
    
        $policyAndTerm = PolicyAndTerm::find($request->id);
        if ($policyAndTerm) {
            $policyAndTerm->privacy_policy = $validated['privacy_policy'];
            // $policyAndTerm->disclaimer = $validated['disclaimer'];
            if ($policyAndTerm->save()) {
                return back()->with('success', 'Privacy Policy and terms updated successfully.')->withInput(['tab' => $request->tab]);
            } else {
                return back()->with('error', 'Failed to update Privacy Policy and terms.')->withInput(['tab' => $request->tab]);
            }
        } else {
            return back()->with('error', 'Policy and terms record not found.')->withInput(['tab' => $request->tab]);
        }
    }
    
}