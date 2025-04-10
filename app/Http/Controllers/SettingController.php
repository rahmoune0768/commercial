<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Config;

class SettingController extends Controller
{
    /**
     * Display the settings page.
     *
     * @return \Inertia\Response
     */
    public function index()
    {
        // Get all settings from the cache or database if cache doesn't exist
        $settings = Cache::remember('settings', now()->addMinutes(60), function () {
            // Fetch all settings from the database and return as an associative array
            return Setting::all()->pluck('value', 'key')->toArray();
        });

        // Pass settings to the Inertia view
        return Inertia::render('Settings/Index', [
            'settings' => $settings,
        ]);
    }

    /**
     * Update the specified setting.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $key
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $key)
    {
        // Validate the incoming request
        $request->validate([
            'value' => 'required|string', // Assuming value is a string, adjust based on type
        ]);

        // Find the setting by key
        $setting = Setting::where('key', $key)->first();

        if (!$setting) {
            return back()->withErrors(['error' => 'Setting not found.']);
        }

        // Update the value of the setting
        $setting->value = $request->input('value');
        $setting->save();

        // Clear cache after updating settings
        Cache::forget('settings');

        // Optionally, re-cache the updated settings
        Cache::remember('settings', now()->addMinutes(60), function () {
            return Setting::all()->pluck('value', 'key')->toArray();
        });

        // Redirect back to the settings page
        return back()->with('success', 'Setting updated successfully!');
    }

    /**
     * Show the form for editing the specified setting.
     *
     * @param  string  $key
     * @return \Inertia\Response
     */
    public function edit($key)
    {
        // Retrieve the setting by key
        $setting = Setting::where('key', $key)->first();

        if (!$setting) {
            return back()->withErrors(['error' => 'Setting not found.']);
        }

        // Pass setting data to the view
        return Inertia::render('Settings/Edit', [
            'setting' => $setting,
        ]);
    }

    /**
     * Store a new setting.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate incoming request data
        $request->validate([
            'key' => 'required|string|unique:settings,key',
            'value' => 'required|string',
            'group' => 'nullable|string',
        ]);

        // Create a new setting
        Setting::create([
            'key' => $request->input('key'),
            'value' => $request->input('value'),
            'group' => $request->input('group'),
        ]);

        // Clear the settings cache
        Cache::forget('settings');

        return redirect()->route('settings.index')->with('success', 'Setting created successfully!');
    }

    /**
     * Delete the specified setting.
     *
     * @param  string  $key
     * @return \Illuminate\Http\Response
     */
    public function destroy($key)
    {
        // Find the setting by key and delete it
        $setting = Setting::where('key', $key)->first();

        if (!$setting) {
            return back()->withErrors(['error' => 'Setting not found.']);
        }

        $setting->delete();

        // Clear the settings cache
        Cache::forget('settings');

        return back()->with('success', 'Setting deleted successfully!');
    }
}
