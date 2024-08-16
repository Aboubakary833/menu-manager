@extends('layouts.auth')
@section('title', __('pages.auth.complete.title'))
@section('description', __('pages.auth.complete.description'))

@section('main')

	<x-card class="shadow-none border-0 border-transparent" withoutPaddings>
		<x-card.header class="my-4" noBorder>
			<x-card.title class="text-3xl font-jungleAdventurer text-center mb-8 xs:text-2xl xs:mb-6">{{__("pages.auth.complete.card_title")}}</x-card.title>
			<x-card.subtitle>{{ __('pages.auth.complete.card_subtitle') }}</x-card>
		</x-card.header>
		<x-card.body>
			<x-form method="POST" action="{{ route('complete.store') }}">
				<div class="mb-2 sm:mb-4">
					<p class="block text-sm font-medium mb-2 sm:mb-4 dark:text-info-100">{{ __('pages.auth.complete.user_type_label') }}</p>
					<div class="grid grid-cols-1 sm:grid-cols-2 gap-y-3 sm:gap-y-0 sm:gap-x-4">
						<x-radio-card value="0" name="type" showOrHide="enterprise" showOrHideAction="hide" tabindex="0" checked="{{ old('type') === '0' }}">
							<div class="flex gap-x-2">
								<div>
									<svg viewBox="0 0 24 24" class="w-10 h-10 stroke-inherit dark:stroke-inherit" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="6" r="4" class="stroke-inherit" stroke-width="1.5"></circle> <path d="M15 20.6151C14.0907 20.8619 13.0736 21 12 21C8.13401 21 5 19.2091 5 17C5 14.7909 8.13401 13 12 13C15.866 13 19 14.7909 19 17C19 17.3453 18.9234 17.6804 18.7795 18" class="stroke-inherit" stroke-width="1.5" stroke-linecap="round"></path> </g></svg>
								</div>
								
								<div>
									<p class="font-bold">{{ __('pages.auth.complete.type_client') }}</p>
								</div>
							</div>
						</x-radio-card>
						<x-radio-card value="1" name="type" showOrHide="enterprise" showOrHideAction="show" tabindex="1" checked="{{ old('type') === '1' }}">
							<div class="flex gap-x-2">
								<div>
									<svg viewBox="0 0 24 24" class="w-10 h-10 stroke-inherit dark:stroke-inherit option_icon" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M22 22L2 22" class="stroke-inherit" stroke-width="1.5" stroke-linecap="round"></path> <path d="M21 22V13M11.0044 5C11.0223 3.76022 11.1143 3.05733 11.5858 2.58579C12.1716 2 13.1144 2 15 2H17C18.8857 2 19.8285 2 20.4143 2.58579C21 3.17157 21 4.11438 21 6V9" class="stroke-inherit" stroke-width="1.5" stroke-linecap="round"></path> <path d="M15 22V16M3 22V13M3 9C3 7.11438 3 6.17157 3.58579 5.58579C4.17157 5 5.11438 5 7 5H11C12.8856 5 13.8284 5 14.4142 5.58579C15 6.17157 15 7.11438 15 9V12" class="stroke-inherit" stroke-width="1.5" stroke-linecap="round"></path> <path d="M9 22V19" class="stroke-inherit" stroke-width="1.5" stroke-linecap="round"></path> <path d="M6 8H12" class="stroke-inherit" stroke-width="1.5" stroke-linecap="round"></path> <path d="M6 11H7M12 11H9.5" class="stroke-inherit" stroke-width="1.5" stroke-linecap="round"></path> <path d="M6 14H12" class="stroke-inherit" stroke-width="1.5" stroke-linecap="round"></path> </g></svg>
								</div>

								<div>
									<p class="font-bold">{{ __('pages.auth.complete.type_enterprise') }}</p>
								</div>

							</div>
						</x-radio-card>
					</div>
				</div>
				<div id="enterprise" style="display: none;">
					<x-form.field
						label="{{__('forms.enterprise.label')}}"
						type="text"
						name="enterprise"
						placeholder="{{__('forms.enterprise.placeholder')}}"
					/>
				</div>
				@if(!user()->password)
					<x-form.field
						label="{{__('forms.password.label')}}"
						type="password"
						name="password"
						placeholder="{{__('forms.password.placeholder')}}"
					/>
				@endif
				<div class="my-4 sm:my-6">
					<x-button type="submit" widthFull roundedFull>{{__("pages.auth.complete.submit")}}</x-button>
				</div>
			</x-form>
		</x-card.body>
	</x-card>

@endsection
