<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Services\ActivityHTML;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Spatie\Activitylog\Models\Activity;

class SystemLogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activity = Activity::orderBy('created_at', 'DESC')->paginate(20);
        
        // $activity =   Auth::user()->actions()->orderBy('created_at', 'DESC')->paginate(20);
        return view('content.system_log.index', compact('activity'));
    }
    
    public function manage_department(){
         return view('content.system_log.department');
    }
    
     public function backup_setting(){
         return view('content.system_log.backup_setting');
    }
     public function storage_setting(){
         return view('content.system_log.storage_setting');
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
}
