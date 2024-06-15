<?php

namespace App\Http\Controllers\Admin\Settings;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    public function save(Request $request)
    {
        $validated = $request->validate([
            "name" => "required",
            "value" => "nullable",
            "description" => "nullable"
        ]);

        extract($validated);

        $setting = Setting::firstOrCreate(['name' => $name]);
        $setting->value = $value;
        $setting->description = isset($description)? $description: null;
        $setting->save();

        return "1";
    }

    public function saveMany(Request $request)
    {
        $validated = $request->validate([
            "settings" => "required|array",
            "settings.*.name" => "required",
            "settings.*.value" => "nullable",
            "settings.*.description" => "nullable"
        ]);

        extract($validated);

        foreach ($settings as $item) {
            $setting = Setting::firstOrCreate(['name' => ($item['name']?? '')]);
            $setting->value = $item['value']?? '';
            $setting->description = $item['description']?? '';
            $setting->save();
        }

        return "1";
    }
}
