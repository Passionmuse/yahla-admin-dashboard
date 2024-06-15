<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\UploadMovieCategory;
use Illuminate\Http\Request;

class UploadMovieCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movie_category = UploadMovieCategory::get();
        return view('content.upload_movie_category.index' , compact('movie_category'));
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
            'movie_category' => 'required'
        ]);

        $model = new UploadMovieCategory();
        $model->category = $request->movie_category;
        if($model->save()){
            return redirect()->route('upload-movies-category.index')->with('success', 'Movie Category Has been inserted');
        }else{
            return redirect()->route('upload-movies-category.index')->with('error', 'Failed to add Movie category');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UploadMovieCategory  $uploadMovieCategory
     * @return \Illuminate\Http\Response
     */
    public function show(UploadMovieCategory $uploadMovieCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UploadMovieCategory  $uploadMovieCategory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $movie_category = UploadMovieCategory::find($id);
        return view('content.upload_movie_category.edit', compact('movie_category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UploadMovieCategory  $uploadMovieCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $movie = UploadMovieCategory::findorFail($id);
         $movie->category = $request->movie_category;
         if($movie->update()){
            return redirect()->route('upload-movies-category.index')->with('success', 'Movie Category Has been Updated');
        }else{
            return redirect()->route('upload-movies-category.index')->with('error', 'Failed to update Movie category');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UploadMovieCategory  $uploadMovieCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $movie = UploadMovieCategory::findorFail($id);
        if($movie->delete($movie->id)){
            return redirect()->route('upload-movies-category.index')->with('success', 'Movie Category Has been Deleted');
        }else{
            return redirect()->route('upload-movies-category.index')->with('error', 'Failed to delete movie category');
        }
    }
    public function status($id , $status){
        $movie = UploadMovieCategory::find($id);
        $movie->status = $status;
        if($movie->update()){
            return redirect()->route('upload-movies-category.index')->with('success', 'Status Has been Updated');
        }else{
            return redirect()->route('upload-movies-category.index')->with('error', 'Status is not changed');

        }
    }
}
