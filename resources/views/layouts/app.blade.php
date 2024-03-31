<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('includes.assets.css')
    <title>@yield('title')</title>

</head>
@yield('container')

@include('includes.assets.js')
</body>
</html>
