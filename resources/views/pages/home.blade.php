@extends('layouts.website')
@section('title', "Accueil")
@section('main')
    <div class="max-w-[85rem] w-full flex flex-col items-center">
        <div class="w-11/12 md:w-7/12">
            <h1
                class="text-5xl lg:text-7xl text-center font-jungleAdventurer bg-clip-text text-transparent bg-gradient-to-br from-primary-600 to-warning-500">
                Consulter les menus de vos restos favoris en quelques cliques</h1>
        </div>
        <div class="w-11/12 md:w-full mt-10 flex flex-col sm:flex-row justify-center gap-y-4 sm:gap-x-4">
            <x-button variant="primary" size="lg" component="a" id="create_account" roundedFull>Consulter les restos</x-button>
            <x-button variant="info" size="lg" component="a" href="{{ route('register.index') }}" roundedFull>Créer un compte</x-button>
        </div>
    </div>
@endsection
