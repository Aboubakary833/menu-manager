@extends('layouts.base')
@section('content')
	<div class="flex">
		<x-sidebar>
			<x-sidebar.item href="{{ route('home') }}">
				<x-lucide-home class="w-5 h-5" />
				<span>Dashboard</span>
			</x-sidebar.item>
		</x-sidebar>
		<div class="w-full">
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
			<div class="overflow-y-scroll">
				@yield('main')
			</div>
		</div>
	</div>	
@endsection
