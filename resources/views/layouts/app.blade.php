<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'WorkHouse') }}</title>

    <!-- Scripts -->

      
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->


    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet">
    <link href="../resources/views/layouts/dataTables.bootstrap4.min.css" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script> 
    <script src = "https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js" defer ></script>
    <script src = "https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap5.min.js" defer ></script>
     <script src="js/librerias/sweetalert2.js"></script>
</head>
<body style="background-image: url('https://image.freepik.com/foto-gratis/disposicion-herramientas-fondo-espacio-copia-amarilla_23-2148393104.jpg');width: 100%; Background-color: transparent; background-repeat: no-repeat; background-size: cover;">
<nav class="navbar navbar-expand-lg navbar-light" style="background-color:#E6D938;">

  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
     <li class="nav-item mr-100">
        <a class="nav-link font-monospace" href="#" style="margin-right:100px">Salir</a>
      </li>
      <li class="nav-item mr-100">
        <a class="nav-link font-monospace" href="{{ route('usuario.listar')}}" style="margin-right:100px">Usuarios</a>
      </li>
      <li class="nav-item">
        <a class="nav-link font-monospace" href="{{ route('cliente.listar')}}" style="margin-right:100px">Clientes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link font-monospace" href="{{ route('producto.listar')}}" style="margin-right:100px">Productos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link font-monospace" href="{{ route('categoria.listar')}}" style="margin-right:100px">Categorías</a>
      </li>
      <li class="nav-item">
        <a class="nav-link font-monospace" href="{{ route('venta.listar')}}" style="margin-right:100px" >Ventas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link font-monospace" href="#" style="margin-right:100px">Compras</a>
      </li>
      <li class="nav-item mr-100">
        <a class="nav-link font-monospace" href="#" style="margin-right:100px">Ayuda</a>
      </li>

  </div>
</nav>
         
        <main class="py-4" style="margin-left:200px; margin-right:300px">
            @yield('content')
        </main>
    </div>
</body>
<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
    </script>
</html>
