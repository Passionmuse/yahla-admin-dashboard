<?php

namespace App\Http\Controllers\Admin\Settings;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageSettingsController extends Controller
{
    public function index()
    {
        // $stripe_key = Setting::firstOrCreate(['name' => 'stripe_key']);
        // $stripe_secret = Setting::firstOrCreate(['name' => 'stripe_secret']);
        // $stripe_key->save();
        // $stripe_secret->save();
        $post_module = Setting::firstOrCreate(['name' => 'post_module']);
        $music_module = Setting::firstOrCreate(['name' => 'music_module']);
        $news_module = Setting::firstOrCreate(['name' => 'news_module']);
        $events_module = Setting::firstOrCreate(['name' => 'events_module']);
        $videos_module = Setting::firstOrCreate(['name' => 'videos_module']);
        $online_shop_module = Setting::firstOrCreate(['name' => 'online_shop_module']);
        $bazar_module = Setting::firstOrCreate(['name' => 'bazar_module']);
        $history_module = Setting::firstOrCreate(['name' => 'history_module']);
        $media_module = Setting::firstOrCreate(['name' => 'media_module']);
        $voting_module = Setting::firstOrCreate(['name' => 'voting_module']);

        return view('content.settings.page_settings', compact(
            'post_module',
            'music_module',
            'news_module',
            'events_module',
            'videos_module',
            'online_shop_module',
            'bazar_module',
            'history_module',
            'media_module',
            'voting_module' 
        ));
    }

    public function save(Request $request)
    {
        $validated = $request->validate([
            "name" => "required",
            "value" => "nullable",
        ]);

        extract($validated);

        $setting = Setting::firstOrCreate(['name' => $name]);
        $setting->value = $value;
        $setting->save();

        return "1";
    }
}
