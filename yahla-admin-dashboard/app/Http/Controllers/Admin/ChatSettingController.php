<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;

class ChatSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $group_chat = Setting::firstOrCreate(['name' => 'group_chat']);
        $file_size = Setting::firstOrCreate(['name' => 'file_size']);
        $font_type = Setting::firstOrCreate(['name' => 'font_type']);
        return view('content.chat_setting.index' , compact('group_chat' , 'file_size' , 'font_type'));
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

         $group_chat = Setting::firstOrCreate(['name' => 'group_chat']);
         $group_chat->value = $request->group_chat;
         $group_chat->save(); 
         $file_size = Setting::firstorCreate(['name' => 'file_size']);
         $file_size->value = $request->file_size;
         $file_size->save();
         $font_type = Setting::firstorCreate(['name' => 'font_type']);
         $font_type->value = $request->font_type;
         $font_type->save();

            return redirect()->route('chat-settings.index')->with('success', 'Setting Updated Successfully');

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
}
