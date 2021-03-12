@extends('layouts.app')
@section('content')

@if (session('mensaje'))
<div class="alert alert-success">{{ session('mensaje') }} </div>
@endif
<div class="row"> 
    <div class="col-lg-11" align="center">
    </br>
         <h2 class="text-lucida"><strong>Editar Usuario</strong></h2>
    </div>
    
</div>  
<div class="row">
<div class="col-lg-3"></div>
<div class="col-lg-6">
<form action="{{ route('usuario.update', $usuario->id) }}" method="POST" class="w-60 p-3 mr-3 text-center">
@method('PUT')
@csrf 
<div class="form-group">
<div class="row">
<div class="col-6">
<label for="txtidRol">Rol:</label>
    <select name="idRol" class="form-control" required>
        @foreach($rols as $rol)
             @if($usuario->idRol == $rol->id)
             <option value="{{$rol->id}}" selected>{{$rol->descripcion}}</td>
            @endif 
            @endforeach  
        @foreach($rols as $rol)
        <option value="{{$rol->id}}">{{$rol->descripcion}}</td>
        @endforeach 
      </select>
      </div>
      <div class="col-6">
    <label for="nombre">Nombre:</label>
    <input type="text" class="form-control" value="{{ $usuario->nombre }}" id="nombre" name="nombre" placeholder="Digite el Nombre" required/>
    </div>
    </div>
    <div class="row">
    <div class="col-6">
    <label for="txtTipoDocumento">Tipo Documento:</label>
    <select name="tipoDocumento" class="form-control" required>
        <option @if ($usuario->tipoDocumento=="Tarjeta Identidad") selected @endif>Tarjeta Identidad</option>
        <option @if ($usuario->tipoDocumento=="Cedula Ciudadania") selected @endif>Cédula Ciudadanía</option>
        <option @if ($usuario->tipoDocumento=="Cedula Extranjeria") selected @endif>Cedula Extranjeria</option>
        <option @if ($usuario->tipoDocumento=="Permiso Permanencia") selected @endif>Permiso Permanencia</option>
        <option @if ($usuario->tipoDocumento=="Pasaporte") selected @endif>Pasaporte</option>
        <option @if ($usuario->tipoDocumento=="Otro") selected @endif>Otro</option>
      </select>
      </div>
    <div class="col-6">
    <label for="identificacion">Identificacion:</label>
    <input type="text" class="form-control" value="{{ $usuario->identificacion }}" id="identificacion" name="identificacion" placeholder="Digite el Documento" required/>
    </div>
    </div>
    <div class="row">
    <div class="col-6">
    <label for="correo">Correo electronico:</label>
    <input type="email" class="form-control" value="{{ $usuario->correo }}" id="correo'" name="correo" placeholder="Digite el Correo" required/>
    </div>
     <div class="col-6">
    <label for="telefonoFijo">Telefono fijo:</label>
    <input type="text" class="form-control" value="{{ $usuario->telefonoFijo }}" id="telefonoFijo'" name="telefonoFijo" placeholder="Digite el Telefono Fijo" required/>
   
   </div>
      <div class="row">
    <div class="col-6">
    <label for="celular">Celular:</label>
    <input type="text" class="form-control" value="{{ $usuario->celular }}" id="celular" name="celular" placeholder="Digite el Celular" required/>
   
   </div>
     <div class="col-6">
    <label for="direccion">Direccion:</label>
    <input type="text" class="form-control" value="{{ $usuario->direccion }}" id="direccion" name="direccion" placeholder="Digite la Direccion" required/>
    </div>
      <div class="col-12">
    <label for="nombreUsuario">Usuario:</label>
    <input type="text" class="form-control" value="{{ $usuario->nombreUsuario }}" id="nombreUsuario" name="nombreUsuario" placeholder="Digite el Usuario" required/>
   </div>
</div>
</div>
</br>
<button type="submit" class="btn btn-dark" style="margin: 20px">
<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
</svg> Actualizar</button>
 <a class="btn btn-light" href="{{ url ('usuarios') }}" style="margin: 20px">
 <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
</svg> Cancelar</a>
</form>
</div>
<div class="col-lg-2"></div>
</div>
@endsection