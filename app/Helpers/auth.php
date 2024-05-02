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
