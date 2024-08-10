@extends('layouts.auth')
@section('title', __('pages.auth.forgot_password.title'))
@section('description', __('pages.auth.forgot_password.description'))

@section('main')

	<x-card class="shadow-none border-0 border-transparent" withoutPaddings>
		<x-card.header class="my-4" noBorder>
			<x-card.title class="text-3xl font-jungleAdventurer text-center mb-8 xs:text-2xl xs:mb-6">{{__("pages.auth.forgot_password.card_title")}}</x-card.title>
			<x-card.subtitle>{{ __('pages.auth.forgot_password.card_subtitle') }}</x-card>
		</x-card.header>
		<x-card.body>
			<x-form>
				<x-form.field
					label="{{__('forms.email.label')}}"
					type="email"
					name="email"
					placeholder="{{__('forms.email.placeholder.targeted')}}"
					labelHidden
				/>
				<div class="my-4 sm:my-6">
					<x-button type="submit" widthFull roundedFull>{{__("pages.auth.forgot_password.submit")}}</x-button>
				</div>
			</x-form>
			<div class="inline-flex items-center">
				<p class="mr-2">{{__("pages.auth.forgot_password.remember_password")}}</p>
				<x-link href="{{ route('login.view') }}" class="text-primary dark:text-primary">{{__("pages.auth.forgot_password.login")}}</x-link>
			</div>
		</x-card.body>
	</x-card>

@endsection
