@props([
    "type" => "button",
    "component" => "a",
    "size" => "sm",
    "widthFull" => true,
	"roundedFull" => false,
	"disabled" => false,
	"class" => "",
	"href" => "#"
])

@php
$classes = twMerge(["text-sm font-medium border-0", $class])
@endphp

<x-button :type="$type" variant="outline" :size="$size" :widthFull="$widthFull" :roundedFull="$roundedFull" :disabled="$disabled" :class="$classes" :component="$component" :href="$href">
    {{ $slot }}
</x-button>
