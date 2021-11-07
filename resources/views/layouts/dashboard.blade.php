<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="{{ asset('img/icons/user.png') }}" type="image/x-icon">

    <!-- Librerías -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap_v5_1_3.css') }}">

    <!-- CSS components -->
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard/global.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard/scroll-custom.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard/menu-item.css') }}">
    <link rel="stylesheet" href="{{ asset('css\dashboard\components\responsive-tab.css') }}">

    <!-- Home -->
    <link rel="stylesheet" href="{{ asset('css/dashboard/components/home.css') }}">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield('title_page')
</head>

<body>

    <div id="app">
        <nav class="fbg_header">
            <ul>
                @guest
                @if (Route::has('login'))
                <p>No está logeado</p>
                <!-- <li>
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li> -->
                @endif
                @else
                <li>
                    <div class="">
                        <a class="" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
                <li><a href="">{{ Auth::user()->name }}</a></li>

                @endguest
            </ul>
        </nav>


        <div id="popupback">
        </div>

        <div class="barra">
            <span class="openbarra">
                <img src="{{ asset('img/icons/flecha-sinfondo.png') }}" alt="">
            </span>
            <div>
                <img class="logo-barra" src="{{ asset('img/logo-negro.png') }}" alt="">
                <div class="fbg_options">
                    <a onclick="event.preventDefault();  document.getElementById('logout-form').submit();"><img src="{{ asset('img/icons/logout.png') }}" alt="logout" title="Cerrar sesión"></a>
                </div>
            </div>
            <h3 class="barra_title">
                <p href=""><img src="{{ asset('img/icons/user.png') }}" alt="">{{ Auth::user()->name }}</p>
            </h3>
            <div class="barra_items scroll-custom fbg_menu-item">
                <a href="{{ route('dashboard.home') }}"><img src="{{ asset('img/icons/empresario.png') }}" alt="">
                    <p>Inicio</p>
                </a>
                <h3 class="fbg_item-title">Control</h3>
                <a href="{{ route('solicitudes.page') }}"><img src="{{ asset('img/icons/empresario.png') }}" alt="">
                    <p>Solicitudes Incorporación</p>
                </a>
                <a href=""><img src="{{ asset('img/icons/empresario.png') }}" alt="">
                    <p>Comentarios</p>
                </a>
                <a href=""><img src="{{ asset('img/icons/empresario.png') }}" alt="">
                    <p>Comentarios</p>
                </a>

                </a>
                <h3 class="fbg_item-title">Configuración</h3>
                <a href=""><img src="{{ asset('img/icons/empresario.png') }}" alt="">
                    <p>Comentarios</p>
                </a>
                <a href=""><img src="{{ asset('img/icons/empresario.png') }}" alt="">
                    <p>Comentarios</p>
                </a>
                <h3 class="fbg_item-title">Soporte</h3>
                <a href=""><img src="{{ asset('img/icons/empresario.png') }}" alt="">
                    <p>Comentarios</p>
                </a>
                <a href=""><img src="{{ asset('img/icons/empresario.png') }}" alt="">
                    <p>Comentarios</p>
                </a>

            </div>

        </div>
        <main>
            @yield('content')
        </main>
    </div>


    <script src="{{ asset('js/jQuery_v3_6_0.js') }}"></script>
    <script src="{{ asset('js/dashboard/openclose.js') }}"></script>
</body>

</html>