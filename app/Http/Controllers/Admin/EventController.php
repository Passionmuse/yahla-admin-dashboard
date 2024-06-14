<?php

namespace App\Http\Controllers\Admin;

use App\Models\Event;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\EventCategory;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $view = 'daily';
        if (request()->view) {
          $view = request()->view;
        }
        $events = Event::orderBy("updated_at", "desc")->get();
        $categories = Category::where('target', 'event')->where('status', 1)->get();
        return view('content.events.index', compact("events", "categories","view"));
    }

    public function manage()
    {
           $view = 'daily';
        if (request()->view) {
          $view = request()->view;
        }
        $events = Event::orderBy("updated_at", "desc")->get();
        $categories = Category::where('target', 'event')->where('status', 1)->get();
        return view('content.events.manage', compact("events", "categories","view"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::where('target', 'event')->where('status', 1)->get();
        return view("content.events.create", compact("categories"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEventRequest $request)
    {
        $validated = $request->validated();

        $validated['ticket_sale'] = filter_var($validated['ticket_sale']?? true, FILTER_VALIDATE_BOOLEAN);
        $validated['online_sale'] = filter_var($validated['online_sale']?? true, FILTER_VALIDATE_BOOLEAN);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->image->store("/events", "public");
            $validated["image"] = $imagePath;
        }

        $soundPath = null;
        if ($request->hasFile('sound')) {
            $soundPath = $request->sound->store("/events", "public");
            $validated["sound"] = $soundPath;
        }

        $event = Event::create($validated);

        return back()->with("success", "Event successfully created.");
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
        $event = Event::find($id);
        $categories = EventCategory::where('status', 1)->get();
        return view("content.events.edit", compact("event", "categories"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEventRequest $request, $id)
    {

        $validated = $request->validated();
        $validated['ticket_sale'] = filter_var($validated['ticket_sale']?? true, FILTER_VALIDATE_BOOLEAN);
        $validated['online_sale'] = filter_var($validated['online_sale']?? true, FILTER_VALIDATE_BOOLEAN);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->image->store("/events", "public");
            $validated["image"] = $imagePath;
        }

        $soundPath = null;
        if ($request->hasFile('sound')) {
            $soundPath = $request->sound->store("/events", "public");
            $validated["sound"] = $soundPath;
        }

        $event = Event::find($id);
        $event->fill($validated);
        $event->reason = $request->reason;
        $event->save();

        return back()->with("success", "Event successfully updated.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::find($id);
        // Delete Image
        if ($event->image)
            Storage::delete($event->image);
        // Delete Image
        if ($event->sound)
            Storage::delete($event->sound);
        $event->delete();

        return back()->with("success", "Event successfully deleted.");
    }

    public function requests()
    {
        $events = Event::where("status", 0)->orderBy("updated_at", "desc")->get();
        $categories = Category::where('target', 'event')->where('status', 1)->get();
        return view('content.events.requests', compact("events", "categories"));
    }

    public function tickets()
    {
        $events = Event::where('ticket_sale', true)->get();
        return view("content.events.tickets", compact("events"));
    }
     public function propertylisting()
    {
        $events = Event::where('ticket_sale', true)->get();
        return view("content.events.ex_property_listing", compact("events"));
    }
   
}
