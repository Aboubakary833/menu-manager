@props(["showOnHover" => false])

@php
    $actionClass = $showOnHover ? "[--trigger:hover]" : "[--trigger:click]";
@endphp

<div {{ $attributes->twMerge("m-1 hs-dropdown relative inline-flex", $actionClass) }}>
    {{ $slot }}
</div>
