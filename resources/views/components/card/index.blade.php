@props([
	"class" => "",
])
<div {{ $attributes->class([
	"flex flex-col bg-white border shadow-sm rounded-xl p-4 md:p-5 dark:bg-dark dark:border-dark-400 dark:shadow-dark-500/[.2]",
	$class,
]) }}>
	{{ $slot }}
</div>
