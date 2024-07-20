<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Sportee') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="./../css/home.css">
</head>

<body>
    <div id="app">
        <header>
            <img src="./../img/logo.png" alt="logo" id="logo"/>
            
            <div class="bx bx-menu" id="menu-icon"></div>
        
            <ul class="navbar">
                <li><a href="#home">Home</a> </li>
                <li><a href="#about">About Us</a></li>
                <li><a href="#menu">Menu</a> </li> 
                <li><a href="#services">Services</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="/login">Login</a></li>
                <li><a href="/register">Register</a></li>
            </ul>
        </header>
        
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>