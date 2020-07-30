<!DOCTYPE html>
<html dir="ltr" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Mrtav-Gladan') }}</title>
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/restaurant/favicon.ico')}}">
    <!-- Scripts -->
    
    <!-- Fonts -->
    
    <!-- Styles -->
    @include('partials.styles')
    
</head>
<body class="stretched">
    
    @yield('content')
    
    @include('partials.javascript')
</body>
</html>
