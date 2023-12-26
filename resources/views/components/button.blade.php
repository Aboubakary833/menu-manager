@props([
	"type" => "button",
	"size" => "base",
	"variant" => "primary",
	"href" => "#",
	"roundedFull" => false,
	"component" => "button",
	"class" => "",
	"disabled" => false
])

@php
	$variants = [
		"primary" => "bg-primary border border-primary",
		"secondary" => "bg-secondary border border-secondary",
		"success" => "bg-success border border-success",
		"warning" => "bg-warning border border-warning",
		"danger" => "bg-danger border border-danger",
		"info" => "bg-info border border-info",
];

	$sizes = [
		"sm" => "p-2 text-xs font-regular",
		"base" => "px-4 py-[10px] text-sm font-medium",
		"lg" => "px-6 py-4 text-base font-semibold"
];

	$textColor = match ($variant) {
		"warning", "info" => "text-dark",
		 default => "text-white"
	};
@endphp

<{{ $component }}
	type="{{ $type }}" 
	href="{{ $href }}"
	{{ $attributes->class([
		$sizes[$size],
		"gap-2",
		$variants[$variant],
		$textColor,
		"inline-flex items-center gap-x-2 transition-colors hover:brightness-[.93] cursor-pointer disabled:opacity-75 disabled:pointer-events-none",
		$roundedFull ? "rounded-full" : "rounded-lg",
		$class,
	]) }} @disabled($disabled)>
	{{ $slot }}
</{{ $component }}>
