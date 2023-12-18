<?php

declare(strict_types=1);


namespace App\Traits;


trait HasEnumUtils {
	
	public static function values(): array
	{
		return array_map(fn($case) => $case->value, self::cases());
	}

	public static function keys(): array
	{
		return array_map(fn($case) => $case->name, self::cases());
	}

	public static function hasValue(mixed $value): bool
	{
		return in_array($value, self::values());
	}

	public static function hasKey(string $value): bool
	{
		return in_array($value, self::keys());
	}

	public static function getValue(string $key): mixed
	{
		return self::toArray()[$key];
	}

	public static function toArray(): array
	{
		$array = [];
		foreach (self::cases() as $case)
			$array[$case->name] = $case->value;
		return $array;
	}

}
