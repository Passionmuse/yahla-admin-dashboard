<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FanPage;
use Illuminate\Http\Request;

class FanPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fanpage = FanPage::whereIn('status', [1, 2])->get();
        return view('content.fan-page.index' , compact('fanpage'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('content.fan-page.create');
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
            'user_name' =>'required',
            'fanpage_name' =>'required',
        ]);

        $fanpage  = new FanPage();
        $fanpage->user_name = $request->user_name;
        $fanpage->fanpage_name = $request->fanpage_name;

        if($fanpage->save()){
            return redirect()->route('fanpage.index')->with('success', 'Fan Page Has been inserted');
        }else{
            return redirect()->route('fanpage.index')->with('error', 'Failed to add fan page');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FanPage  $fanPage
     * @return \Illuminate\Http\Response
     */
    public function show(FanPage $fanPage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FanPage  $fanPage
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page = FanPage::find($id);
        return view('content.fan-page.edit', compact('page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FanPage  $fanPage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $page = FanPage::findorFail($id);
         $page->user_name = $request->user_name;
         $page->fanpage_name = $request->fanpage_name;
         if($page->update()){
            return  redirect()->route('fanpage.index')->with('success', 'Fan page Has been Updated');
        }else{
            return redirect()->route('fanpage.index')->with('success', 'Fan page not Updated');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FanPage  $fanPage
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $page = FanPage::findorFail($id);
        if($page->delete($page->id)){
            return redirect()->route('fanpage.index')->with('success', 'Fan page Has been Deleted');
        }else{
            return redirect()->route('fanpage.index')->with('error', 'Failed to delete fan page');
        }
    }

    public function status($id , $status){
        $page = FanPage::find($id);
        $page->status = $status;
        if($page->update()){
            return redirect()->back()->with('success', 'Status Has been Updated');
        }else{
            return redirect()->back()->with('error', 'Status is not changed');

        }
    }

    public function requests()
    {
        $fanpage = FanPage::where('status' , 0)->get();
        return view('content.fan-page.requests' , compact('fanpage'));
    }

    public function blocked()
    {
        $fanpage = FanPage::where('status' , 3)->get();
        return view('content.fan-page.blocked' , compact('fanpage'));
    }
}
