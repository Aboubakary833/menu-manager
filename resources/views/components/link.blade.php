@props([
    'href' => '#',
    'ariaCurrent' => 'page',
])

<a {{ $attributes->twMerge('font-medium text-black focus:text-dark dark:text-info-100 dark:focus:text-info-500') }}
    href="{{ $href }}" aria-current="{{ $ariaCurrent }}">{{ $slot }}</a>
