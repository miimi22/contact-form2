<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact-form2</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inika&display=swap" rel="stylesheet">
    @yield('css')
    @livewireStyles
</head>

<body class="font-sans text-gray-900 antialiased">
    <header class="header">
        <div class="header__inner">
            <a href='/' class="header__logo">FashionablyLate</a>
        </div>
        @yield('nav')
    </header>
    <main>
        @yield('content')
    </main>
    @livewireScripts    
</body>
</html>