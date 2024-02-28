<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!--Favicon-->
    <link rel="apple-touch-icon" sizes="57x57" href="{{asset("images/favicon/apple-icon-57x57.png")}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset("images/favicon/apple-icon-60x60.png")}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset("images/favicon/apple-icon-72x72.png")}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset("images/favicon/apple-icon-76x76.png")}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset("images/favicon/apple-icon-114x114.png")}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset("images/favicon/apple-icon-120x120.png")}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset("images/favicon/apple-icon-144x144.png")}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset("images/favicon/apple-icon-152x152.png")}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset("images/favicon/apple-icon-180x180.png")}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset("images/favicon/android-icon-192x192.png")}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset("images/favicon/favicon-32x32.png")}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset("images/favicon/favicon-96x96.png")}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset("images/favicon/favicon-16x16.png")}}">
    <link rel="manifest" href="{{asset("images/favicon/manifest.json")}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <meta name="author" content="Tafara Shamu">
    <meta itemprop="name" content="AfrFinity">
    <meta itemprop="url" content="ttps://m-iafika.co.za/">
    <meta property="og:site_name" content="Mayibuye i-Afrika Trading">
    <meta property="og:url" content="https://m-iafika.co.za/">
    <meta property="og:type" content="website">

    <!-- Custom fonts for this template-->

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css2?family=Inter&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body id="page-top">
<div id="app">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Side Bar Menu -->
        @include('backend.partials.sideBarMenu')
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                @include('backend.partials.topBarMenu')
                @yield('content')
            </div>
            @include('backend.partials.footer')
        </div>
    </div>
</div>
{{--<!-- Scripts -->--}}
{{--<script src="{{ asset('js/app.js') }}"></script>--}}
{{--<script src="{{ asset('js/dash.min.js') }}"></script>--}}

{{--<!-- Core plugin JavaScript-->--}}
{{--<script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>--}}
@yield('scripts')


<script type="text/javascript">
    $(document).ready(function () {
        $('#J_name').keyup(function (e) {
            var str = $('#J_name').val();
            str = str.replace(/\W+(?!$)/g, '-').toLowerCase();
            $('#J_slug').val(str);
            $('#J_slug').attr('value', str);
        });
    });
</script>

</body>

</html>