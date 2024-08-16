<div {{ $attributes->twMerge("hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-[120px] bg-white shadow-md border rounded-lg p-2 mt-2 dark:text-info-100 dark:bg-dark dark:border-dark-400 dark:divide-info-700 after:h-4 after:absolute after:-bottom-4 after:start-0 after:w-full before:h-4 before:absolute before:-top-4 before:start-0 before:w-full") }} aria-labelledby="hs-dropdown-event">
    {{ $slot }}
</div>
