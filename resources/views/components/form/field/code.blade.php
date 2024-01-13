@props([
    "label" => false,
    "length" => 5,
    "names" => [],
    "inputSize" => "base",
    "isPassword" => false,
    "regex" => null,
    "labelHidden" => true,
    "errorName" => "error"
])

@php

    $length = $length === 0 ? 2 : $length;
    $regex = $regex ? '{"availableCharsRE": "' . $regex . '"}' : null;

@endphp

<div>
    @if ($label)
        <x-form.label :for="$id" :hidden="$labelHidden">
            {{ $label }}
        </x-form.label>
    @endif
    <div {{ $attributes->twMerge("flex space-x-3 justify-center") }} data-hs-pin-input='{{ $regex }}'>
        @for($i = 0; $i < $length; $i++)
            <x-input.pin :isPassword="$isPassword" name="{{$names[$i] ?? Str::random(8)}}" :size="$inputSize" :autofocus="0 === $i"></x-input.pin>
        @endfor
    </div>
    @error($errorName)
        <p class="font-medium text-danger">{{ $message }}</p>
    @enderror
</div>
