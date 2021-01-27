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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet">
    <link href="../resources/views/layouts/dataTables.bootstrap4.min.css" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script> 
    <br><script src = "http://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js" defer ></script>
</head>
<body style="background-image: url('https://miro.medium.com/max/9216/1*f_IrH5CV6TjPxB19YN4zNw.jpeg');width: 100%; background-repeat: no-repeat; background-size: cover;">
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    WorkHouse
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item mr-100">
        <a class="nav-link font-weight-bold" href="{{ route('usuario.listar')}}" style="margin-right:100px">Usuarios</a>
      </li>
      <li class="nav-item">
        <a class="nav-link font-weight-bold" href="{{ route('cliente.listar')}}" style="margin-right:100px">Clientes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link font-weight-bold" href="#" style="margin-right:100px">Productos</a>
      </li>
    </ul>
    <a class="navbar-brand d-none d-lg-block" href="#"><img src="https://lh3.googleusercontent.com/v25ixg48yZadnLeUvMA3XE2-cZGS-JWpvDXBmAyAxh2imf1l9S2PMxbnS4B1YsduW0XH=s170" alt=""></a>
    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
      <li class="nav-item">
        <a class="nav-link font-weight-bold" href="{{ route('categoria.listar')}}" style="margin-right:100px">Categorias</a>
      </li>
      <li class="nav-item">
        <a class="nav-link font-weight-bold" href="#" style="margin-right:100px">Ventas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link font-weight-bold" href="#" style="margin-right:100px">Compras</a>
      </li>
    </ul>
  </div>
</nav>
         
        <main class="py-4" style="margin-left:200px; margin-right:100px">
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
