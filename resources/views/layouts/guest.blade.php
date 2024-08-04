<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @vite('resources/css/app.css')
        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class=" min-h-screen flex flex-col  pt-6 sm:pt-0">
            @if(!request()->is('login') && !request()->is('register'))
                @if(Auth::check())
                    @include('layouts.navbar.authenticated_navbar')
                @else
                    @include('layouts.navbar.guest_navbar')
                @endif
           
             @endif
            <main>
                {{ $slot }}
            </main>
            @if(!request()->is('login') && !request()->is('register'))
            <footer class="mt-[45px] w-full">
                 @include('layouts.footer')
            </footer>
           @endif
        </div>
        
    </body>
</html>