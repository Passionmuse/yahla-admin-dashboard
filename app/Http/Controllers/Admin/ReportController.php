<?php

namespace App\Http\Controllers\Admin;

use App\Models\Report;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreReportRequest;
use App\Http\Requests\UpdateReportRequest;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $status = 1;
        if (request()->status !== null) {
            switch(request()->status) {
                case 'awaiting':
                    $status = 0;
                    break;
                case 'solved':
                    $status = 1;
                    break;
                case 'dismissed':
                    $status = 2;
                    break;
            }
        }
            
        $reports = Report::where("status", $status)->orderBy("updated_at", "DESC")->get();
        return view("content.reports.index", compact("reports", "status"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("content.reports.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreReportRequest $request)
    {
        $validated = $request->validated();

        $report = Report::create($validated);

        return back()->with("success", "Report successfully created.");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $report = Report::find($id);
        return view("content.reports.show", compact("report"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $report = Report::find($id);
        return view("content.reports.edit", compact("report"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateReportRequest $request, $id)
    {
        $validated = $request->validated();
        $report = Report::find($id);
        $report->fill($validated);
        $report->save();

        return back()->with("success", "Report successfully updated.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $report = Report::find($id);
        $report->delete();

        return back()->with("success", "Report successfully deleted.");
    }
}
