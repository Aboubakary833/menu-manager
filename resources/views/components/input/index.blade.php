@props([
    'type' => 'text',
    'name' => '',
    'size' => 'base',
    'placeholder' => '',
    'roundedFull' => false,
])


@php

    $sizes = [
        'sm' => "py-2 px-3 text-sm",
        'base' => "py-3 px-4 text-sm",
        'large' => "p-4 sm:p-4.5 text-base",
    ];

    $borderRadius = $roundedFull ? "rounded-full" : "rounded-lg";

    $classNames = twMerge([
        $sizes[$size],
        'block w-full border-2 border-gray-200 focus:border-primary focus:ring-[2] focus:ring-primary disabled:opacity-50 disabled:pointer-events-none dark:bg-dark autofill:bg-transparent dark:border-dark-400 dark:text-info-100 outline-none transition-colors cursor-dark dark:cursor-info-100',
        $borderRadius,
    ]);
@endphp

<input
    type="{{ $type }}"
    name="{{ $name }}"
    {{ $attributes->twMerge($classNames) }}
    placeholder="{{ $placeholder }}"
/>
