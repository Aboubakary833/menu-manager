<div class="w-full">
    <header
        class="container mx-auto flex flex-wrap sm:justify-start sm:flex-nowrap z-50 w-full bg-white text-sm py-1 dark:bg-dark">
        <nav class="max-w-[85rem] w-full mx-auto px-4 sm:flex sm:items-center sm:justify-between" aria-label="Global">
            <div class="flex items-center justify-between">
                <a class="flex-none" href="{{ route("home") }}">
                    <img src="{{ asset('logo.png') }}" alt="menu manager" class=" w-16 h-auto">
                </a>
                <div class="flex items-center sm:hidden">
                    <x-chunks.select.locale class="inline-flex sm:hidden mr-2" />
                    @guest
                        <x-button
                            component="button"
                            variant="outline"
                            size="sm"
                            class="hs-collapse-toggle text-dark dark:text-white border-none text-auto"
                            data-hs-collapse="#navbar"
                            aria-controls="navbar"
                            aria-label="Toggle navigation">
                            <x-lucide-menu class="w-7 h-7" stroke-width="1.5" />
                        </x-button>
                    @endguest
                </div>
            </div>
            @guest
                <div id="navbar"
                     class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow sm:block">
                    <div class="flex flex-col gap-5 mt-5 sm:flex-row sm:items-center sm:justify-end sm:mt-0 sm:ps-5">
                        <x-chunks.select.locale class="hidden sm:inline-flex" />
                        <x-button component="a" href="{{ route('login.index') }}"
                                  roundedFull>{{ __("chunks.navbar.website.login") }}</x-button>
                        <x-button component="a" variant="outline" href="{{ route('register.index') }}"
                                  roundedFull>{{ __("chunks.navbar.website.register") }}</x-button>
                    </div>
                </div>
            @endguest
        </nav>
    </header>
</div>
