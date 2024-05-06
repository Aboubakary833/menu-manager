@use(Illuminate\Support\Str)
@php
    $__id = sprintf("__%s", Str::random(8));
@endphp

@props([
    "id" => $__id,
    "dismissible" => true,
])

<div class="mx-auto md:absolute md:bottom-5 md:end-5">
    <div {{ $attributes->twMerge("min-w-[300px] max-w-xs hs-removing:translate-x-5 hs-removing:opacity-0 transition duration-300 max-w-xs bg-white border border-slate-200  dark:border-dark rounded-xl shadow-lg") }} id="{{ $id }}" role="alert">
        <div class="flex items-center p-4">

            {{ $slot }}

            @if($dismissible)
                <div class="ms-auto">
                    <button type="button" id="dismiss-btn" class="inline-flex flex-shrink-0 justify-center items-center size-5 rounded-lg text-dark dark:text-info opacity-50 hover:opacity-100 focus:outline-none focus:opacity-100" data-hs-remove-element="#{{ $__id }}">
                        <span class="sr-only">{{ __("chunks.close") }}</span>
                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 6 6 18"></path>
                            <path d="m6 6 12 12"></path>
                        </svg>
                    </button>
                </div>
            @endif
        </div>
    </div>

</div>
