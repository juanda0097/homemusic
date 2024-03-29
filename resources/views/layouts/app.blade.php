<!DOCTYPE html>
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
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/simple-sidebar.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
    <div class="d-flex" id="wrapper">

<!-- Sidebar -->
<div class="bg-light border-right" id="sidebar-wrapper">
  <div class="sidebar-heading">Projecto de Laravel Casa Musical </div>
  <div class="list-group list-group-flush">
    <a href="{{ route('Homemusic.index') }}" class="list-group-item list-group-item-action bg-light">Casa Musical</a>
    <a href="{{ route('Album.index') }}" class="list-group-item list-group-item-action bg-light">Album</a>
    <a href="{{ route('Interpreter.index') }}" class="list-group-item list-group-item-action bg-light">Interprete</a>

    <a href="{{ route('Gender.index') }}" class="list-group-item list-group-item-action bg-light">Genero</a>
    <a href="{{ route('Medial.index') }}" class="list-group-item list-group-item-action bg-light">Medios</a>
    <a href="{{ route('Author.index') }}" class="list-group-item list-group-item-action bg-light">Autor</a>
    <a href="{{ route('Song.index') }}" class="list-group-item list-group-item-action bg-light">Canciones</a>
    <ul>
        <li>
            <p class="list-group-item list-group-item-action bg-light">LISTA PDF</p>
            <ul>
                <li>
                    <a href="{{ url('pdfcancionmedio') }}" class="list-group-item list-group-item-action bg-light">Cancion-Medios</a>
                </li>
                <li>
                    <a href="{{ url('pdfconsulta3') }}" class="list-group-item list-group-item-action bg-light">Consulta 3</a>
                </li>
                <li>
                    <a href="{{ url('pdfconsulta4') }}" class="list-group-item list-group-item-action bg-light">Consulta 4</a>
                </li>
                <li>
                    <a href="{{ url('pdfconsulta5') }}" class="list-group-item list-group-item-action bg-light">Consulta 5</a>
                </li>
                <li>
                    <a href="{{ url('pdfconsulta6') }}" class="list-group-item list-group-item-action bg-light">Consulta 6</a>
                </li>
            </ul>
        </li>
    </ul>
    
  </div>
</div>
<!-- /#sidebar-wrapper -->

<!-- Page Content -->
<div id="page-content-wrapper">

  <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
    <h1>Juan daniel martinez cudris</h1>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
      @guest
    <li class="nav-item">
        <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar sesion') }}</a>
    </li>
    @if (Route::has('register'))
        <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
        </li>
    @endif
@else
    <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }} <span class="caret"></span>
        </a>

        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </li>
@endguest
      </ul>
    </div>
  </nav>
        
        <main class="py-4">
            @yield('content')
        </main>
        <center><h1>Bienvenidos a casa musical</h1></center>
    </div>
   
    
</body>

</html>
