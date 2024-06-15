<?php

namespace App\Http\Controllers\Admin\WishesandThanks;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WishesReasonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     
     
    public function index()
    {
        return view('content.wish_and_thank.reason');
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
        //
    }
   
      public function manage_greeting(){
        $view = 'daily';
        if (request()->view) {
          $view = request()->view;
        }
        return view('content.wish_and_thank.manage_greeting',compact('view'));
    }
    
     public function manage_pray(){
        $view = 'daily';
        if (request()->view) {
          $view = request()->view;
        }
        return view('content.wish_and_thank.manage_pray',compact('view'));
      
    }
    
     public function manage_sympathy(){
        $view = 'daily';
        if (request()->view) {
          $view = request()->view;
        }
        return view('content.wish_and_thank.manage_sympathy',compact('view'));
      
    }
    
     public function upload_card(){
        $view = 'daily';
        if (request()->view) {
          $view = request()->view;
        }
        return view('content.wish_and_thank.upload_card',compact('view'));
      
    }
    
     public function upload_cardone(){
        $view = 'daily';
        if (request()->view) {
          $view = request()->view;
        }
        return view('content.wish_and_thank.upload_cardone',compact('view'));
      
    }
    
    
     public function upload_cardtwo(){
        $view = 'daily';
        if (request()->view) {
          $view = request()->view;
        }
        return view('content.wish_and_thank.upload_cardtwo',compact('view'));
      
    }
    
    
      public function add_prays(){
        $view = 'daily';
        if (request()->view) {
          $view = request()->view;
        }
        return view('content.wish_and_thank.add_prays',compact('view'));
      
    }
    
        public function add_greeting(){
        $view = 'daily';
        if (request()->view) {
          $view = request()->view;
        }
        return view('content.wish_and_thank.add_greeting',compact('view'));
      
    }
  
 public function add_verses(){
        $view = 'daily';
        if (request()->view) {
          $view = request()->view;
        }
        return view('content.wish_and_thank.add_verses',compact('view'));
      
    }
    
    
    public function pricing(){
        $view = 'daily';
        if (request()->view) {
          $view = request()->view;
        }
        return view('content.wish_and_thank.pricing',compact('view'));
      
    }
}
