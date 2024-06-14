<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bazar;
use App\Models\BazarCategory;
use Illuminate\Http\Request;

class BazarController extends Controller 
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $bazars = Bazar::with('bazar_category')->get();
        $bazar_category = BazarCategory::with('sub_categories')->get();
        return view('content.bazars.index' , compact('bazars' , 'bazar_category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('content.bazars.create' , compact('bazar_category'));
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
            'image'=>'required'
          ]);

          $bazar = new Bazar();
          $bazar->category_id = $request->category_id;
          $bazar->subcategory_id = $request->subcategory_id;
          $bazar->title  = $request->title;
          $bazar->image = $request->image??[];
        //   $images = collect([]);
        //   foreach($request->file('image') as $value){
        //      $path = $value->store('/images/bazar/img' , 'public');
        //      $images->push($path);
        //   }
        //   $bazar->image = $images;
        // //   if($request->hasFile('image')){
        // //     $path = $request->file('image')->store('/images/bazar/' , 'public');
        // //     $bazar->image = $path;
        // //   }
          $bazar->user_id  = auth()->user()->id ?? null;
          $bazar->price = $request->price;
          $bazar->status = $request->status;
          $bazar->warranty = $request->warranty;

          if($bazar->save()){
            return redirect()->route('bazar.index')->with('success', 'Bazar Has been inserted');
        }else{
            return redirect()->route('bazar.index')->with('error', 'Failed to add bazar');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bazar  $bazar
     * @return \Illuminate\Http\Response
     */
    public function show(Bazar $bazar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bazar  $bazar
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bazar = Bazar::find($id);
        $bazar_category = BazarCategory::get();
        return view('content.bazars.edit' , compact('bazar', 'bazar_category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bazar  $bazar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $bazar = Bazar::findorFail($id);
        $bazar->title = $request->title;
        $bazar->category_id = $request->category_id;
        $bazar->title = $request->title;
        $bazar->warranty =  $request->warranty;
        $bazar->status = $request->status;
        $bazar->price = $request->price;
        $bazar->subcategory_id = $request->subcategory_id;
        $bazar->image = $request->image??[];
        // $images = collect([]);

  
        // if($request->hasFile('image')){
        //     foreach($request->file('image') as $value){
        //    if(isset($bazar->image)){
        //        $image_path  = public_path('storage/'.$bazar->image);
        //        if(file_exists($image_path)){
        //            unlink($image_path);
        //        }
        //        $path = $value->store('/images/bazar/img' , 'public');
        //        $images->push($path);
        //    }
        // }
        // $bazar->image = $images;
        // }else{
        //     $bazar->image = $bazar->image ?? '';
        // }

        if($bazar->update()){
            return redirect()->route('bazar.index')->with('success', 'Bazar Has been Updated');
        }else{
            return redirect()->route('bazar.index')->with('error', 'Failed to update bazar');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bazar  $bazar
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bazar = Bazar::findorFail($id);
        if($bazar->image){
            foreach($bazar->image as $image_file){

                $image_path = public_path('storage/'.$image_file);
                if(file_exists($image_path)){
                    unlink($image_path);
                }
            }
        }
        if($bazar->delete($bazar->id)){
            return redirect()->route('bazar.index')->with('success', 'Bazar Has been Deleted');
        }else{
            return redirect()->route('bazar.index')->with('error', 'Failed to delete bazar');
        }
    }

    public function status($id , $status){
        $bazar = Bazar::find($id);
        $bazar->status = $status;
        if($bazar->update()){
            return redirect()->route('bazar.index')->with('success', 'Status Has been Updated');
        }else{
            return redirect()->route('bazar.index')->with('error', 'Status is not changed');

        }
    }

    public function deleteBazarImage(Request $request, $id)
    {
        $music = Bazar::find($id);
        $music->image = array_filter($music->image, function ($path) use ($request) {
            return !($path === $request->path); 
        });
        $music->save();
        unlink(public_path('storage/' . $request->path));
        return [
            'status' => true
        ];
    }
  public function prefix(){
       return view('content.bazars.prefix');
   }
    public function policy_terms(){
       return view('content.bazars.policy_terms');
   }
   
    public function reason(){
       return view('content.bazars.reason');
   }
   
 public function manage_categories(){
       return view('content.bazars.manage_categories');
   }
    public function pricing_plans(){
       return view('content.bazars.pricing_plans');
   }
   
    public function manage_sale(){
           $view = 'daily';
        if (request()->view) {
          $view = request()->view;
        }
        return view('content.bazars.manage_sale',compact('view'));
   }
   
    public function manage_search(){
           $view = 'daily';
        if (request()->view) {
          $view = request()->view;
        }
        return view('content.bazars.manage_search',compact('view'));
   }
}
