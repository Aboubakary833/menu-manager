@use(App\Enums\Lang)
@use(Illuminate\Support\Str)

<x-dropdown {{ $attributes }}>
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
