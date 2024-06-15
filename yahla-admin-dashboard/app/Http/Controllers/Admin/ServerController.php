<?php

namespace App\Http\Controllers\Admin;

use App\Models\Server;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreServerRequest;
use App\Http\Requests\UpdateServerRequest;

class ServerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servers = Server::orderBy("updated_at", "DESC")->get();
        return view("content.servers.index", compact("servers"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("content.servers.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreServerRequest $request)
    {
        $validated = $request->validated();

        $server = Server::create($validated);

        return back()->with("success", "Server successfully added.");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $server = Server::find($id);
        return view("content.servers.show", compact("server"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $server = Server::find($id);
        return view("content.servers.edit", compact("server"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateServerRequest $request, $id)
    {
        $validated = $request->validated();

        $server = Server::find($id);
        $server->fill($validated);
        $server->save();

        return back()->with("success", "Server successfully updated.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $server = Server::find($id);
        $server->delete();

        return back()->with("success", "Server successfully deleted.");
    }
}
