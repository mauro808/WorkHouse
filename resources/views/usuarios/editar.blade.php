@extends('layouts.app')
@section('content')

@if (session('mensaje'))
<div class="alert alert-success">{{ session('mensaje') }} </div>
@endif
<div class="row"> 
    <div class="col-lg-11" align="center">
        <h2>Editar Usuario</h2>
    </div>
    <div class="col-lg-11">
        <a class="btn btn-success" href="{{ url ('usuarios') }}">Atrás</a>
    </div>
</div>  
<div class="row">
<div class="col-lg-4"></div>
<div class="col-lg-6">
<form action="{{ route('usuario.update', $usuario->id) }}" method="POST" class="w-50 p-3 mr-3 text-center">
@method('PUT')
@csrf 
<div class="form-group">
<div class="row">
<div class="col-6">
<label for="txtidRol">Rol:</label>
    <select name="idRol" class="form-control">
        <option value="2" @if ($usuario->idRol==2) selected @endif>Vendedor</option>
        <option value="1" @if ($usuario->idRol==1) selected @endif>Administrador</option>
        
      </select>
      </div>
      <div class="col-6">
    <label for="nombre">Nombre:</label>
    <input type="text" class="form-control" value="{{ $usuario->nombre }}" id="nombre" name="nombre" placeholder="Digite el Nombre"/>
    </div>
    </div>
    <div class="row">
    <div class="col-6">
    <label for="tipoDocumento">Tipo Documento:</label>
    <select name="tipoDocumento" class="form-control">
        <option @if ($usuario->tipoDocumento=="TI") selected @endif>TI</option>
        <option @if ($usuario->tipoDocumento=="CC") selected @endif>CC</option>
        <option @if ($usuario->tipoDocumento=="Pasaporte") selected @endif>Pasaporte</option>
        <option @if ($usuario->tipoDocumento=="Cedula Extranjeria") selected @endif>Cedula Extranjeria</option>
        <option @if ($usuario->tipoDocumento=="Otro") selected @endif>Otro</option>
      </select>
      </div>
    <div class="col-6">
    <label for="identificacion">Identificacion:</label>
    <input type="text" class="form-control" value="{{ $usuario->identificacion }}" id="identificacion" name="identificacion" placeholder="Digite el Documento"/>
    </div>
    </div>
    <label for="correo">Correo electronico:</label>
    <input type="text" class="form-control" value="{{ $usuario->correo }}" id="correo'" name="correo" placeholder="Digite el Correo"/>
    <label for="telefonoFijo">Telefono fijo:</label>
    <input type="text" class="form-control" value="{{ $usuario->telefonoFijo }}" id="telefonoFijo'" name="telefonoFijo" placeholder="Digite el Telefono Fijo"/>
    <label for="celular">Celular:</label>
    <input type="text" class="form-control" value="{{ $usuario->celular }}" id="celular" name="celular" placeholder="Digite el Celular"/>
    <label for="direccion">Direccion:</label>
    <input type="text" class="form-control" value="{{ $usuario->direccion }}" id="direccion" name="direccion" placeholder="Digite la Direccion"/>
    <label for="nombreUsuario">Usuario:</label>
    <input type="text" class="form-control" value="{{ $usuario->nombreUsuario }}" id="nombreUsuario" name="nombreUsuario" placeholder="Digite el Usuario"/>
    <label for="contrasena">Contraseña:</label>
    <input type="text" class="form-control" value="{{ $usuario->contrasena }}" id="contrasena'" name="contrasena" placeholder="Digite la Contraseña"/>

</div>
<button type="submit" class="btn btn-primary">Actualizar Usuario</button>
</form>
</div>
<div class="col-lg-2"></div>
</div>
@endsection