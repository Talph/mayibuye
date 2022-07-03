<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Mayibuye i-Afrika Trading is a construction company that delivers high quality, reliable construction services for governmental establishments. In addition, we have broad expertise with commercial clients.">
    <meta name="keywords" content="Building maintenance,ROAD CONSTRUCTION, BULK WATER, building, Construction">
    <meta name="generator" content="m-iafrika.co.za/">
    <meta name="author" content="Tafara Shamu">
    <meta itemprop="name" content="Mayibuye i-Afrika Trading">
    <meta itemprop="url" content="https://m-iafrika.co.za/">
    <meta property="og:site_name" content="Mayibuye i-Afrika Trading">
    <meta property="og:url" content="https://m-iafrika.co.za/">
    <meta property="og:type" content="website">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Mayibuye iAfrika') }}</title>

        <!-- favicon -->
        <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('images/favi/apple-icon-57x57.png') }}">
        <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('images/favi/apple-icon-60x60.png') }}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('images/favi/apple-icon-72x72.png') }}">
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('images/favi/apple-icon-76x76.png') }}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('images/favi/apple-icon-114x114.png') }}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('images/favi/apple-icon-120x120.png') }}">
        <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('images/favi/apple-icon-144x144.png') }}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('images/favi/apple-icon-152x152.png') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favi/apple-icon-180x180.png') }}">
        <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('images/favi/android-icon-192x192.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favi/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('images/favi/favicon-96x96.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favi/favicon-16x16.png') }}">
        <link rel="manifest" href="/images/favi/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/images/favi/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" async></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Proza+Libre&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

    
</head>
<body>
    <div id="app">
        <div class="fluid-container top-menu">
<div class="container py-2">
    <div class="row justify-content-center font-12 text-center">
        <div class="col-sm-3 text-white col-mb-3"><i class="bi va bi-telephone-inbound"></i> +27 877 016 314</div>
         <div class="col-sm-3 text-white col-mb-3"><i class="bi va bi-calculator"></i> +27 86 767 2586</div>
        <div class="col-sm-3 text-white col-mb-3"><i class="bi va bi-check2-circle"></i> B-BBEE LEVEL 1</div>
    </div>
</div>
        </div>

        <nav class="navbar navbar-expand-md navbar-light shadow-sm sticky-top py-1 bg-light">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="/images/png/logo.png" width="150" height="50" alt="Mayibuye i-Afrika Trading">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        {{-- Menu Links --}}
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="{{ route('welcome') }}">{{ __('Home') }}</a>
                             </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-dark" data-toggle="dropdown" href="{{ route('about') }}">{{ __('About us') }}</a> 
                            <div class="dropdown-menu">
                                    <a class="nav-item dropdown-item text-dark" href="{{ route('overview') }}">{{ __('Overview') }}</a>
                                    <a class="nav-item dropdown-item text-dark" href="{{ route('certs') }}">{{ __('Certifications and Memberships') }}</a>
                                    <a class="nav-item dropdown-item text-dark" href="{{ route('director') }}">{{ __('The Director') }}</a>
                                    {{-- <a class="nav-item dropdown-item text-dark" href="{{ route('team') }}">{{ __('Team') }}</a>                               --}}
                                </div>
                        </li>

                            <li class="nav-item">
                            <a class="nav-link text-dark" href="{{ route('services') }}">{{ __('Services') }}</a>
                             </li>
                             <li class="nav-item">
                                <a class="nav-link text-dark" href="{{ route('projects') }}">{{ __('Projects') }}</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link text-dark" href="{{ route('gallery') }}">{{ __('Gallery') }}</a>
                                     </li>
                             <li class="nav-item">
                            <a class="nav-link text-dark" href="{{ route('contact-us') }}">{{ __('Contact us') }}</a>
                             </li>
                        <!-- Authentication Links -->
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-0">
            @yield('content')
        </main>
    </div>

    @yield('scripts')
</body>
</html>
