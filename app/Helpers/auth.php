<?php

declare(strict_types=1);

if (!function_exists("getAuthRedirectUrl"))
{
	/**
	 * Generate redirect url for a given auth provider
	 */
	function getAuthRedirectUrl(string $provider) : string
	{
		if (app()->isBooted() && app()->isProduction())
            return config("app.url") . "/auth/callback?provider=" . $provider;
        return config("app.url") . ":8000/auth/callback?provider=" . $provider;
	}
}

if (!function_exists("codeFieldsNames"))
{
    /**
     * Return array of default codes fields names
     *
     * @return array
     */
    function codeFieldsNames() : array
    {
        return [
            "__0x46i52s54",
            "__0x53e43o4Ed",
            "__0x54h49r44",
            "__0x46o55r54h",
            "__0x46i46t48",
        ];
    }
}
