<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Music;
use App\Models\Country;

class AnalyticsController extends Controller
{
  public function index()
  {
  //  dd(\Helper::translate("welcome to world" , 1));
    $male_account = User::where('gender', '=', 'male')->count();
    $female_account = User::where('gender', '=', 'female')->count();
    $music = Music::count(); 
    $country  = Country::count();
    return view('content.dashboard.dashboards-analytics' , compact('male_account', 'female_account', 'music' , 'country'));
  }
}
