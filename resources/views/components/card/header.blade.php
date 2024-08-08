@props(['noBorder' => true])

<div
    {{ $attributes->twMerge(
        !$noBorder ? 'border-b rounded-t-xl' : '',
        'py-3 px-4 md:py-4 md:px-5',
    ) }}>
    {{ $slot }}
</div>
