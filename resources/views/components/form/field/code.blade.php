@props([
    "label" => false,
    "length" => 5,
    "inputSize" => "base",
    "isPassword" => false,
    "regex" => null,
    "labelHidden" => true,
])

<div>
    @if ($label)
        <x-form.label :for="$id" :hidden="$labelHidden">
            {{ $label }}
        </x-form.label>
    @endif
    <div class="w-fit flex flex-col items-center mx-auto">
        <div {{ $attributes->twMerge("flex space-x-3") }} data-hs-pin-input='{{ $regex }}'>
            @for($i = 0; $i < $length; $i++)
                <x-input.pin :isPassword="$isPassword" name="{{'__' . Str::random(8)}}" :size="$inputSize" :autofocus="0 === $i" />
            @endfor
        </div>
    </div>
</div>
