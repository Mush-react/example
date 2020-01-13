<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    @include('layout.header')
    @include('layout.features')
    @include('layout.responsive')
    @include('layout.about')
    @include('layout.team')
    @include('layout.about1')
    @include('layout.subscribe')
    @include('layout.clients')
    @include('layout.twitter')
    @include('layout.numbers')
    @include('layout.hello')
    @include('layout.portfolio')
    @include('layout.features1')
    @include('layout.quote')
    @include('layout.contact')
    @include('layout.footer')
</body>
</html>
