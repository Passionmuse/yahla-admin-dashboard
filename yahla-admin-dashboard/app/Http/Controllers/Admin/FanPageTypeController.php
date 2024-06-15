<?php

namespace App\Http\Controllers\Admin;

use App\Models\FanPageType;
use App\Traits\UploadMedia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FanPageTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types = FanPageType::get();
        return view('content.fanpage_types.index' , compact('types'));
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
            'icon' => 'required'
        ]);
         $service = $request->option;
         $new_service = [];
         foreach($service as $value){
            $new_service[] = $value;
         }
         $fanpage = new FanPageType(); 
         $fanpage->name = $request->title;
         $fanpage->icon = $request->icon??null;
        $fanpage->types = json_encode($new_service);
        if($fanpage->save()){
            return redirect()->back()->with('success' , 'FanPage Sevice has been created successfully.');
        }else{
            return redirect()->back()->with('error' , 'Failed to created FanPage Service');
        }
        }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FanPageType  $fanPageType
     * @return \Illuminate\Http\Response
     */
    public function show(FanPageType $fanPageType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FanPageType  $fanPageType
     * @return \Illuminate\Http\Response
     */
    public function edit(FanPageType $fanPageType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FanPageType  $fanPageType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $service = FanPageType::find($id);
        $service->name = $request->title;
        // if($request->hasFile('icon')){
        //     if(isset($service->icon)){
        //         $icon_path = public_path('storage/'.$service->icon);
        //         if(file_exists($icon_path)){
        //             unlink($icon_path);
        //         }
        //         $path = UploadMedia::index($request->file('icon'));
        //         $service->icon  = $path;
        //     }
        // }

        $service->icon = $request->icon??null;

        $service->types = json_encode($request->option);
        if($service->update()){
            return redirect()->back()->with('success' , 'Your page has been updated.');
        }else{
            return redirect()->back()->with('error', 'Your page could not be updated.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FanPageType  $fanPageType
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = FanPageType::find($id);
        if($service->icon){
            $public_path = public_path('storage/'.$service->icon);
            if(file_exists($public_path)){
                unlink($public_path);
            }
        }

        if($service->destroy($id)){
            return redirect()->back()->with('success', 'Your page has been deleted.');
        }else{
            return redirect()->back()->with('error', 'Your page has not been deleted.');
        }
    }
    
    public function deleteImage($id)
    {
        $music = FanPageType::find($id);
        if ($music && isset($music->icon)) {
            $path = public_path('storage/' .$music->icon);
            if (file_exists($path)) {
                unlink($path);
            }
    
            // Remove the>icon filename from the model attribute
            $music->icon = null;
            $music->save();
        }
        
        return [
            'status' => true
        ];
    }
}
