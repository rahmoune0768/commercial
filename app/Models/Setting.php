<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = ['key', 'group', 'value'];

    protected $casts = [
        'value' => 'array',  // Automatically cast value to an array or JSON
    ];

    // Retrieve a setting by its key
    public static function getSetting($key)
    {
        return self::where('key', $key)->first();
    }

    // Update or create a setting by key
    public static function setSetting($key, $value)
    {
        $setting = self::firstOrNew(['key' => $key]);
        $setting->value = $value;
        $setting->save();
    }

    // Delete a setting by its key
    public static function deleteSetting($key)
    {
        $setting = self::where('key', $key)->first();
        if ($setting) {
            $setting->delete();
        }
    }

    // Retrieve all settings
    public static function getAllSettings()
    {
        return self::all();
    }

    // Retrieve settings by their group
    public static function getSettingsByGroup($group)
    {
        return self::where('group', $group)->get();
    }
}
