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
<body class="w-full">
    <div id="index">
        <x-header />

        <main class="bg-[url(https://media.gq.com.mx/photos/656cc4bf087cdc20a791dc56/2:3/w_1456,h_2184,c_limit/adornos%20de%20navidad.jpg)] sm:bg-[url(https://images.unsplash.com/photo-1482517967863-00e15c9b44be?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTJ8fGZvbmRvJTIwZGUlMjBwYW50YWxsYSUyMGRlJTIwbmF2aWRhZHxlbnwwfHwwfHx8MA%3D%3D)] bg-fixed bg-no-repeat bg-cover">
            @yield('content')
            @yield('script')
        </main>
        <x-footer />
    </div>
</body>
</html>