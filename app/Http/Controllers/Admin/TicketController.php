<?php

namespace App\Http\Controllers\Admin;

use App\Models\Event;
use App\Models\Ticket;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTicketRequest;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tickets = Ticket::orderBy("updated_at", "desc")->get();
        return view('content.tickets.index', compact("tickets"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $events = Event::all();
        return view("content.tickets.create", compact("events"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTicketRequest $request)
    {
        $validated = $request->validated();

        $ticket = Ticket::create($validated);

        return back()->with("success", "Ticket successfully created.");
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
        $category = Ticket::find($id);
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

        $category = Ticket::find($id);
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
        $category = Ticket::find($id);
        $category->delete();

        return back()->with("success", "Category successfully deleted.");
    }
}
