<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @laravelPWA
    <!-- Title -->
    <title>{{ env('APP_NAME') }} - @yield('title')</title>
    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="{{ mix('css/app.min.css') }}">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('css/fontawesome.min.css') }}">
    @yield('style')
</head>

<body data-theme-color="color-blue">
    <div class="page-wraper">

        @yield('body')

    </div>

    @if (!Request::is('entrar') && !Request::is('cadastro'))
        <!-- Menubar -->
        @include('_components._menu_bar')
        <!-- Menubar -->

        <!-- PWA Offcanvas -->
        {{-- @include('_components.instalar_pwa') --}}
        <!-- PWA Offcanvas End -->
    @endif

    <script src="{{ mix('js/app.min.js') }}"></script>

    @yield('script')
</body>

</html>
