@props([
    'type' => 'text',
    'name' => '',
    'placeholder' => '',
    'required' => false,
    'disabled' => false,
    'accept' => '',
])

<input type="{{ $type }}" name="{{ $name }}"
    {{ $attributes->twMerge(
        'py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none dark:bg-dark dark:border-dark-400 dark:text-info-100',
    ) }}
    placeholder="{{ $placeholder }}" @if ($accept) {{ $attributes->accept($accept) }} @endif
    @required($required) @disabled($disabled)>
