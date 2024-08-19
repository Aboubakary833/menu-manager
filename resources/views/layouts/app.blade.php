<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
	<title>{{ config('app.name') }} | {{ $title }}</title>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap");
    </style>
	@vite('resources/css/app.css')
	@livewireStyles
</head>
<body class="bg-info-100/30 dark:bg-dark font-inter text-dark dark:text-info-100">
	
	<div class="flex">
		<x-sidebar>
			<x-sidebar.item href="{{ route('home') }}">
				<x-lucide-home class="w-5 h-5" />
				<span>{{ __('chunks.sidebar.nav.home') }}</span>
			</x-sidebar.item>

			@include('partials.admin-nav')
		</x-sidebar>
		<div class="w-full lg:pl-[260px]">
			<x-navbar.dashboard class="justify-between lg:justify-end">
				<x-sidebar.trigger />
				<x-dropdown>
					<x-dropdown.trigger class="p-0 border-0 hover:bg-transparent dark:hover:bg-transparent">
						<span class="p-[1px] border-2 border-info dark:border-dark-300 rounded-full">
							<img class="inline-block size-[38px] rounded-full" src="{{ asset(user()->avatar) }}" alt="{{ user()->name }}">
						</span>
						<span class="text-[15px] font-medium">{{ Str::limit(user()->name, 20) }}</span>
					</x-dropdown.trigger>
					<x-dropdown.content class="w-[180px]">
						<x-dropdown.item class="justify-start" href="#">
							<x-lucide-user class="w-5 h-5" />
							<span>{{ __('chunks.navbar.app.profile') }}</span>
						</x-dropdown.item>

						<x-form method="POST" action="{{ route('logout') }}">
							<x-dropdown.item class="justify-start" component="button" type="submit">
								<x-lucide-log-out class="w-5 h-5" />
								<span>{{ __('chunks.navbar.app.logout') }}</span>
							</x-dropdown.item>
						</x-form>
						
					</x-dropdown.content>
				</x-dropdown>
			</x-navbar.dashboard>
			<div>
				{{ $slot }}
			</div>
		</div>
	</div>	

    @vite('resources/ts/app.ts')
    @livewireScripts
</body>
</html>
