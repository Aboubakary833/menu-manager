@extends("app")
@section("content")
<div class="h-screen">
	<x-navbar.website />
	<main class="h-[calc(100vh-72px)] flex justify-center items-center">
		@yield("main")
	</main>
</div>
@endsection
