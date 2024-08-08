@props([
	'type' => 'button',
	'size' => 'base',
	'variant' => 'primary',
	'href' => '#',
	'widthFull' => false,
	'roundedFull' => false,
	'component' => 'button',
	'disabled' => false
])

@php
	$variants = [
		'primary' => 'bg-primary border border-primary',
		'secondary' => 'bg-secondary border border-secondary',
		'success' => 'bg-success border border-success',
		'warning' => 'bg-warning border border-warning',
		'danger' => 'bg-danger border border-danger',
		'info' => 'bg-info border border-info',
		'outline' => 'bg-transparent border border-gray-200 dark:border-dark-400',
];

	$sizes = [
		'sm' => 'p-2 text-xs',
		'base' => 'px-4 py-3 text-sm',
		'lg' => 'px-5 py-4 text-base'
];

	$textColor = match ($variant) {
		'warning', 'info', 'primary' => 'text-dark',
		'outline' => 'text-dark dark:text-info-100',
		 default => 'text-white'
	};
    $classNames = twMerge([
		$widthFull ? 'w-full' : '',
		$sizes[$size],
		'sm' === $size ? 'font-regular' : 'font-semibold',
		'gap-2',
		$variants[$variant],
		$textColor,
		'outline' === $variant ? 'hover:bg-gray-100/25 dark:hover:bg-dark-500' : '',
		'inline-flex justify-center items-center gap-x-2 transition-colors hover:brightness-[.93] cursor-pointer disabled:opacity-75 disabled:pointer-events-none',
		$roundedFull ? 'rounded-full' : 'rounded-lg',
	]);
@endphp

<{{ $component }}
	type='{{ $type }}'
	href='{{ $href }}'
	{{ $attributes->twMerge($classNames) }}
	@disabled($disabled)>
	{{ $slot }}
</{{ $component }}>
