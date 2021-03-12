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
<body style="background-color:#E5E8E8  ; background-repeat: no-repeat; background-size: cover;">
<div class="container" id="app_login">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card" style="margin-top:200px">
                <div class="card-header" align="center">{{ __('ACCEDER A PERFIL') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Usuario') }}</label>

                            <div class="col-md-6">
                                <input id="nombreUsuario" v-model="usuario" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" v-model="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            </div>
                        </div>

                        <div class="form-group row">
                        
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary" @click="iniciarSesion()"> <strong> Entrar </strong> </button>
                                    <a class="btn btn-dark" href="{{ route('password.request') }}">
                                        Recuperar Contraseña
                                    </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
    </script>
</html>

