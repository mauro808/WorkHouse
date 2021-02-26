@extends('layouts.app')
@section('content')
<div class="row"> 
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
    <div class="col-lg-11" align="center">
    </br>
        <h2 class="text-monospace">Registrar Nuevo Usuario</h2>
    </div>
    <div class="col-lg-11">
  
    </div>
</div>  
<div class="row">
<div class="col-lg-3"></div>
<div class="col-lg-6">
<form action="{{ route('agregarUsuario') }}" method="POST" class="w-60 p-3 mr-3 text-center">
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
        <option selected>Seleccione</option>
        @foreach($rols as $rol)
        <option value="{{$rol->id}}">{{$rol->descripcion}}</option>
        @endforeach
      </select>
      </div>
      <div class="col-6">
    <label for="nombre">Nombres y Apellidos:</label>
    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Digite Nombres y Apellidos"/>
    </div>
    </div>
    <div class="row">
    <div class="col-6">
    <label for="txtTipoDocumento">Tipo Documento:</label>
    <select name="tipoDocumento" class="form-control">
        <option selected>Seleccione</option>
        <option>TI</option>
        <option>CC</option>
        <option>Pasaporte</option>
        <option>Cedula Extranjeria</option>
        
      </select>
      </div>
    <div class="col-6">
    <label for="identificacion">Identificación:</label>
    <input type="text" class="form-control" id="identificacion" name="identificacion" placeholder="Digite el Número de Documento"/>
    </div>
    </div>
    <div class="row">
    <div class="col-6">
    <label for="correo">Correo electrónico:</label>
    <input type="text" class="form-control" id="correo'" name="correo" placeholder="Digite el Correo"/>
    </div>
    <div class="col-6">
    <label for="telefonoFijo">Teléfono fijo:</label>
    <input type="text" class="form-control" id="telefonoFijo'" name="telefonoFijo" placeholder="Digite el Teléfono Fijo"/>
   </div>
   </div>
    <div class="row">
   <div class="col-6">
    <label for="celular">Celular:</label>
    <input type="text" class="form-control" id="celular'" name="celular" placeholder="Digite el Celular"/>
    </div>
    <div class="col-6">
    <label for="direccion">Dirección:</label>
    <input type="text" class="form-control" id="direccion'" name="direccion" placeholder="Digite la Dirección"/>
    </div>
    </div>

 
    <div class="col-5">
    <label for="nombreUsuario">Usuario:</label>
    <input type="text" class="form-control" id="nombreUsuario'" name="nombreUsuario" placeholder="Digite el Usuario"/>
    </div>
       <div class="row">
    <div class="col-6">
    <label for="contrasena">Contraseña:</label>
    <input type="password" class="form-control" id="contrasena'" name="contrasena" placeholder="Digite Contraseña"/>
    </div>
    <div class="col-6">
    <label for="contrasenac">Confirme Contraseña:</label>
    <input type="password" class="form-control" id="contrasenac'" name="contrasenac" placeholder="Confirme Contraseña"/>
</div>
</div>
</div>
<button type="submit" class="btn btn-primary">Registrar</button>
      <a class="btn btn-warning" href="{{ url ('usuarios') }}">Cancelar</a>
</form>
</div>
<div class="col-lg-2"></div>
</div>

@endsection