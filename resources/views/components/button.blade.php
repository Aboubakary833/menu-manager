@props([
	"type" => "button",
	"size" => "base",
	"variant" => "primary",
	"href" => "#",
	"roundedFull" => false,
	"component" => "button",
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
		"sm" => "p-2 text-xs",
		"base" => "px-4 py-[10px] text-sm",
		"lg" => "px-5 py-3 text-base"
];

	$textColor = match ($variant) {
		"warning", "info" => "text-dark",
		 default => "text-white"
	};
@endphp

<{{ $component }}
	type="{{ $type }}" 
	href="{{ $href }}"
	{{ $attributes->twMerge([
		$sizes[$size],
		"sm" === $size ? "font-regular" : "font-medium",
		"gap-2",l
		$variants[$variant],
		$textColor,
		"inline-flex justify-center items-center gap-x-2 transition-colors hover:brightness-[.93] cursor-pointer disabled:opacity-75 disabled:pointer-events-none",
		$roundedFull ? "rounded-full" : "rounded-lg",
	]) }}
	@disabled($disabled)>
	{{ $slot }}
</{{ $component }}>
