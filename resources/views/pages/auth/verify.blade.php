@extends('layouts.auth')
@section('title', "pages.auth.verify.title")
@section('main')

    <div class="w-[300px] sm:w-[400px] md:w-[450px]">
        <x-card class="shadow-none border-none">
            <x-card.header class="block border-none">
                <div class="flex justify-center">
                    <svg height="150px" width="150px" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                         xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 504.4 504.4" xml:space="preserve"
                         fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path
                                style="fill:#febc59;"
                                d="M294.625,4.4c-9.3,0-17.9,3.4-24.7,10.2l-256,256c-6.8,6.8-10.2,16.2-10.2,24.7h0.8 c0,11.1,8.6,23,8.6,22.2l172.3,172.4c6,6.8,15.4,10.2,23.9,10.2V500c9-0.2,17.3-3.6,23.9-10.2l256-256c6.8-6.8,10.2-16.2,10.2-24.7 s-3.4-17.1-10.2-23.9l-171.5-171.5c0,0-14.5-8.5-23-8.5">

                            </path>
                            <path
                                  d="M124.025,504.4H4.525c-2.6,0-4.3-1.7-4.3-4.3s1.7-4.3,4.3-4.3h119.5c2.6,0,4.3,1.7,4.3,4.3 S126.525,504.4,124.025,504.4z M209.325,504.4c-10.2,0-19.6-3.4-27.3-11.1l-160.4-160.5c-1.7-1.7-1.7-4.3,0-6s4.3-1.7,6,0 l160.4,160.4c11.9,11.9,30.7,11.9,42.7,0l256-256c11.9-11.9,11.9-30.7,0-42.7l-160.5-160.3c-1.7-1.7-1.7-4.3,0-6s4.3-1.7,6,0 l160.4,160.4c15.4,15.4,15.4,39.3,0,54.6l-256,256C228.925,500.9,219.625,504.4,209.325,504.4z M209.325,453.2 c-2.6,0-4.3-1.7-4.3-4.3V329.4c0-2.6,1.7-4.3,4.3-4.3s4.3,1.7,4.3,4.3v119.5C213.625,451.5,211.925,453.2,209.325,453.2z M72.825,453.2h-68.3c-2.6,0-4.3-1.7-4.3-4.3c0-2.6,1.7-4.3,4.3-4.3h68.3c2.6,0,4.3,1.7,4.3,4.3 C77.125,451.5,75.325,453.2,72.825,453.2z M38.725,402h-34.2c-2.6,0-4.3-1.7-4.3-4.3c0-2.6,1.7-4.3,4.3-4.3h34.1 c2.6,0,4.3,1.7,4.3,4.3C42.925,400.3,41.225,402,38.725,402z M260.525,299.6h-256c-2.6,0-4.3-1.7-4.3-4.3c0,0,0,0,0-0.9 c0-10.2,4.3-19.6,11.1-27.3l256-256c7.7-7.7,17.1-11.1,27.3-11.1l0,0c2.6,0,4.3,1.7,4.3,4.3v256 C298.925,282.5,281.925,299.6,260.525,299.6z M8.825,291h251.7c16.2,0,29.9-13.7,29.9-29.9V9.4c-6.8,0.9-12.8,4.3-17.1,8.5l-256,256 C13.125,278.2,9.625,284.2,8.825,291z M448.325,214.2h-119.5c-2.6,0-4.3-1.7-4.3-4.3s1.7-4.3,4.3-4.3h119.5c2.6,0,4.3,1.7,4.3,4.3 S450.825,214.2,448.325,214.2z" class="fill-dark-900 dark:fill-white"></path>
                        </g>
                    </svg>
                </div>
                <x-card.title
                    class="font-medium text-center text-xl"
                    style="margin-top: 1.5rem;"
                >
                    {{ __("pages.auth.verify.heading") }}
                </x-card.title>
            </x-card.header>
            <x-card.body class="text-slate-600 dark:text-info-100 text-[15px]">
                <p>
                    {{ __("pages.auth.verify.description", ["email" => user()->email]) }}
                </p>
                <div class="my-4">
                    <p class="mt-2">
                        {{ __("pages.auth.verify.notReceiveYet") }}
                    </p>
                </div>
                <div>
                    <x-form
                        method="POST"
                        action="{{ route('verification.resend') }}"
                        class="text-center"
                    >
                        <x-button type="submit" widthFull roundedFull>{{ __("pages.auth.verify.resend") }}</x-button>
                    </x-form>
                </div>
            </x-card.body>
        </x-card>
    </div>

	@include('partials.status-toast')

@endsection
