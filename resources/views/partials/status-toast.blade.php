@session('error')
    <x-toast>
        <div class="flex">
            <div class="flex-shrink-0">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="fill-danger stroke-white"><circle cx="12" cy="12" r="10"/><path d="m15 9-6 6"/><path d="m9 9 6 6"/></svg>
            </div>
            <div class="ms-3">
                <p class="mt-0.5 text-sm font-medium text-gray-800 dark:text-info-100">
                    {{ __($value) }}
                </p>
            </div>
        </div>
    </x-toast>
@endsession

@session('success')
    <x-toast>
        <div class="flex">
            <div class="flex-shrink-0">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="fill-success stroke-white"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>
            </div>
            <div class="ms-3">
                <p class="mt-0.5 text-sm font-medium text-gray-800 dark:text-info-100">
                    {{ __($value) }}
                </p>
            </div>
        </div>
    </x-toast>
@endsession
