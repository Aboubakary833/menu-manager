@props([
    "href" => "#",
    "activeClass" => null
])

@php
    $isActive = $href === url()->current();
@endphp

<x-link
    :href="$href"
    {{ $attributes->twMerge([
    'w-full md:p-2 lg:p-2.5 inline-flex items-center cursor-pointer font-regular hover:bg-gray-100/90 dark:hover:bg-dark-900 rounded-lg transition-colors',
     $isActive ? 'text-primary' : ''
    ]) }}>
    {{ $slot }}
</x-link>
