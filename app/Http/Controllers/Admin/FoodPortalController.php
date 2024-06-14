<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FoodPortalController extends Controller
{
    
    
	
	public function category_images()
	{
		return view('content/food_portal/category_images');	
	}
	
	public function food_images()
	{
		return view('content/food_portal/food_images');	
	}
	
	public function food_essentials()
	{
		return view('content/food_portal/food_essentials');	
	}
	
	public function additional_services()
	{
		return view('content/food_portal/additional_services');
	}
	
	public function manage_additives()
	{
		return view('content/food_portal/manage_additives');
	}
	
	public function manage_allergies()
	{
		return view('content/food_portal/manage_allergies');
	}
	
	public function manage_food_type()
	{
		return view('content/food_portal/manage_food_type');
	}
	
	public function QR_table_area()
	{
		return view('content/food_portal/QR_table_area');
	}
	
	public function manage_cuisine()
	{
		return view('content/food_portal/manage_cuisine');
	}
	
	
	
	// Restuarent 
	
	
	public function add_restaurant()
	{
		return view('content/food_portal/add_restaurant');
	}
	
	public function manage_request()
	{
		 $view = 'daily';
        if (request()->view) {
          $view = request()->view;
        }
		return view('content/food_portal/manage_request',compact("view"));
	}
	public function manage_restaurant()
	{
		return view('content/food_portal/manage_restaurant');
	}
	
	public function total_restaurant()
	{
		$view = 'daily';
        if (request()->view) {
          $view = request()->view;
        }
		return view('content/food_portal/total_restaurant',compact("view"));
	}
	
	public function manage_reservation()
	{
		return view('content/food_portal/manage_reservation');
	}
	public function manage_reservation_plus()
	{
		return view('content/food_portal/manage_reservation_plus');
	}
	
	
	
	
	
	public function commission_reservation()
	{
		return view('content/food_portal/commission_reservation');
	}
	public function commission_reservation_plus()
	{
		return view('content/food_portal/commission_reservation_plus');
	}
	public function rejected_reasons()
	{
		return view('content/food_portal/rejected_reasons');
	}
	public function canceled_reasons()
	{
		return view('content/food_portal/canceled_reasons');
	}
	public function prefix()
	{
		return view('content/food_portal/prefix');
	}
	public function reasons()
	{
		return view('content/food_portal/reasons');
	}
	public function restaurant_policy()
	{
		return view('content/food_portal/restaurant_policy');
	}
	
	
	
	
	// delivery
	public function add_shop()
	{
		return view('content/food_portal/add_shop');
	}
	
	public function manage_delivery_shops()
	{
		return view('content/food_portal/manage_delivery_shops');
	}
	public function delivery_manage_request()
	{
		return view('content/food_portal/delivery_manage_request');
	}
	
	public function commission_delivery()
	{
		return view('content/food_portal/commission_delivery');
	}
	public function delivery_rejected_reasons()
	{
		return view('content/food_portal/delivery_rejected_reasons');
	}
	public function delivery_canceled_reasons()
	{
		return view('content/food_portal/delivery_canceled_reasons');
	}
	public function delivery_prefix()
	{
		return view('content/food_portal/delivery_prefix');
	}
	public function delivery_reasons()
	{
		return view('content/food_portal/delivery_reasons');
	}
	
	public function delivery_policy_term()
	{
		return view('content/food_portal/delivery_policy_term');
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		
}