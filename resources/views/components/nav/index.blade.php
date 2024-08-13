@props([
    /* direction must be either vertical or horizontal */
    "direction" => "horinzontal",
])

<nav {{ $attributes->twMerge([$direction === "horizontal" ? "flex space-x-2" : "space-y-1.5"]) }}>
    {{ $slot }}
</nav>
