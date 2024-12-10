<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>

    <body>
        <div
            id="app"
            class="bg-gray-100 text-gray-800 min-h-screen flex flex-col items-center justify-center"
        >
            <h1 class="text-4xl font-bold">Welcome to Laravel</h1>
            <p class="mt-4">This is a Vite-powered Laravel application.</p>
        </div>
    </body>
</html>
