<?php

namespace App\Http\Controllers\Admin\liveStream;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class livestreamController extends Controller
{
    public function channel_request(){
        $view = 'daily';
        if (request()->view) {
          $view = request()->view;
        }
        return view('content.live_stream.request_channel',compact('view'));
    }
    public function manage_live_stream(){
        return view('content.live_stream.manage_live_stream');
    }
    public function report_live_stream(){
        return view('content.live_stream.report_live_stream');
    }
    public function manage_channel(){
        $view = 'daily';
        if (request()->view) {
          $view = request()->view;
        }
        return view('content.live_stream.manage_channel',compact('view'));
    }
}
