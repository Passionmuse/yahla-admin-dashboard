<?php

namespace App\Http\Controllers\Admin;

use App\Traits\UploadMedia;
use Illuminate\Http\Request;
use App\Models\TicketService;
use App\Http\Controllers\Controller;

class TicketServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = TicketService::get();
        return view('content.ticket_service.index' , compact('services'));
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
            'title' => 'required',
            'icon' => 'required',
        ]);

        $service = new TicketService();
        $service->title = $request->title;
        $service->icon = $request->icon;
        // if($request->hasFile('icon')){
        //     $path = UploadMedia::index($request->file('icon')) ?? '';
        //     $service->icon  = $path;
        // }

        if($service->save()){
            return redirect()->back()->with('success' , 'VIP Service has successfuly been added.');
        }else{
            return redirect()->back()->with('error' , ' Failed to add VIP Service .');
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
        $service = TicketService::find($id);
        $service->title = $request->title;
        $service->icon = $request->icon;
        // if($request->hasFile('icon')){
        //     if(isset($service->icon)){
        //         $icon_path = public_path('storage/'.$service->icon);
        //         if(isset($image_path)){
        //             unlink($image_path);
        //         }
        //         $path = UploadMedia::index($request->file('icon')) ?? '';
        //         $service->icon = $path;
        //     }
        // }

        if($service->update()){
            return redirect()->back()->with('success' , 'VIP Service has benn updated successfully.');
        }else{
            return redirect()->back()->with('error' , ' Failed to update VIP Service .');
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
        $service = TicketService::find($id);
        if(isset($service->icon)){
            $path = public_path('storage/'.$service->icon);
            if(file_exists($path)){
                unlink($path);
            }
        }

        if($service->delete($id)){
            return redirect()->back()->with('success' , 'VIP Service has been deleted successfully.');
        }else{
            return redirect()->back()->with('error' , ' Failed to delete VIP Service.');
        }
    }

    public function deleteServiceImage($id)
    {
        $service = TicketService::find($id);
        if ($service && isset($service->icon)) {
            $path = public_path('storage/' . $service->icon);
            if (file_exists($path)) {
                unlink($path);
            }
    
            // Remove the image filename from the model attribute
            $service->icon = null;
            $service->save();
        }
        
        return [
            'status' => true
        ];
    }
}
