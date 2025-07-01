<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        @include('partials.head')
    </head>
    <body class="min-h-screen bg-white dark:bg-zinc-800">
        <flux:main class="max-w-3xl mx-auto px-4 py-6">
            {{ $slot }}

            @fluxScripts
        </flux:main>
    </body>
</html>
