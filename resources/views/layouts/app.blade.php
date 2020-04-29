<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="navbar bg-gray-400 py-2">
        <div class="flex container mx-auto justify-between items-center">
            <div>
                <a href="#" class="text-2xl font-sans text-gray-600 hover:text-gray-800">Store</a>
            </div>
            @guest
                <div class="flex items-center justify-end">
                    <div>
                        <a href="{{ route('login') }}" class=" text-lg font-sans text-gray-600 hover:text-gray-800">Acceder</a>
                    </div>
                    <div>
                        <a href="{{ route('register') }}" class=" text-lg font-sans text-gray-600 hover:text-gray-800 ml-4">Registro</a>
                    </div>
                </div>
                @else
                <div class="flex items-center justify-end">
                    <div>
                        <a href="#" class=" text-lg font-sans text-gray-600 hover:text-gray-800">
                            {{ Auth::user()->name }}
                        </a>
                    </div>
                    <div>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class=" text-lg font-sans text-gray-600 hover:text-gray-800 ml-4">Cerrar sesión
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </div>
                </div>
            @endguest

        </div>
    </div>
    <div id="app">
        <main>
            @yield('content')
        </main>
    </div>
</body>
</html>
