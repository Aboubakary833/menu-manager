@extends('layouts.auth')
@section('title', __("pages.auth.login.index.title"))
@section('main')
    <x-card class="w-[300px] sm:w-[400px] md:w-[450px] shadow-none border-0 border-transparent" withoutPaddings>
        <x-card.title class="text-3xl font-jungleAdventurer text-center mb-8 xs:text-2xl xs:mb-6">{{__("pages.auth.login.index.welcome")}}</x-card.title>
		<x-card.body>
			<x-form method="POST" action="{{ route('login.attempt') }}">
				<x-form.field
					label="{{__('forms.email.label')}}"
					type="email"
					name="email"
					placeholder="{{__('forms.email.placeholder.targeted')}}"
					labelHidden
				/>
				<div class="my-4 sm:my-6">
					<x-button type="submit" widthFull roundedFull>{{__("pages.auth.shared.continue_with_email")}}</x-button>
				</div>
				<x-separator label="OU" />
				<div class="my-4 md:my-6">
					<div class="mb-4 md:mb-6">
						<x-button variant="outline" href="{{ route('auth.provider.redirect', ['provider' => 'google']) }}" component="a" widthFull>
							<div class="w-[250px] inline-flex items-center">
								<x-icon.google />
								<span class="ml-2">{{__("pages.auth.shared.continue_with_google")}}</span>
							</div>
						</x-button>
					</div>
					<div>
						<x-button variant="outline" href="{{ route('auth.provider.redirect', ['provider' => 'facebook']) }}" component="a" widthFull>
							<div class="w-[250px] inline-flex items-center">
								<x-icon.facebook />
								<span class="ml-2">{{__("pages.auth.shared.continue_with_facebook")}}</span>
							</div>
						</x-button>
					</div>
				</div>
			</x-form>
			<div class="inline-flex items-center">
				<p class="mr-2">{{__("pages.auth.login.index.not_registered_yet")}}</p>
				<x-link href="{{ route('register.index') }}" class="text-primary dark:text-primary">{{__("pages.auth.login.index.register")}}</x-link>
			</div>
		</x-card.body>
    </x-card>
@endsection
