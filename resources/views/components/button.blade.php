@props([
	"type" => "button",
	"size" => "base",
	"variant" => "primary",
	"rounded" => false,
	"component" => "button"
])

@php
	$variants = [
		"primary" => "bg-primary",
		"secondary" => "bg-secondary",
		"thirdly" => "bg-thirdly",
		"success" => "bg-success",
		"warning" => "bg-warning",
		"danger" => "bg-danger",
		"info" => "bg-info",
 	]
@endphp

<{{ $component }} type="{{ $type }}" class="py-3 px-4 bg-{{ $variant }} inline-flex items-center gap-x-2 text-sm font-semibold border border-transparent text-white hover:bg-gray-900 disabled:opacity-50 disabled:pointer-events-none">
	{{ $slot }}
  </{{ $component }}>