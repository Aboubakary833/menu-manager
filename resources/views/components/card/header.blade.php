@props([
    "class" => "",
])

<div {{ 
    $attributes->class([
        "bg-info-100 border-b rounded-t-xl py-3 px-4 md:py-4 md:px-5 dark:bg-dark-600 dark:border-dark-400",
        $class,
    ])
}}>
   {{ $slot }}
</div>
