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
<button type="submit" class="btn btn-primary">Actualizar </button>
  <a class="btn btn-warning" href="{{ url ('clientes') }}">Cancelar</a>
 
</form>
</div>
<div class="col-lg-2"></div>
</div>
@endsection