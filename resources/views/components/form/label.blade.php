@props([
	"for" => "",
	"hidden" => false,
])

<label for="{{ $for }}" {{ $attributes->twMerge(["block text-sm font-medium mb-2 dark:text-info-100", $hidden ?? "sr-only"]) }}>
	{{ $slot }}
</label>
