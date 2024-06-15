<?php

namespace App\Http\Controllers\Admin;
use App\Models\Music;
use App\Models\Artist;
use Illuminate\Http\Request;
use App\Models\MusicCategory;
use App\Models\Country;
use App\Models\Event;
use App\Models\Category;
use App\Http\Controllers\Controller;

class OnlineShopController extends Controller
{
   public function prefix(){
       return view('content.onlineshop.prefix');
   }
    public function policy_terms(){
       return view('content.onlineshop.policy_terms');
   }
   
    public function reason(){
       return view('content.onlineshop.reason');
   }
   
    public function addonlineshop(){
          $view = 'daily';
        if (request()->view) {
          $view = request()->view;
        }
        $events = Event::orderBy("updated_at", "desc")->get();
        $categories = Category::where('target', 'event')->where('status', 1)->get();
       return view('content.onlineshop.addonlineshop', compact("events", "categories","view"));
   }
   
   
     public function newshop(){
          $view = 'daily';
        if (request()->view) {
          $view = request()->view;
        }
        $events = Event::orderBy("updated_at", "desc")->get();
        $categories = Category::where('target', 'event')->where('status', 1)->get();
       return view('content.onlineshop.newshop', compact("events", "categories","view"));
   }
   
   
     public function manageshop(){
          $view = 'daily';
        if (request()->view) {
          $view = request()->view;
        }
        $events = Event::orderBy("updated_at", "desc")->get();
        $categories = Category::where('target', 'event')->where('status', 1)->get();
       return view('content.onlineshop.manageshop', compact("events", "categories","view"));
   }
     public function manageitem(){
       return view('content.onlineshop.manageitem');
   }
   
   public function commisionsetting(){
       return view('content.onlineshop.commisionsetting');
   }
   
   public function taxsetting(){
       return view('content.onlineshop.taxsetting');
   }
   
   public function currency(){
       return view('content.onlineshop.currency');
   }
   
   public function additionalservices(){
       return view('content.onlineshop.additionalservices');
   }
   
     public function shipping(){
       return view('content.onlineshop.shipping');
   }
   
}
