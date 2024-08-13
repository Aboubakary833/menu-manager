@props([
    "modalId"
])
<div {{ $attributes->twMerge("flex justify-between items-center py-3 px-4 border-b dark:border-dark-400") }}>
    {{ $slot }}
    <button type="button" class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-info-100 dark:hover:bg-dark-400" data-hs-overlay="#{{ $modalId }}">
        <span class="sr-only">Close</span>
        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M18 6 6 18"></path>
            <path d="m6 6 12 12"></path>
        </svg>
    </button>
</div>
