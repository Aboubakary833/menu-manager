@extends("layouts.base")
@section("content")
<div class="h-screen">
	<x-navbar.website />
	<main class="max-h-[38rem] h-[calc(100vh-72px)] flex justify-center items-center">
		@yield("main")
	</main>
</div>
@endsection
