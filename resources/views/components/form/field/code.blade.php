@use(Nette\Utils\Json)
@use(Nette\Utils\Random)

@props([
    "label" => false,
    "name" => sprintf("__%s", Random::generate(8)),
    "length" => 5,
    "inputSize" => "base",
    "isPassword" => false,
    "hasMaskedInput" => true,
    "regex" => null,
    "labelHidden" => true,
])

@php
    $dataObject = (object)["availableCharsRE" => $regex];
@endphp

<div>
    @if ($label)
        <x-form.label :for="$id" :hidden="$labelHidden">
            {{ $label }}
        </x-form.label>
    @endif
    <div class="w-fit flex flex-col items-center mx-auto">
        <div {{ $attributes->twMerge("flex space-x-3") }} data-hs-pin-input-name="{{ $name }}" data-hs-pin-input='{{ Json::encode($dataObject) }}'>
            @if($hasMaskedInput)
                <x-input
                    type="hidden"
                    :name="$name"
                    data-hs-pin-mask-input
                    required
                    autocomplete="off"
                />
            @endif
            @for($i = 0; $i < $length; $i++)
                <x-input.pin
                    :isPassword="$isPassword"
                    name="{{'__' . Str::random(8)}}"
                    :size="$inputSize"
                    :autofocus="(0 === $i)"
                />
            @endfor
        </div>
    </div>
</div>
