<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use Illuminate\Http\Request;

class AdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ads = Ad::whereIn('status', [1, 2 , 3])->get();
        return view('content.ads.index' , compact('ads'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FanPage  $ad
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ad = Ad::findorFail($id);
        if($ad->delete($ad->id)){
            return redirect()->back()->with('success', 'Ad deleted');
        }else{
            return redirect()->back()->with('error', 'Failed to delete Ad');
        }
    }

    public function status(Request $request, $id , $status){
        $ad = Ad::find($id);
        $ad->status = $status;
        if ($request->denied_reason)
            $ad->denied_reason = $request->denied_reason;

        $notifyMsgs = [
            'Ad moved to pending',
            'Ad accepted',
            'Ad denied',
            'Ad on Hold'
        ];

        if($ad->update()){
            return redirect()->back()->with('success', $notifyMsgs[(int) $status]);
        }else{
            return redirect()->back()->with('error', 'Status is not changed');

        }
    }

    public function requests()
    {
        $type = url()->full();
        $parsedUrl = parse_url($type);
        parse_str($parsedUrl['query'], $queryParameters);
        $type = $queryParameters['type'];
        $ads = Ad::where('status' , 0)->where('type' , $type)->get();
        return view('content.ads.requests' , compact('ads'));
    }

    public function accepted()
    {
        $type = url()->full();
        $parsedUrl = parse_url($type);
        parse_str($parsedUrl['query'], $queryParameters);
        $type = $queryParameters['type'];
        $ads = Ad::where('status' , 1)->where('type' , $type)->get();
        return view('content.ads.accepted' , compact('ads'));
    }

    public function denied()
    {
        $type = url()->full();
        $parsedUrl = parse_url($type);
        parse_str($parsedUrl['query'], $queryParameters);
        $type = $queryParameters['type'];
        $ads = Ad::where('status' , 2)->where('type' , $type)->get();
        return view('content.ads.denied' , compact('ads'));
    }

    public function onHold(){
        $type = url()->full();
        $parsedUrl = parse_url($type);
        parse_str($parsedUrl['query'], $queryParameters);
        $type = $queryParameters['type'];
        $ads = Ad::where('status' , 3)->where('type' , $type)->get();
        return view('content.ads.onHold' , compact('ads'));
    }

    public function setting(){
        return view('content.ads.setting');
    }
}
