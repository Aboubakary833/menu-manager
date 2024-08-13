@use(Nette\Utils\Random)
@props([
    "id" => sprintf("_%s", Random::generate(8)),
    "name" => sprintf("_%s", Random::generate(8)),
])

<input type="checkbox" id="{{ $id }}" name="{{ $name }}" {{ $attributes->twMerge("relative w-[3.25rem] h-7 p-px bg-gray-100 border-transparent text-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:ring-primary-600 disabled:opacity-50 disabled:pointer-events-none checked:bg-none checked:text-primary-600 checked:border-primary-600 focus:checked:border-primary-600 dark:bg-dark-800 dark:border-dark-700 dark:checked:bg-primary-500 dark:checked:border-primary-500 dark:focus:ring-offset-gray-600 before:inline-block before:size-6 before:bg-white checked:before:bg-primary-200 before:translate-x-0 checked:before:translate-x-full before:rounded-full before:shadow before:transform before:ring-0 before:transition before:ease-in-out before:duration-200 dark:before:bg-dark-400 dark:checked:before:bg-primary-200") }}>
