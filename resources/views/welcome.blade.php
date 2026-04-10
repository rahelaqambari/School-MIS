<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        @vite('resources/js/slider.js');
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased font-sans">
        <div class="w-full bg-stone-100 relative min-h-screen">
        <header class="w-full flex justify-between items-center py-4 px-8 fixed top-0 left-0 bg-transparent border border-b-2xl border-black backdrop-blur-2xl border-t-0 border-l-0 border-r-0">
                        <div class="flex lg:justify-center lg:col-start-2">
                            <h1>Logo<h1>
                          </div>
                        <div>
                        @if (Route::has('login'))
                            <livewire:welcome.navigation />
                        @endif
                        </div>
                    </header>
                    <div class="pt-24">
                        <livewire:hero/>
                        <livewire:feature/>
                        <livewire:our-team/>
                    <div/>
                </div>        
    </body>
</html>
