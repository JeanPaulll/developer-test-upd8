<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts/head')
@yield('head')
<body>
@include('layouts/header')
@yield('header')
@include('layouts/table')
@yield('table')
@include('layouts/footer')
@yield('footer')
@include('layouts/scripts')
@yield('scripts')
</body>
</html>
