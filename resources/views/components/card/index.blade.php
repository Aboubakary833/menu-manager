@props([
	"withoutPaddings" => false,
])
<div {{ $attributes->twMerge([
	"flex flex-col bg-white border shadow-sm rounded-xl",
	!$withoutPaddings ?? "p-4 md:p-5",
	"dark:text-info-100 dark:bg-dark dark:border-dark-400 dark:shadow-dark-500/[.2]",
]) }}>
	{{ $slot }}
</div>
