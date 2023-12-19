@props([
	"type" => "button",
	"size" => "base",
	"variant" => "primary",
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
		"base" => "px-4 py-3 text-sm font-semibold",
		"lg" => "px-6 py-4 text-base font-semibold"
	]
@endphp

<{{ $component }}
	type="{{ $type }}" 
	{{ $attributes->class([
		$sizes[$size],
		"gap-2",
		$variants[$variant],
		$variant === "warning" ? "text-dark" : "text-white",
		"inline-flex items-center gap-x-2 transition-colors hover:brightness-[.93] disabled:opacity-75 disabled:pointer-events-none",
		$roundedFull ? "rounded-full" : "rounded-lg"
	]) }} @disabled($disabled)>
	{{ $slot }}
</{{ $component }}>
