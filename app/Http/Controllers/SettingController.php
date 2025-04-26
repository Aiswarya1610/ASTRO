<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Settings;
// app/Http/Controllers/SettingController.php

class SettingController extends Controller
{
    public function index()
    {
        $settings = Settings::all()->pluck('value', 'keyname');
        return view('dashboard.settings.index', compact('settings'));
    }

    public function update(Request $request)
    {
        foreach ($request->except('_token') as $key => $value) {
            Settings::setValue($key, $value);
        }

        return redirect()->back()->with('success', 'Settings updated successfully.');
    }
}

