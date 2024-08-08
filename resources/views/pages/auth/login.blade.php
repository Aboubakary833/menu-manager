@extends('layouts.auth')
@section('title', __("pages.auth.login.title"))
@section('main')
    <x-card class="shadow-none border-0 border-transparent" withoutPaddings>
        <x-card.header class="my-4" noBorder>
			<x-card.title class="text-3xl font-jungleAdventurer text-center mb-8 xs:text-2xl xs:mb-6">{{__("pages.auth.login.card_title")}}</x-card.title>
			<x-card.subtitle>{{ __('pages.auth.login.card_subtitle') }}</x-card>
		</x-card.header>
		<x-card.body>
			<x-form method="POST" action="#">
				<x-form.field
					label="{{__('forms.email.label')}}"
					type="email"
					name="email"
					placeholder="{{__('forms.email.placeholder.targeted')}}"
				/>
				<x-form.field 
					label="{{ __('forms.password.label') }}"
					type="password"
					name="password"
					placeholder="{{ __('forms.password.placeholder') }}"
				/>
				<div class="my-4 sm:my-6">
					<x-button type="submit" widthFull roundedFull>{{__('pages.auth.login.submit')}}</x-button>
				</div>
				<x-separator label="OU" />
				<div class="my-4 md:my-6">
					<x-button variant="outline" href="#" component="a" widthFull>
						<div class="w-[250px] inline-flex justify-center items-center">
							<x-icon.google />
							<span class="ml-2">{{__("pages.auth.shared.continue_with_google")}}</span>
						</div>
					</x-button>
				</div>
			</x-form>
			<div class="inline-flex items-center">
				<p class="mr-2">{{__("pages.auth.login.not_registered_yet")}}</p>
				<x-link href="{{ route('register.view') }}" class="text-primary dark:text-primary">{{__("pages.auth.login.register")}}</x-link>
			</div>
		</x-card.body>
    </x-card>
@endsection
