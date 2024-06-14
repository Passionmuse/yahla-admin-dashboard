<?php

namespace App\Http\Controllers\Admin;
use App\Models\Music;
use App\Models\Artist;
use Illuminate\Http\Request;
use App\Models\MusicCategory;
use App\Models\Country;
use App\Http\Controllers\Controller;

class ServicePortalController extends Controller
{
   public function prefix(){
       return view('content.serviceportal.prefix');
   }
    public function policy_terms(){
       return view('content.serviceportal.policy_terms');
   }
   
    public function reason(){
       return view('content.serviceportal.reason');
   }
   
   public function manage_categories(){
        return view('content.serviceportal.manage_categories');
   }
   
     public function addpricing(){
        return view('content.serviceportal.addpricing');
   }
     public function manage_service(){
           $view = 'daily';
        if (request()->view) {
          $view = request()->view;
        }
        return view('content.serviceportal.manage_service',compact('view'));
   }
     public function manage_search(){
           $view = 'daily';
        if (request()->view) {
          $view = request()->view;
        }
        return view('content.serviceportal.manage_search',compact('view'));
   }
   
}
