<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield('title')

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Añadir scripts especificos para cada página -->
    <!-- Esto hace que la web sea más eficiente -->
    @yield('js')

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

    <!-- Añadir css especifico en cada pagina -->
    <!-- Esto hace que la web sea más eficiente -->
    @yield('css')
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-dark shadow-sm">
            <div class="container-fluid px-4">
                <a class="navbar-brand text-white" href="{{ url('/') }}">
                    <!--{{ config('app.name', 'Laravel') }}-->
                    <img class="img-fluid" src="{{ asset('img/logo.png') }}">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        @guest
                        @else
                            <li class="nav-item">
                                <a class="nav-link text-white" href="/home">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="/anuncios">Gestión de anuncios</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="/ninos">Gestión de niños</a>
                            </li>
                            @if (Auth::user()->admin == 1)
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="/users">Gestión de usuarios</a>
                                </li>
                            @endif
                        @endguest
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="{{ route('login') }}">Acceso empleados</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    @if (Auth::user()->image)
                                        <img class="avatar-nav circulo mr-1" src="{{ Auth::user()->image }}">
                                    @else
                                        <img class="avatar-nav circulo" src="{{ asset('img/sinavatar.jpg') }}">
                                    @endif
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end bg-dark" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item text-white bg-dark"
                                        href="{{ route('perfil.show', Auth::user()->id) }}">
                                        Perfil
                                    </a>

                                    <a class="dropdown-item text-white bg-dark" href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="p-4">
            @yield('content')
        </main>
    </div>
</body>

</html>
