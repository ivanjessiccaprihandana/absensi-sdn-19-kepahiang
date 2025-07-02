<x-filament::pages.actions.action
    :action="$action"
    component="filament::button"
    :outlined="$isOutlined()"
    :icon-position="$getIconPosition()"
    class="
        filament-page-button-action
        inline-flex items-center justify-center gap-2
        px-6 py-2.5 rounded-xl text-sm font-bold tracking-wide uppercase
        transition-all duration-300 ease-in-out transform

        bg-gray-100 text-gray-700
        shadow hover:shadow-md

        disabled:bg-gray-100 disabled:text-gray-400 disabled:cursor-not-allowed

        dark:bg-gray-800 dark:text-gray-300
        dark:disabled:bg-gray-800 dark:disabled:text-gray-500
    "
>
    {{ $getLabel() }}
</x-filament::pages.actions.action>
