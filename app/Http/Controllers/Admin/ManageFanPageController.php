<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FanPage;

class ManageFanPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
 
        $fanpage = FanPage::where('status' , 1)->orWhere('status' , 2)->get();
        return view('content.manage_fan_page.index' , compact('fanpage'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('content.manage_fan_page.create');
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
            return redirect()->route('manage-fanpage.index')->with('success', 'Fan Page Has been inserted');
        }else{
            return redirect()->route('manage-fanpage.index')->with('error', 'Failed to add fan page');
        }
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
        $page = FanPage::find($id);
        return view('content.manage_fan_page.edit', compact('page'));
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
        
        $page = FanPage::findorFail($id);
         $page->user_name = $request->user_name;
         $page->fanpage_name = $request->fanpage_name;
         if($page->update()){
            return redirect()->route('manage-fanpage.index')->with('success', 'Fan page Has been Updated');
        }else{
            return redirect()->route('manage-fanpage.index')->with('error', 'Fan page not updated');
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
        $page = FanPage::findorFail($id);
        if($page->delete($page->id)){
            return redirect()->route('manage-fanpage.index')->with('success', 'Fan page Has been Deleted');
        }else{
            return redirect()->route('manage-fanpage.index')->with('error', 'Failed to delete fan page');
        }
    }

    public function status($id , $status){
        $page = FanPage::find($id);
        $page->status = $status;
        if($page->update()){
            return redirect()->route('manage-fanpage.index')->with('success', 'Status Has been Updated');
        }else{
            return redirect()->route('manage-fanpage.index')->with('error', 'Status is not changed');

        }
    }
}
