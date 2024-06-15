<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Blade;
use Spatie\Activitylog\Models\Activity;

class ActivityController extends Controller
{
    public function index(Request $request)
    {
        $activity = [];
        if ($request->all) {
            $activity = Activity::orderBy('created_at', 'DESC')->paginate(20);
        } else {
            $activity = Auth::user()->actions()->orderBy('created_at', 'DESC')->paginate(20);
        }

        $data = [];
        foreach ($activity as $action) {
            $data[] = Blade::render('<x-activity-action :action="$action" />', ['action' => $action]);
        }

        return $data;
    }
}
