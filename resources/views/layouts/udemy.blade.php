<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">

    <title>Cursos.com</title>
    <meta name="description" content="Cursos en linea">
    <meta name="author" content="Omar Sulca">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
<div class="bg-success" style="height: 8px;">&nbsp</div>
<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Udemy</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Inicio</a>
                </li>
                @auth
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('compras') }}">Ver Compras</a>
                    </li>
                    @if(\App\Http\Controllers\ProfesorController::existe())
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('form-curso')}}">Subir Curso</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('ventas') }}">Ver Ventas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('fotos') }}">Subir Foto</a>
                        </li>
                    @endif
                @endauth
            </ul>
        </div>
        <div>
            <ul class="navbar-nav">
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item" style="margin-right: 8px;">
                            <a class="btn btn-sm btn-outline-success" href="{{ route('login') }}">Iniciar Sesion</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="btn btn-sm btn-success" href="{{ route('register') }}">Registrarse</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
<div class="container mt-5">
    @yield("contenido")
</div>
<footer class="bg-dark mt-5">
    Footer
</footer>
<script src="{{asset("js/app.js")}}"></script>
</body>
</html>

