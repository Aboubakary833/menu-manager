<?php

declare(strict_types=1);

namespace App\Contracts;


interface EnumContract {

	public static function values() : array;

	public static function keys() : array;

	public static function hasValue(mixed $value) : bool;

	public static function hasKey(string $value) : bool;

	public static function getValue(string $key) : mixed;

	public static function toArray() : array;
}
