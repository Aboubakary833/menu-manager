<aside id="application-sidebar" class="hs-overlay [--auto-close:lg]
  hs-overlay-open:translate-x-0
  -translate-x-full transition-all duration-300 transform
  w-[260px]
  hidden
  fixed inset-y-0 start-0 z-[60]
  bg-white border-r border-info-200
  lg:block lg:translate-x-0 lg:end-auto lg:bottom-0
  dark:bg-dark-700 dark:border-dark-500/90
 ">
    <div class="h-[59px] bg-primary-600">
        
    </div>
    <x-nav
        direction="vertical"
        class="hs-accordion-group p-3 w-full flex flex-col flex-wrap space-y-none"
        data-hs-accordion-always-open
    >
        <ul class="mt-1.5 space-y-1.5">
            {{ $slot }}
        </ul>
    </x-nav>
</aside>
