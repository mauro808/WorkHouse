@extends('layouts.app')
@section('content')
<div class="row"> 
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
    <div class="col-lg-11" align="center">
        <h2>Editar Cliente</h2>
    </div>
    <div class="col-lg-11">
        <a class="btn btn-success" href="{{ url ('clientes') }}">Atrás</a>
    </div>
</div>  
<div class="row">
<div class="col-lg-4"></div>
<div class="col-lg-6">
<form action="{{ route('cliente.update', $cliente->id) }}" method="POST" class="w-50 p-3 mr-3 text-center">
@method('PUT')
@csrf 

@error('nombreCliente')
    <div class="alert alert-danger">
        El nombre es obligatorio
    </div>
@enderror
<div class="form-group">
    <label for="idUsuario">Id User create:</label>
    <input type="text" class="form-control" id="idUsuario" name="idUsuario" value="{{ $cliente->idUsuario }}"/>
    </br>
    <label for="nombreCliente">Nombre:</label>
    <input type="text" class="form-control" id="nombreCliente" name="nombreCliente" value="{{ $cliente->nombreCliente }}"/>
    <label for="tipoIdentificacion">Tipo Documento:</label>
    <select name="tipoIdentificacion" class="form-control">
    <option @if ($cliente->tipoDocumento=="TI") selected @endif>TI</option>
        <option @if ($cliente->tipoDocumento=="CC") selected @endif>CC</option>
        <option @if ($cliente->tipoDocumento=="Pasaporte") selected @endif>Pasaporte</option>
        <option @if ($cliente->tipoDocumento=="Cedula Extranjeria") selected @endif>Cedula Extranjeria</option>
        <option @if ($cliente->tipoDocumento=="Otro") selected @endif>Otro</option>
      </select>
    </br>
    <label for="numeroIdentificacion">Identificacion:</label>
    <input type="text" class="form-control" id="numeroIdentificacion" name="numeroIdentificacion" value="{{ $cliente->numeroIdentificacion }}"/>
    <label for="telefonoFijo">Telefono fijo:</label>
    <input type="text" class="form-control" id="telefonoFijo'" name="telefonoFijo" value="{{ $cliente->telefonoFijo }}"/>
    <label for="celular">Celular:</label>
    <input type="text" class="form-control" id="celular'" name="celular" value="{{ $cliente->celular }}"/>
    <label for="direccion">Direccion:</label>
    <input type="text" class="form-control" id="direccion'" name="direccion" value="{{ $cliente->direccion }}"/>
</div>
<button type="submit" class="btn btn-primary">Actualizar Cliente</button>
</form>
</div>
<div class="col-lg-2"></div>
</div>
@endsection