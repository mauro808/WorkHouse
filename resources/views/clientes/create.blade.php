@extends('layouts.app')
@section('content')
<div class="row"> 
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
    <div class="col-lg-11" align="center">
        <h2 class="text-monospace">Registrar Nuevo Cliente</h2>
    </div>
    <div class="col-lg-11">
       
    </div>
</div>  
<div class="row">
<div class="col-lg-4"></div>
<div class="col-lg-6">
<form action="{{ route('agregarCliente') }}" method="POST" class="w-50 p-3 mr-3 text-center">
@csrf 

@error('nombreUsuario')
    <div class="alert alert-danger">
        El nombre es obligatorio
    </div>
@enderror
<div class="form-group">
    <label for="idUsuario">Id User create:</label>
    <input type="text" class="form-control" id="idUsuario" name="idUsuario" placeholder="Usuario Creador"/>
    </br>
    <label for="nombreCliente">Nombre:</label>
    <input type="text" class="form-control" id="nombreCliente" name="nombreCliente" placeholder="Digite el Nombre"/>
    <label for="tipoIdentificacion">Tipo Documento:</label>
    <select name="tipoIdentificacion" class="form-control">
        <option selected>Escoge...</option>
        <option>TI</option>
        <option>CC</option>
        <option>Pasaporte</option>
        <option>Cedula Extranjeria</option>
        <option>Otro</option>
      </select>
    </br>
    <label for="numeroIdentificacion">Identificacion:</label>
    <input type="text" class="form-control" id="numeroIdentificacion" name="numeroIdentificacion" placeholder="Digite el Documento"/>
    <label for="telefonoFijo">Telefono fijo:</label>
    <input type="text" class="form-control" id="telefonoFijo'" name="telefonoFijo" placeholder="Digite el Telefono Fijo"/>
    <label for="celular">Celular:</label>
    <input type="text" class="form-control" id="celular'" name="celular" placeholder="Digite el Celular"/>
    <label for="direccion">Direccion:</label>
    <input type="text" class="form-control" id="direccion'" name="direccion" placeholder="Digite la Direccion"/>
</div>
<button type="submit" class="btn btn-primary">Registrar</button>
 <a class="btn btn-warning" href="{{ url ('clientes') }}">Cancelar</a>
</form>
</div>
<div class="col-lg-2"></div>
</div>
@endsection