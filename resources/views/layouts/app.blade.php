<!doctype html>
<html lang="en">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
    {{-- <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet"> Sirve para la paginacion, para darle estilo--}}
    <title>@yield('title')</title>
    </head>
    <body>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <a class="navbar-brand" href="{{route('index')}}">Sistema De Compras</a>
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
            <a class="nav-link" href="{{route('departamentos.index')}}">Departamentos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('municipios.index')}}">Municipios</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('areatrabajos.index')}}">Areas de Trabajo</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('generos.index')}}">Genero</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('estadosciviles.index')}}">Estados Civiles</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('estadosciviles.index')}}">Empleados</a>
            </li>
          </ul>
        </div>
      </nav>


      @yield('content')
    <script src="/js/jquery-3.5.1.slim.min.js" ></script>
    <script src="/js/popper.min.js" ></script>
    <script src="/js/script.js" ></script>
    <script src="/js/bootstrap.min.js" ></script>

    </body>
</html>