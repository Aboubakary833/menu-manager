<?php

use App\Models\Setting;
use App\Models\User;

if (!function_exists("getSetting"))
{
    /**
     * Get current user specific setting
     * @param string $key
     * @param object|null $of
     * @return string
     */
    function getSetting(string $key, null|object $of = null): ?string
    {
        $user = $of ?? user();
        $setting = $user?->settings->where("key", $key)->first();

        return $setting?->value;
    }
}

if (!function_exists("createSetting"))
{
    /**
     * Create a new setting for a given user or the authenticated one
     * @param string $key
     * @param string $value
     * @param User|null $for
     * If not specified, will create setting for the current authenticated user
     * @return Setting
     */
    function createSetting(string $key, string $value, null|User $for = null) : ?Setting
    {
        $user = $for ?? user();
        if (!$user)
            return null;
        return Setting::create([
            "key" => $key,
            "value" => $value,
            "user_id" => $user->id
        ]);
    }
}
