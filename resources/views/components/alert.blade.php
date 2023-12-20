@props([
	"variant" => "primary",
	"bordered" => false,
	"title" => null,
	"message",
	"close" => false
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

<div class="{{ $variants[$variant] }} text-sm text-white rounded-lg p-4 dark:bg-white dark:text-gray-800" role="alert">
	@if ($title)
		<span class="font-bold">{{ $title }}</span>
	@endif
	{{ $message }}
</div>
