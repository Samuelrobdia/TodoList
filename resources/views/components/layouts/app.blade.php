<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
        @vite('resources/css/app.css')
        <title>{{ $title ?? 'Login' }}</title>
    </head>
    <body>
        {{ $slot }}
    </body>
</html>
