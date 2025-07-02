@props([
    'actions' => null,
    'footer' => null,
    'header' => null,
    'heading' => null,
    'hoverEffect' => true,
    'borderStyle' => 'soft', // options: 'soft', 'sharp', 'none'
    'elevation' => 'medium', // options: 'low', 'medium', 'high'
])

@php
    $borderClasses = [
        'soft' => 'border border-gray-200 dark:border-gray-700',
        'sharp' => 'border-2 border-gray-300 dark:border-gray-600',
        'none' => 'border-0',
    ][$borderStyle];
    
    $elevationClasses = [
        'low' => 'shadow-sm',
        'medium' => 'shadow-md',
        'high' => 'shadow-lg',
    ][$elevation];
    
    $hoverClass = $hoverEffect ? 'transition-all duration-300 hover:shadow-xl hover:-translate-y-1' : '';
@endphp

<div
    {{
        $attributes->merge([
            'class' => implode(' ', [
                'space-y-4 rounded-xl bg-white p-4',
                $borderClasses,
                $elevationClasses,
                $hoverClass,
                'dark:bg-gray-800' => config('filament.dark_mode'),
            ]),
        ])
    }}
>
    @if ($actions || $header || $heading)
        <div class="px-2 py-1">
            @if ($header)
                {{ $header }}
            @elseif ($actions || $heading)
                <div class="flex flex-col gap-4 xl:flex-row xl:items-center xl:justify-between">
                    <x-filament::card.heading class="text-xl font-semibold text-gray-800 dark:text-gray-200">
                        {{ $heading }}
                    </x-filament::card.heading>

                    @if ($actions)
                        <div class="flex flex-wrap items-center gap-2 rtl:space-x-reverse">
                            {{ $actions }}
                        </div>
                    @endif
                </div>
            @endif
        </div>
    @endif

    @if (($actions || $header || $heading) && $slot->isNotEmpty())
        <x-filament::hr class="opacity-50" />
    @endif

    <div class="space-y-4">
        @if ($slot->isNotEmpty())
            <div class="space-y-4 px-2 py-1 text-gray-600 dark:text-gray-300">
                {{ $slot }}
            </div>
        @endif
    </div>

    @if ($footer && $slot->isNotEmpty())
        <x-filament::hr class="opacity-50" />
    @endif

    @if ($footer)
        <div class="px-2 py-1 text-sm text-gray-500 dark:text-gray-400">
            {{ $footer }}
        </div>
    @endif
</div>