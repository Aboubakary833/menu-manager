@extends('layouts.auth')
@section('title', __('pages.auth.register.title'))
@section('description', __('pages.auth.register.description'))
@section('main')
    <x-card class="shadow-none border-0 border-transparent" withoutPaddings>
        <x-card.header class="my-4" noBorder>
            <x-card.title class="text-3xl font-jungleAdventurer text-center mb-8 xs:text-2xl xs:mb-6">{{__("pages.auth.register.card_title")}}</x-card.title>
            <x-card.subtitle>{{ __('pages.auth.register.card_subtitle') }}</x-card>
        </x-card.header>
		<x-card.body>
			<x-form method="POST" action="{{ route('register.store') }}">
                <x-form.field
                    label="{{__('forms.name.label')}}"
                    type="text"
                    name="name"
                    placeholder="{{__('forms.name.placeholder')}}"
                    labelHidden
                />
                <x-form.field
                    label="{{__('forms.email.label')}}"
                    type="email"
                    name="email"
                    placeholder="{{__('forms.email.placeholder.targeted')}}"
                    labelHidden
                />
                <x-form.field
                    label="{{__('forms.password.label')}}"
                    type="password"
                    name="password"
                    placeholder="{{__('forms.password.placeholder')}}"
                    labelHidden
                />
				<div class="my-4 sm:my-6">
					<x-button type="submit" widthFull roundedFull>{{__("pages.auth.register.submit")}}</x-button>
				</div>
                <x-separator label="OU" />
				<div class="my-4 md:my-6">
					<x-button variant="outline" href="{{ route('oauth.redirect', ['type' => 'signup']) }}" component="a" widthFull>
						<div class="w-[250px] inline-flex justify-center items-center">
							<x-icon.google />
							<span class="ml-2">{{__("pages.auth.shared.signup_with_google")}}</span>
						</div>
					</x-button>
				</div>
			</x-form>
            <div class="inline-flex items-center">
                <p class="mr-2">{{__("pages.auth.register.already_registered")}}</p>
                <x-link href="{{ route('login.view') }}" class="text-primary dark:text-primary">{{__("pages.auth.register.login")}}</x-link>
            </div>
		</x-card.body>
    </x-card>

    @include('partials.status-toast')

@endsection
