@extends('layouts.app')
@section('content')

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<div class="row"> 
    <div class="col-lg-11" align="center">
    </br>
        <h2 class="text-monospace">Editar Cliente</h2>
    </div>
      
    </div>
  
<div class="row">
<div class="col-lg-3"></div>
<div class="col-lg-6">
<form action="{{ route('cliente.update', $cliente->id) }}" method="POST" class="w-60 p-3 mr-3 text-center">
@method('PUT')
@csrf 

@error('nombreCliente')
    <div class="alert alert-danger">
        El nombre es obligatorio
    </div>
@enderror
<div class="form-group">
    <label for="idUsuario"></label>
    <input type="hidden" class="form-control" id="idUsuario" name="idUsuario" value="{{ $cliente->idUsuario }}"/>
    </br>
    <div class="row">
<div class="col-6">
    <label for="nombreCliente">Nombre:</label>
    <input type="text" class="form-control" id="nombreCliente" name="nombreCliente" value="{{ $cliente->nombreCliente }}"/>
    </div>
      <div class="col-6">
    <label for="tipoIdentificacion">Tipo Documento:</label>
    <select name="tipoIdentificacion" class="form-control">
    <option @if ($cliente->tipoDocumento=="TI") selected @endif>TI</option>
        <option @if ($cliente->tipoDocumento=="CC") selected @endif>CC</option>
        <option @if ($cliente->tipoDocumento=="Pasaporte") selected @endif>Pasaporte</option>
        <option @if ($cliente->tipoDocumento=="Cedula Extranjeria") selected @endif>Cedula Extranjeria</option>
        <option @if ($cliente->tipoDocumento=="Otro") selected @endif>Otro</option>
      </select>
 </div>
    </div>
    <div class="row">
 <div class="col-6">
    <label for="numeroIdentificacion">Identificacion:</label>
    <input type="text" class="form-control" id="numeroIdentificacion" name="numeroIdentificacion" value="{{ $cliente->numeroIdentificacion }}"/>
        </div>
    
        
<div class="col-6">
    <label for="telefonoFijo">Telefono fijo:</label>
    <input type="text" class="form-control" id="telefonoFijo'" name="telefonoFijo" value="{{ $cliente->telefonoFijo }}"/>
    </div>
    </div>
     <div class="row">
 <div class="col-6">
    <label for="celular">Celular:</label>
    <input type="text" class="form-control" id="celular'" name="celular" value="{{ $cliente->celular }}"/>
    
         </div>
  
   
 <div class="col-6">
    <label for="direccion">Direccion:</label>
    <input type="text" class="form-control" id="direccion'" name="direccion" value="{{ $cliente->direccion }}"/>
</div>
  </div>
</br>
<button type="submit" class="btn btn-primary" style="margin: 20px">
<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
</svg> Actualizar </button>
  <a class="btn btn-warning" href="{{ url ('clientes') }}" style="margin: 20px">
  <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
</svg> Cancelar</a>
 
</form>
</div>
<div class="col-lg-2"></div>
</div>
@endsection