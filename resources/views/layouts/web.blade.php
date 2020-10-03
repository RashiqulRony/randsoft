<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('seo')
    <title>RandSoft | @yield('title')</title>
    {{--css--}}
    @include('web.includes._css')
    {{--css--}}
</head>

<body id="top" class="has-header-search">
{{--Header--}}
@include('web.includes._header')
{{--Header--}}

{{--Main Content--}}
@yield('content')
{{--Main Content--}}

{{--Footer--}}
@include('web.includes._footer')
{{--Footer--}}

{{--js--}}
@include('web.includes._js')
{{--js--}}
</body>
</html>
