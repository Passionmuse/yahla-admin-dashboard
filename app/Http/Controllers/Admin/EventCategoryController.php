<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\EventCategory;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEventCategoryRequest;
use App\Http\Requests\UpdateEventCategoryRequest;

class EventCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = EventCategory::orderBy("updated_at", "desc")->get();
        return view('content.events.categories.index', compact("categories"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("content.events.categories.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEventCategoryRequest $request)
    {
        $validated = $request->validated();

        $category = EventCategory::create($validated);

        return back()->with("success", "Category successfully created.");
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
        $category = EventCategory::find($id);
        return view("content.events.categories.edit", compact("category"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEventCategoryRequest $request, $id)
    {
        $validated = $request->validated();

        $category = EventCategory::find($id);
        $category->fill($validated);
        $category->save();

        return back()->with("success", "Category successfully updated.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = EventCategory::find($id);
        $category->delete();

        return back()->with("success", "Category successfully deleted.");
    }
}
