<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Sistema empleados</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    
    <!-- Iconos de Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Sistema
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('empleado.index') }}">{{ __('Empleados') }}</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle tex" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

<!-- Se que esto es un asco pero no se me ocurrio otra cosa -->
<br><br><br><br><br><br>
<!-- Footer de la app-->
 <footer class="bg-dark text-light pt-5 pb-4">
            <div class="container text-center text-md-left" style="margin-bottom: 0;">
                <div class="row text-center text-md-left">
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h5 class="text-uppercase mb-4 font-weight-bold text-primary">Sistema de Empleados</h5>
                        <p>Sistema de gestion de empleados CRUD con Php, Laravel,Bootstrap y My SQL, en el que se pueden agregar, editar y eliminar empleados de una base de datos mediante un backend con Php y Laravel. </p>
                    </div>

                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h5 class="text-uppercase mb-4 font-weight-bold text-secondary">Tecnologias</h5>
                        <p>
                            <a href="#" class="text-white" style="text-decoration: none;">
                                PHP
                            </a>
                        </p>
                        <p>
                            <a href="#" class="text-white" style="text-decoration: none;">
                                Laravel
                            </a>
                        </p>
                        <p>
                            <a href="#" class="text-white" style="text-decoration: none;">
                                Bootstrap
                            </a>
                        </p>
                        <p>
                            <a href="#" class="text-white" style="text-decoration: none;">
                                MySQL
                            </a>
                        </p>
                    </div>

                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h5 class="text-uppercase mb-4 font-weight-bold text-secondary">Redes Sociales</h5>
                        <p>
                            <a href="#https://www.linkedin.com/in/santiago-quiroz-dev/" class="text-white" style="text-decoration: none;">
                                LinkedIn
                            </a>
                        </p>
                        <p>
                            <a href="https://github.com/EmilianoQuiroz" class="text-white" style="text-decoration: none;">
                                GitHub
                            </a>
                        </p>
                        <p>
                            <a href="#" class="text-white" style="text-decoration: none;">
                                Twitter
                            </a>
                        </p>
                        <p>
                            <a href="#" class="text-white" style="text-decoration: none;">
                                Instagram
                            </a>
                        </p>

                    </div>

                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h5 class="text-uppercase mb-4 font-weight-bold text-secondary">Contacto</h5>
                        <p> 
                            <i class="fas fa-home mr-3"></i>Buenos Aires, Argentina
                        </p>
                        <p> 
                            <i class="fas fa-home mr-3"></i>1126608939
                        </p>

                    </div>
                </div>

                <hr class="mb-4">
                <div class="row align-items-center">
                    <div class="col-md-7 col-lg-8">
                        <p>
                            Copyright @2023 Todos los derechos reservados:
                            <a href="https://www.linkedin.com/in/santiago-quiroz-dev/" target="_blank" style="text-decoration: none;">
                                <strong class="text-primary">
                                    Santiago Quiroz
                                </strong>
                            </a>
                        </p>
                    </div>
                    <div class="col-md-5 col-lg-4">
                        <div class="text-center text-md-right">
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item">
                                    <a href="#" class="btn-floating btn-sm text-white" style="font-size: 30px;"><i class="fab fa-facebook"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="https://www.linkedin.com/in/santiago-quiroz-dev/" target="_blank" class="btn-floating btn-sm text-white" style="font-size: 30px;"><i class="fab fa-linkedin"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="https://github.com/EmilianoQuiroz" target="_blank" class="btn-floating btn-sm text-white" style="font-size: 30px;"><i class="fab fa-github"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="btn-floating btn-sm text-white" style="font-size: 30px;"><i class="fab fa-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
    </footer>
</body>
</html>
