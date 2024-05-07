@extends('layouts.auth')
@section('title', "pages.auth.register.complete.title")
@section('main')
    <x-card class="w-[300px] sm:w-[400px] md:w-[450px] shadow-none border-0 border-transparent" withoutPaddings>
        <x-card.title class="text-3xl font-jungleAdventurer text-center mb-8 xs:text-2xl xs:mb-6">{{__("pages.auth.register.complete.card_title")}}</x-card.title>
        <x-card.body>
            <x-form>
                <x-form.field
                    label="{{__('forms.firstname.label')}}"
                    type="text"
                    name="firstname"
                    placeholder="{{__('forms.firstname.placeholder')}}"
                />
                <x-form.field
                    label="{{__('forms.lastname.label')}}"
                    type="text"
                    name="lastname"
                    placeholder="{{__('forms.lastname.placeholder')}}"
                />
                <div class="my-4 sm:my-6">
                    <x-button type="submit" widthFull roundedFull>{{__("pages.auth.register.complete.submit")}}</x-button>
                </div>
            </x-form>
        </x-card.body>
    </x-card>
@endsection
