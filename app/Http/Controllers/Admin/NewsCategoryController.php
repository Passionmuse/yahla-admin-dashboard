<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\NewsCategory;
use Illuminate\Http\Request;
class NewsCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news_category = NewsCategory::get();
        return view('content.new-category.index' , compact('news_category'));
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
            'news_category' => 'required'
        ]);

        $model = new NewsCategory();
        $model->name = $request->news_category;
        if($model->save()){
            return redirect()->route('news-category.index')->with('success', 'News Category Has been inserted');
        }else{
            return redirect()->route('news-category.index')->with('error', 'Failed to add news category');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NewsCategory  $newsCategory
     * @return \Illuminate\Http\Response
     */
    public function show(NewsCategory $newsCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NewsCategory  $newsCategory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vote_category = NewsCategory::find($id);
        return view('content.voting_category.edit', compact('vote_category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NewsCategory  $newsCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $news = NewsCategory::findorFail($id);
         $news->name = $request->news_category;
         if($news->update()){
            return redirect()->route('news-category.index')->with('success', 'News Category Has been Updated');
        }else{
            return redirect()->route('news-category.index')->with('error', 'Failed to update news category');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NewsCategory  $newsCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = NewsCategory::findorFail($id);
        if($news->delete($news->id)){
            return redirect()->route('news-category.index')->with('success', 'News Category Has been Deleted');
        }else{
            return redirect()->route('news-category.index')->with('error', 'Failed to delete news category');
        }
    }

    public function status($id , $status){
        $category = NewsCategory::find($id);
        $category->status = $status;
        if($category->update()){
            return redirect()->route('news-category.index')->with('success', 'Status Has been Updated');
        }else{
            return redirect()->route('news-category.index')->with('error', 'Status is not changed');

        }
    }
}
