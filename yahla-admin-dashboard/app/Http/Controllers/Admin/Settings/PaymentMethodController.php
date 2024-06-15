<?php

namespace App\Http\Controllers\Admin\Settings;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PaymentMethodController extends Controller
{
    public function index()
    {
        // Get Paypal Settings
        $paypal_client_id = Setting::firstOrCreate(['name' => 'paypal_client_id']);
        $paypal_client_secret = Setting::firstOrCreate(['name' => 'paypal_client_secret']);
        $paypal_sandbox_mode = Setting::firstOrCreate(['name' => 'paypal_sandbox_mode'], ['value' => 'true']);
        $paypal_client_id->save();
        $paypal_client_secret->save(); 
        $paypal_sandbox_mode->save();

        // Get Stripe Settings
        $stripe_key = Setting::firstOrCreate(['name' => 'stripe_key']);
        $stripe_secret = Setting::firstOrCreate(['name' => 'stripe_secret']);
        $stripe_key->save();
        $stripe_secret->save();

        return view('content.settings.payment_methods', compact(
            "paypal_client_id",
            "paypal_client_secret",
            "paypal_sandbox_mode",
            "stripe_key",
            "stripe_secret",
        ));
    }

    public function save(Request $request)
    {
        $validated = $request->validate([
            "paypal_client_id" => "nullable",
            "paypal_client_secret" => "nullable",
            "paypal_sandbox_mode" => "nullable",
            "stripe_key" => "nullable",
            "stripe_secret" => "nullable",
        ]);

        foreach ($validated as $name => $value) {
            if ($value === 'on') $value = 'true';
    
            $setting = Setting::where('name', $name)->first();
            $setting->value = $value;
            $setting->save();
        }

        if (isset($validated['paypal_client_id']) && !isset($validated['paypal_sandbox_mode'])) {
            $setting = Setting::where('name', 'paypal_sandbox_mode')->first();
            $setting->value = 'false';
            $setting->save();
        }

        return back()->with('success', 'Setting updated successfully');
    }
}
