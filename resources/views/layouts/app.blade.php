<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Website Objek Wisata Sibolga dan Tapanuli Tengah</title>

        <!-- Fonts -->
        <link rel="icon" href="">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
        {{-- <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.5/dist/flowbite.min.css" /> --}}

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
        <script src="https://kit.fontawesome.com/b2ba1193ce.js" crossorigin="anonymous"></script>
    </head>
    <body class="font-sans antialiased" x-data="{type:'Semua',region:'Semua'}">
        @include('components.navbar')
        @yield('content')
        <script src="https://unpkg.com/flowbite@1.4.5/dist/flowbite.js"></script>
        <script src="{{ asset('js/wow.min.js') }}"></script>
        <script>
            new WOW().init();   
        </script>
        @yield('scripts')
    </body>
</html>
