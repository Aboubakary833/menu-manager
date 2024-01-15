@props([
    "label" => false,
    "length" => 5,
    "names" => [],
    "inputSize" => "base",
    "isPassword" => false,
    "regex" => null,
    "labelHidden" => true,
])

@php

    $length = $length === 0 ? 2 : $length;
    $regex = $regex ? '{"availableCharsRE": "' . $regex . '"}' : null;
    $pinErrors = $errors->all();
    if ($errors->code)
@endphp

<div>
    @if ($label)
        <x-form.label :for="$id" :hidden="$labelHidden">
            {{ $label }}
        </x-form.label>
    @endif
    <div class="w-fit flex flex-col items-center mx-auto">
        <div {{ $attributes->twMerge("flex space-x-3") }} data-hs-pin-input='{{ $regex }}'>
            @for($i = 0; $i < $length; $i++)
                <x-input.pin :isPassword="$isPassword" name="{{$names[$i] ?? Str::random(8)}}" :size="$inputSize" :autofocus="0 === $i"></x-input.pin>
            @endfor
        </div>
        @foreach($errors->all() as $message)
            <p class="w-full text-sm text-danger">
                {{ $message }}
            </p>
        @endforeach
    </div>
</div>
