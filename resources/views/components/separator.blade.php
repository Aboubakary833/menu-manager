@props([
	"label" => null,
	//labelPosition: start | middle | end
	"labelPosition" => "middle",
	//orientation: horizontal | vertical
	"orientation" => "horizontal",

	"verticalResponsive" => false,
])

@php

	if ($verticalResponsive)
		$orientation = "vertical";

	$orientationClassesRegistry = [
		"horizontal" => "flex-row items-center",
		"vertical" => "flex-col justify-center",
	];

	$labelPositionClassesRegistry = [
		"horizontal" => [
			"start" => "after:flex-[1_1_0%] after:border-t after:border-gray-200 after:ms-6 dark:after:border-dark-400",
			"middle" => "before:flex-[1_1_0%] before:border-t before:border-gray-200 before:me-6 after:flex-[1_1_0%] after:border-t after:border-gray-200 after:ms-6 dark:before:border-dark-400 dark:after:border-dark-400",
			"end" => "before:flex-[1_1_0%] before:border-t before:border-gray-200 before:me-6 dark:before:border-dark-400",
		],
		"vertical" => [
			"start" => "",
			"middle" => "",
			"end" => "",
		],
	];

	$classes = twMerge([
		"py-3 text-sm text-gray-800 dark:text-info-700",
		$orientationClassesRegistry[$orientation],
		$label ? $labelPositionClassesRegistry[$orientation][$labelPosition] : "" 
	]);
	
@endphp

@if (!$label && "vertical" !== $orientation)
	<hr {{ $attributes->twMerge("border-gray-200 dark:border-dark-400") }} />
@else
	<div {{ $attributes->twMerge(["flex", $classes]) }}>
		{{ $label }}
	</div>
@endif
