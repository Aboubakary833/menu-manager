@props([
	"type" => "button",
	"size" => "base",
	"variant" => "primary",
	"rounded" => false,
])
<button type="{{ $type }}" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-gray-800 text-white hover:bg-gray-900 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600 dark:bg-white dark:text-gray-800">
	Button
  </button>