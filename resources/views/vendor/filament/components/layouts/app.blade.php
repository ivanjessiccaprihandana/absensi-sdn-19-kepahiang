@props([
    'maxContentWidth' => null,
])

<x-filament::layouts.base :title="$title">
    <div class="filament-app-layout flex h-full w-full overflow-x-clip bg-gradient-to-br from-white to-gray-100 dark:from-gray-900 dark:to-gray-800">
        {{-- Overlay penutup sidebar di mobile --}}
        <div
            x-data="{}"
            x-cloak
            x-show="$store.sidebar.isOpen"
            x-transition.opacity.500ms
            x-on:click="$store.sidebar.close()"
            class="filament-sidebar-close-overlay fixed inset-0 z-20 h-full w-full bg-gray-900/50 lg:hidden"
        ></div>

        {{-- Sidebar --}}
        <x-filament::layouts.app.sidebar />

        {{-- Konten utama --}}
        <div
            @if (config('filament.layout.sidebar.is_collapsible_on_desktop'))
                x-data="{}"
                x-bind:class="{
                    'lg:pl-[var(--collapsed-sidebar-width)] rtl:lg:pr-[var(--collapsed-sidebar-width)]':
                        ! $store.sidebar.isOpen,
                    'filament-main-sidebar-open lg:pl-[var(--sidebar-width)] rtl:lg:pr-[var(--sidebar-width)]':
                        $store.sidebar.isOpen,
                }"
                x-bind:style="'display: flex'"
            @endif
            @class([
                'filament-main w-screen flex-1 flex-col gap-y-6 rtl:lg:pl-0',
                'hidden h-full transition-all' => config('filament.layout.sidebar.is_collapsible_on_desktop'),
                'flex lg:pl-[var(--sidebar-width)] rtl:lg:pr-[var(--sidebar-width)]' => ! config('filament.layout.sidebar.is_collapsible_on_desktop'),
            ])
        >
            {{-- Topbar --}}
            <x-filament::topbar :breadcrumbs="$breadcrumbs" />

            {{-- Konten halaman --}}
            <div
                @class([
                    'filament-main-content mx-auto w-full flex-1 px-4 md:px-6 lg:px-8',
                    match ($maxContentWidth ??= config('filament.layout.max_content_width')) {
                        null, '7xl', '' => 'max-w-7xl',
                        'xl' => 'max-w-xl',
                        '2xl' => 'max-w-2xl',
                        '3xl' => 'max-w-3xl',
                        '4xl' => 'max-w-4xl',
                        '5xl' => 'max-w-5xl',
                        '6xl' => 'max-w-6xl',
                        'full' => 'max-w-full',
                        default => $maxContentWidth,
                    },
                ])
            >
                {{-- Card wrapper untuk konten --}}
                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6">
                    {{ \Filament\Facades\Filament::renderHook('content.start') }}

                    {{ $slot }}

                    {{ \Filament\Facades\Filament::renderHook('content.end') }}
                </div>
            </div>
        </div>
    </div>
</x-filament::layouts.base>
