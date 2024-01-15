@php
    $names = codeFieldsNames();
@endphp
@extends('layouts.auth')
@section('title', __("pages.auth.login.validate.title"))
@section('main')

    <x-card class="w-[300px] sm:w-[400px] md:w-[450px] shadow-none border-0 border-transparent" withoutPaddings>
        <x-card.title class="text-3xl font-jungleAdventurer text-center mb-8 xs:text-2xl xs:mb-6">{{__("pages.auth.login.validate.card_title")}}</x-card.title>
        <x-card.subtitle>
            {!!parseMarkdown(__("pages.auth.login.validate.card_description"))!!}
        </x-card.subtitle>
        <x-card.body>
            <x-form method="POST" action="{{ route('login.confirm') }}">
                <x-form.field.code :names="$names" class="my-4 sm:my-6" regex="^[0-9]$" />
                <div class="mt-8 sm:mt-12">
                    <x-button type="submit" widthFull roundedFull>{{__("pages.auth.login.validate.confirm")}}</x-button>
                </div>
            </x-form>
        </x-card.body>
    </x-card>

@endsection
