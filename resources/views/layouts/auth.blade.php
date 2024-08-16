@extends("layouts.base")
@section("content")
	<main class="flex justify-center">
		<div class="min-h-screen w-full sm:w-[500px] flex flex-col justify-between">
			@yield("main")

			<div class="py-4">
				<x-separator class="my-4"/>
				<div>
					<ul class="w-full inline-flex justify-around">
						<li class="inline">
							<x-link href="/" class="text-sm text-gray-500 hover:text-gray-700 dark:hover:text-info-600">&copy;{{ config("app.name") . ' - ' . now()->year  }}</x-link>
						</li>
			
						<li class="inline">
							<x-link href="#" class="text-sm text-gray-500 hover:text-gray-700 dark:hover:text-info-600">{{ __('Termes & conditions') }}</x-link>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</main>
@endsection
