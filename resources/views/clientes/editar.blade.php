@extends('layouts.app')
@section('content')

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<div class="row"> 
    <div class="col-lg-12" align="center">
    </br>
        <h2 class="text-lucida"><strong>Editar Cliente</strong></h2>
    </div>
      
    </div>
  </br>
<div class="row">
<div class="col-lg-4"></div>
<div class="col-lg-12">
<form action="{{ route('cliente.update', $cliente->id) }}" method="POST" class="w-60 p-3 mr-3 text-center">
@method('PUT')
@csrf 


<div class="form-group">
    <div class="col-12">
<label for="txtidUsuario">Usuario que actualiza:</label>
   <select name="idUsuario" class="form-control" required>
        @foreach($usuarios as $usuario)
             @if($cliente->idUsuario == $usuario->id)
             <option value="{{$usuario->id}}" selected>{{$usuario->nombreUsuario}}</td>
            @endif 
            @endforeach  
        @foreach($usuarios as $usuario)
        <option value="{{$usuario->id}}">{{$usuario->nombreUsuario}}</td>
        @endforeach 
        </select>
      </div>
    </br>
    <div class="row">
<div class="col-6">
    <label for="nombreCliente">Nombres y Apellidos:</label>
    <input type="text" class="form-control" id="nombreCliente" name="nombreCliente" value="{{ $cliente->nombreCliente }}" required/>
    </div>
      <div class="col-6">
    <label for="tipoIdentificacion">Tipo Documento:</label>
    <select name="tipoIdentificacion" class="form-control" required>
    <option @if ($cliente->tipoDocumento=="Tarjeta Identidad") selected @endif>Tarjeta Identidad</option>
        <option @if ($cliente->tipoDocumento=="Cédula Ciudadanía") selected @endif>Cédula Ciudadanía</option>
        <option @if ($cliente->tipoDocumento=="Cedula Extranjeria") selected @endif>Cedula Extranjera</option>
        <option @if ($cliente->tipoDocumento=="Permiso Permanencia") selected @endif>Permiso Permanencia</option>
        <option @if ($cliente->tipoDocumento=="Pasaporte") selected @endif>Pasaporte</option>
        <option @if ($cliente->tipoDocumento=="Otro") selected @endif>Otro</option>
      </select>
 </div>
    </div>
  </br>
    <div class="row">
 <div class="col-6">
    <label for="numeroIdentificacion">Identificación:</label>
    <input type="text" class="form-control" id="numeroIdentificacion" name="numeroIdentificacion" value="{{ $cliente->numeroIdentificacion }}" required/>
        </div>
    
        
<div class="col-6">
    <label for="telefonoFijo">Teléfono fijo:</label>
    <input type="text" class="form-control" id="telefonoFijo'" name="telefonoFijo" value="{{ $cliente->telefonoFijo }}" required/>
    </div>
    </div>
  </br>
     <div class="row">
 <div class="col-6">
    <label for="celular">Celular:</label>
    <input type="text" class="form-control" id="celular'" name="celular" value="{{ $cliente->celular }}" required/>
    
         </div>
  
   
 <div class="col-6">
    <label for="direccion">Dirección:</label>
    <input type="text" class="form-control" id="direccion'" name="direccion" value="{{ $cliente->direccion }}" required/>
</div>
  </div>
</br>
   <div class="col-12">
    <label for="correo">Coreo Electrónico:</label>
    <input type="text" class="form-control" id="correo'" name="correo" value="{{ $cliente->correo }}" required/>
</div>
</br>
<button type="submit" class="btn btn-dark btn-lg " style="margin: 20px">
<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
</svg> Actualizar </button>
  <a class="btn btn-light btn-lg " href="{{ url ('clientes') }}" style="margin: 20px">
  <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
</svg> Cancelar</a>
 
</form>
</div>
<div class="col-lg-2"></div>
</div>
@endsection