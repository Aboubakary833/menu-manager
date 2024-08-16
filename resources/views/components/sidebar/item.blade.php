@props([
    "href" => "#",
    "hasMenu" => false
])

@php
    $isActive = $href === url()->current();
    $class = twMerge([
        "flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 dark:text-info-100",
        $isActive ? "text-danger dark:text-primary bg-info-100 dark:bg-dark-900" : "",
        "rounded-lg hover:bg-slate-100 dark:hover:bg-dark-900"
    ]);
@endphp

<li {{ $attributes }}>
    @if(!$hasMenu)
        <x-nav.link
            href="{{ $href }}"
            class="{{ $class }}"
        >
            {{$slot}}
        </x-nav.link>
    @else
        {{ $slot }}
    @endif
</li>
