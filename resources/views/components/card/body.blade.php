@props([
	"class" => "",
])

<div {{ 
	$attributes->class([
		"p-4 md:p-5",
		$class,
	])
}}>
	{{ $slot }}
</div>
