<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://kit.fontawesome.com/fe849e8a6a.js" crossorigin="anonymous"></script>
</head>
<body class="bg-gray-200 dark:bg-gray-800">

    @include('components.nav')

    @yield('content')

    {{-- @include('components.footer') --}}
</body>
</html>
