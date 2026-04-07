<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased font-sans">
        <header class="w-full flex justify-between items-center py-4 px-8 fixed top-0 left-0 bg-stone-400">
                        <div class="flex lg:justify-center lg:col-start-2">
                            <h1>Logo<h1>
                          </div>
                        <div>
                        @if (Route::has('login'))
                            <livewire:welcome.navigation />
                        @endif
                        </div>
                    </header>
    </body>
</html>
