@extends('layouts.auth')
@section('title', __('pages.auth.new_password.title'))
@section('description', __('pages.auth.new_password.description'))
@section('main')
    <x-card class="shadow-none border-0 border-transparent" withoutPaddings>
        <x-card.header class="my-4" noBorder>
			<x-card.title class="text-3xl font-jungleAdventurer text-center mb-8 xs:text-2xl xs:mb-6">{{__("pages.auth.new_password.card_title")}}</x-card.title>
			<x-card.subtitle>{{ __('pages.auth.new_password.card_subtitle') }}</x-card>
		</x-card.header>
		<x-card.body>
			<x-form method="POST" action="{{ route('password.new') }}">
				<x-input type="hidden" value="{{ $token }}" required autocomplete="off" />
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
				<x-form.field 
					label="{{ __('forms.confirm_password.label') }}"
					type="password"
					name="password_confirmation"
					placeholder="{{ __('forms.confirm_password.placeholder') }}"
				/>
				<div class="my-4 sm:my-6">
					<x-button type="submit" widthFull roundedFull>{{__('pages.auth.new_password.submit')}}</x-button>
				</div>
			</x-form>
		</x-card.body>
    </x-card>

	@include('partials.status-toast')
	
@endsection
