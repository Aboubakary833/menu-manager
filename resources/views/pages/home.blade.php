@extends('layouts.website')
@section('title', "Accueil")
@section('main')
    <div class="w-full flex flex-col items-center">
        <div class=" w-7/12">
            <h1
                class="text-7xl text-center font-extrabold bg-clip-text text-transparent bg-gradient-to-br from-primary-600 to-warning-500">
                Votre application de recherche et de gestion de restaurant</h1>
        </div>
        <div class="mt-10 flex gap-4">
            <x-button variant="primary" size="lg" component="a" roundedFull>Créer un compte</x-button>
            <x-button variant="info" size="lg" component="a" roundedFull>Nous contacter</x-button>
        </div>
    </div>
@endsection
