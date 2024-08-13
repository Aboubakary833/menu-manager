@extends('app')
@section('content')
	<div class="flex">
		<x-sidebar>
			<x-sidebar.item href="{{ route('home') }}">
				<x-lucide-home class="w-5 h-5" />
				<span>Dashboard</span>
			</x-sidebar.item>
		</x-sidebar>
		<div class="w-full">
			<x-navbar.dashboard class="">
				<x-sidebar.trigger />
			</x-navbar.dashboard>
			<div class="overflow-y-scroll">
				@yield('main')
			</div>
		</div>
	</div>	
@endsection
