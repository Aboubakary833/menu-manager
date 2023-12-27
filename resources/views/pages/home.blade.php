@extends('layouts.website')
@section('title', "Accueil")
@section('main')
    <div class="max-w-[85rem] w-full flex flex-col items-center">
        <div class="w-11/12 md:w-7/12">
            <h1
                class="text-5xl lg:text-7xl text-center font-extrabold italic bg-clip-text text-transparent bg-gradient-to-br from-primary-600 to-warning-500">
                Consulter les menus de vos restos en quelques cliques</h1>
        </div>
        <div class="w-11/12 md:w-full mt-10 flex flex-col sm:flex-row justify-center gap-y-4 sm:gap-x-4">
            <x-button variant="primary" size="lg" component="a" id="create_account" roundedFull>Créer un compte</x-button>
            <x-button variant="info" size="lg" component="a" roundedFull>Nous contacter</x-button>
        </div>
    </div>
@endsection
