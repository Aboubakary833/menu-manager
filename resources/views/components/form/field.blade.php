@props([
	"label" => null,
	"type" => "text",
	"id" => Str::random(8),
	"name" => Str::random(8),
	"placeholder" => "",
	"labelHidden" => false,
])

<div>
	@if ($label)
		<x-form.label :for="$id" :hidden="$labelHidden">
			{{ $label }}
		</x-form.label>
	@endif
	<x-input :type="$type" :id="$id" :placeholder="$placeholder" />
</div>
