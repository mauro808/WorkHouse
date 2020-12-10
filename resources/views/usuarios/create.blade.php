@extends('layouts.app')
@section('content')
<div class="row"> 
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
    <div class="col-lg-11" align="center">
        <h2>Registrar Nuevo Usuario</h2>
    </div>
    <div class="col-lg-11">
        <a class="btn btn-success" href="{{ url ('usuarios') }}">Atrás</a>
    </div>
</div>  
<div class="row">
<div class="col-lg-4"></div>
<div class="col-lg-6">
<form action="{{ route('agregarUsuario') }}" method="POST" class="w-50 p-3 mr-3 text-center">
@csrf 

@error('nombreUsuario')
    <div class="alert alert-danger">
        El nombre es obligatorio
    </div>
@enderror
<div class="form-group">
    <div class="row">
    <div class="col-6">
    <input type="hidden" name="estado" id="estado" value="Activo">
    <label for="txtidRol">Rol:</label>
    <select name="idRol" class="form-control">
        <option selected>Choose...</option>
        <option value="1">Administrador</option>
        <option value="2">Vendedor</option>
      </select>
      </div>
      <div class="col-6">
    <label for="nombre">Nombre:</label>
    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Digite el Nombre"/>
    </div>
    </div>
    <div class="row">
    <div class="col-6">
    <label for="txtTipoDocumento">Tipo Documento:</label>
    <select name="tipoDocumento" class="form-control">
        <option selected>Escoge...</option>
        <option>TI</option>
        <option>CC</option>
        <option>Pasaporte</option>
        <option>Cedula Extranjeria</option>
        <option>Otro</option>
      </select>
      </div>
    <div class="col-6">
    <label for="identificacion">Identificacion:</label>
    <input type="text" class="form-control" id="identificacion" name="identificacion" placeholder="Digite el Documento"/>
    </div>
    </div>
    <label for="correo">Correo electronico:</label>
    <input type="text" class="form-control" id="correo'" name="correo" placeholder="Digite el Correo"/>
    <label for="telefonoFijo">Telefono fijo:</label>
    <input type="text" class="form-control" id="telefonoFijo'" name="telefonoFijo" placeholder="Digite el Telefono Fijo"/>
    <label for="celular">Celular:</label>
    <input type="text" class="form-control" id="celular'" name="celular" placeholder="Digite el Celular"/>
    <label for="direccion">Direccion:</label>
    <input type="text" class="form-control" id="direccion'" name="direccion" placeholder="Digite la Direccion"/>
    <label for="nombreUsuario">Usuario:</label>
    <input type="text" class="form-control" id="nombreUsuario'" name="nombreUsuario" placeholder="Digite el Usuario"/>
    <label for="contrasena">Contraseña:</label>
    <input type="password" class="form-control" id="contrasena'" name="contrasena" placeholder="Digite la Contraseña"/>

</div>
<button type="submit" class="btn btn-primary">Registrar</button>
</form>
</div>
<div class="col-lg-2"></div>
</div>
@endsection