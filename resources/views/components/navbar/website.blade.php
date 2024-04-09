@use(App\Enums\Lang;use Illuminate\Support\Str)
<div class="w-full">
    <header
        class="container mx-auto flex flex-wrap sm:justify-start sm:flex-nowrap z-50 w-full bg-white text-sm py-1 dark:bg-dark">
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
                        <x-lucide-menu class="w-7 h-7"/>
                    </button>
                </div>
            </div>
            <div id="navbar"
                 class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow sm:block">
                <div class="flex flex-col gap-5 mt-5 sm:flex-row sm:items-center sm:justify-end sm:mt-0 sm:ps-5">
                    <x-dropdown>
                        <x-dropdown.trigger roundedFull>
                            <x-lucide-globe class="w-7 h-7" stroke-width="1.5"/>
                        </x-dropdown.trigger>
                        <x-dropdown.content class="w-[120px]">
                            @foreach(Lang::toArray() as $key => $value)
                                <x-form method="POST" action="{{ route('settings.set-locale') }}">
                                    <x-input type="hidden" name="__locale" value="{{ Str::lower($key) }}" required readonly />
                                    <x-dropdown.item class="text-sm" component="button" type="submit">
                                        @if(Str::lower($key) === app()->getLocale())
                                            <x-lucide-check class="w-4 h-4" stroke-width="1.5"/>
                                        @endif
                                        {{ $value }}
                                    </x-dropdown.item>
                                </x-form>
                            @endforeach
                        </x-dropdown.content>
                    </x-dropdown>
                    <x-button component="a" href="{{ route('login.index') }}"
                              roundedFull>{{ __("chunks.navbar.website.login") }}</x-button>
                    <x-button component="a" variant="outline" href="{{ route('register.index') }}"
                              roundedFull>{{ __("chunks.navbar.website.register") }}</x-button>
                </div>
            </div>
        </nav>
    </header>
</div>
