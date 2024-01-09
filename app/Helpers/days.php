<?php

use App\Enums\NameConvention;

if (!function_exists("daysNames")) {
	/**
	 *
	 * Get all the days of the week names
	 */
	function daysNames(NameConvention $convention = NameConvention::LOWER) : array
	{
		$days = [];
		$day = now()->startOfWeek();
		for (; $day < now()->endOfWeek(); $day->addDay())
		{
			$name = strtolower($day->locale(config("app.locale") ?? config("app.fallback_locale"))->dayName);
            $days[] = match ($convention) {
                NameConvention::UPPER => strtoupper($name),
                NameConvention::PASCAL => ucfirst($name),
                default => $name,
            };
		}

		return $days;
	}
}
