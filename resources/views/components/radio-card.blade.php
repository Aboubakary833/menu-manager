@props([
	'name' => '',
	'showOrHide' => null,
	'showOrHideAction' => null,
	'checked' => false,
	'tabindex' => 0
])

<div 
	{{ $attributes->twMerge('radio-card flex flex-col cursor-pointer border-2 rounded-lg text-dark dark:text-info stroke-dark-400 dark:stroke-info border-info-600 dark:border-dark-400') }}
	data-radio-card
	data-show-or-hide="{{ $showOrHide ? "#$showOrHide" : '' }}"
	data-show-or-hide-action="{{ $showOrHideAction }}"
	tabindex="{{ $tabindex }}"
	>
	<div class="p-2 sm:p-4 border-inherit">
		<div class="flex border-inherit">
			<div class="p-1 border-inherit">
				<div class="w-5 h-5 border-[3px] rounded-full border-inherit dark:border-inherit"></div>
			</div>
			<div>
				{{ $slot }}
			</div>
		</div>
	</div>
<input type="radio" style="display: none;" id="{{ $name }}" name="{{ $name }}" @checked($checked) />
</div>
