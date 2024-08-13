@props(["row" => 3])

<textarea {{ $attributes->twMerge("py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none dark:bg-dark dark:border-dark-400 dark:text-info-100 dark:focus:ring-primary") }} rows="{{ $row }}" {{ $attributes }}></textarea>
