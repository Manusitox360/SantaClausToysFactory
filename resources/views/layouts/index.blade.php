<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Santa Claus')</title>
    @vite(['resources/css/app.css'])
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
</head>
<body>
    <div id="index">
        <x-header />

        <main>
            @yield('content')
        </main>

        <x-footer />
    </div>
</body>
</html>