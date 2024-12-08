<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-security-policy" content="upgrade-insecure-requests">

    <link rel="icon" type="image/png" sizes="64x64" href="{{ asset('img/Icon.png') }}">

    <title>Portofolio</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=lato:100,300,400,700,900" rel="stylesheet"/>

    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <!-- Styles / Scripts -->

    @if (env('APP_ENV') === 'production')
        <link rel="stylesheet" href="{{ asset('build/assets/app-EVEvHZot.css') }}">
    @else
        @vite('resources/css/app.css')
    @endif
</head>

<body>

    @include('Layout.navbar')
    @yield('content')
    @include('Layout.Footer')

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="{{ asset('./js/swiper.js')}}"></script>
    <script src="{{ asset('./js/swiperHome.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    @if (env('APP_ENV') === 'production')
        <script src="{{ asset('build/assets/app-CE1NM9e5.js') }}" defer></script>
    @else
        @vite('resources/js/app.js')
    @endif

</body>

</html>