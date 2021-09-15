<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test App</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .parent{
            grid-template-rows: 0fr;
        }
    </style>
</head>
<body>
    <div class="parent md:h-screen md:grid md:grid-cols-6 md:grid-rows-2 ">
        <section class="sidebar bg-white md:col-span-1 md:row-span-2">
            @include('layout.partial.sidebar')
        </section>
        <div class="bg-blue-400 md:col-span-5 md:row-span-1 nav mb-2 shadow-md">
            @include('layout.partial.navbar')
        </div>
        <main class="main bg-gray-100 md:col-start-2 md:col-span-5 md:row-span-2 h-full pb-16 overflow-y-auto">
            @yield('content')
        </main>
    </div>

    {{-- footer section --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    @yield('js')
</body>
</html>