<div class="w-full">
    <header class="flex flex-wrap sm:justify-start sm:flex-nowrap z-50 w-full bg-white text-sm py-1 dark:bg-dark">
        <nav class="max-w-[85rem] w-full mx-auto px-4 sm:flex sm:items-center sm:justify-between" aria-label="Global">
            <div class="flex items-center justify-between">
                <a class="flex-none" href="{{ route("home") }}">
                    <img src="{{ asset('logo.png') }}" alt="menu manager" class=" w-16 h-auto">
                </a>
                <div class="sm:hidden">
                    <button type="button"
                        class="hs-collapse-toggle text-dark dark:text-white"
                        data-hs-collapse="#navbar" aria-controls="navbar"
                        aria-label="Toggle navigation">
                        <x-lucide-menu class="w-7 h-7" />
                    </button>
                </div>
            </div>
            <div id="navbar"
                class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow sm:block">
                <div class="flex flex-col gap-5 mt-5 sm:flex-row sm:items-center sm:justify-end sm:mt-0 sm:ps-5">
                    <a class="font-medium text-black focus:text-dark dark:text-white dark:focus:text-info-500"
                        href="#" aria-current="page">Nous contacter</a>
					<x-button component="a" href="{{ route('login') }}" roundedFull>Se connecter</x-button>
                </div>
            </div>
        </nav>
    </header>
</div>
