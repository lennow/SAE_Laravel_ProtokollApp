<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Protokoll App - @yield('title', 'alle Protokolle')</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css">

    </head>
    <body>
        <header>
            @include('layouts.navbar')
        </header>

        @yield('content')

    </body>
</html>
