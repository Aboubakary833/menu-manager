@props([
    'size' => "base",
    'isPassword' => false,
    'placeholder' => '⚬',
    'disabled' => false,
])

@php

    $type = $isPassword ? "password" : "text";

    $sizes = [
        'sm' => "w-[38px] h-[38px] text-sm",
        'base' => "w-[46px] h-[46px] text-base",
        'large' => "w-[54px] h-[54px] text-base",
    ];

    $classNames = twMerge([
        $sizes[$size],
        "block text-center border-2 border-gray-200 rounded-md [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none focus:border-primary focus:ring-[2] focus:ring-primary disabled:opacity-50 disabled:pointer-events-none outline-transparent dark:bg-dark dark:border-dark-400 dark:text-info-100 outline-0 outline-transparent transition-colors cursor-dark dark:cursor-info-100"
    ])

@endphp

<input type="{{ $type }}" {{  $attributes->twMerge($classNames) }} placeholder="{{ $placeholder }}" @disabled($disabled) data-hs-pin-input-item>
