<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
    <div class="min-h-screen bg-white">
       

        <!-- Page Heading -->

        @if(!request()->is('login') && !request()->is('register'))
            @if(Auth::check())
                @include('layouts.navbar.authenticated_navbar')
            @else
                @include('layouts.navbar.guest_navbar')
            @endif
        @endif
    

        <div class="flex">
            @if (Auth::user()->role === 'seller')
                <!-- Afficher la barre latérale pour les vendeurs -->
                <aside class="w-[15%] lg:w-[18%] bg-white text-gray-700 flex flex-col gap-10 items-center  shadow-sidebar z-0  h-screen">
                    @include('layouts.sidebar')
                </aside>
            @endif
        
            <!-- Page Content -->
            <main class="flex-1 w-[85%] p-4 bg-white"  id="dynamic-content">
                @yield('content')
            </main>
        </div>

        <!-- Footer -->
        @include('layouts.footer')
       
        @isset($footer)
            <footer class="bg-blue-700 pt-16 pb-12 border-t border-blue-700">
                    {{ $footer }}
            </footer>
        @endisset
    </div>

    <script>
        $(document).ready(function() {
            $('a.dynamic-link').on('click', function(e) {
                e.preventDefault();
                var url = $(this).attr('href');

                $.ajax({
                    url: url,
                    method: 'GET',
                    success: function(data) {
                        $('#dynamic-content').html($(data).find('#dynamic-content').html());
                    }
                });
            });
        });
    </script>
</body>
</html>
