@props([
    "variant" => "outline",
    "size" => "sm",
	"widthFull" => false,
	"roundedFull" => false,
	"disabled" => false
])
<x-button :variant="$variant" :size="$size" :widthFull="$widthFull" :roundedFull="$roundedFull" :disabled="$disabled" {{ $attributes }}>
    {{ $slot }}
</x-button>
