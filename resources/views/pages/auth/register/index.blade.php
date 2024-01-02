@extends('layouts.auth')
@section('title', 'Connexion')
@section('main')
    <x-card class="w-[300px] sm:w-[400px] md:w-[450px] shadow-none border-0 border-transparent" withoutPaddings>
        <x-card.title class="text-3xl font-jungleAdventurer text-center mb-8 xs:text-2xl xs:mb-6">Créer un compte</x-card.title>
		<x-card.body>
			<x-form>
				<x-form.field
					label="Adresse email"
					type="email"
					name="__user_email"
					placeholder="Votre addresse email"
					labelHidden
				/>
				<div class="my-4 sm:my-6">
					<x-button type="submit" widthFull roundedFull>Poursuivre l'inscription</x-button>
				</div>
				<x-separator label="OU" />
				<div class="my-4 md:my-6">
					<div class="mb-4 md:mb-6">
						<x-button variant="outline" href="#" component="a" widthFull>
							<div class="w-[210px] inline-flex items-center">
								<x-icon.google />
								<span class="ml-2">S'inscrire via Google</span>
							</div>
						</x-button>
					</div>
					<div>
						<x-button variant="outline" href="#" component="a" widthFull>
							<div class="w-[210px] inline-flex items-center">
								<x-icon.facebook />
								<span class="ml-2">S'inscrire via Facebook</span>
							</div>
						</x-button>
					</div>
				</div>
			</x-form>
			<div class="inline-flex items-center">
				<p class="mr-2">Vous avez déjà un compte?</p>
				<x-link href="{{ route('login.index') }}" class="text-primary dark:text-primary">Se connecter</x-link>
			</div>
		</x-card.body>
    </x-card>
@endsection