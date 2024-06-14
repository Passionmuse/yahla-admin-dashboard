<?php

namespace App\Http\Controllers\Admin\Settings;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PricingController extends Controller
{
    public function index()
    {
        // Get Settings
        $standard_is_free = Setting::firstOrCreate(['name' => 'standard_is_free'], ['value' => 'true']);
        $premium_is_free = Setting::firstOrCreate(['name' => 'premium_is_free'], ['value' => 'false']);
        $vip_is_free = Setting::firstOrCreate(['name' => 'vip_is_free'], ['value' => 'false']);
        $standard_is_free->save();
        $premium_is_free->save();
        $vip_is_free->save();

        $standard_price = Setting::firstOrCreate(['name' => 'standard_price'], ['value' => '0']);
        $premium_price = Setting::firstOrCreate(['name' => 'premium_price'], ['value' => '5900']);
        $vip_price = Setting::firstOrCreate(['name' => 'vip_price'], ['value' => '11900']);
        $standard_price->save();
        $premium_price->save();
        $vip_price->save();

        return view("content.settings.pricing", compact(
            'standard_is_free',
            'premium_is_free',
            'vip_is_free',
            'standard_price',
            'premium_price',
            'vip_price',
        ));
    }
}
