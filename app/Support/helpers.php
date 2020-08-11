<?php

use App\Models\Setting;

if (!function_exists('setting')) {
    function setting(string $key)
    {
        static $settings = null;

        if ($settings === null) {
            $settings = Setting::all()->pluck(Setting::FIELD_VALUE, Setting::FIELD_KEY);
        }

        return $settings[$key];
    }
}
