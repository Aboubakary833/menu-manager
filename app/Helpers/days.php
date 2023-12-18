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
			switch ($convention) {
				case NameConvention::UPPER:
					$days[] = strtoupper($name);
					break;
				
				case NameConvention::PASCAL:
					$days[] = ucfirst($name);
					break;

				default:
					$days[] = $name;
					break;
			}
		}

		return $days;
	}
}
