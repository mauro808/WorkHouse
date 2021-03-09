@extends('layouts.app')
@section('content')
<div class="row"> 
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
    <div class="col-lg-11" align="center">
        <h2>Registrar Nueva Venta</h2>
    </div>
    <div class="col-lg-11">
        <a class="btn btn-success" href="{{ url ('ventas') }}">Atrás</a>
    </div>
</div>  
<div class="row">
<div class="col-lg-4"></div>
<div class="col-lg-6">
<form action="{{ route('agregarVenta') }}" method="POST" class="w-50 p-3 mr-3 text-center">
@csrf 

@error('')
    <div class="alert alert-danger">
        xxx es obligatorio
    </div>
@enderror
<div class="form-group">
    <div class="row">
    <div class="col-6">
   
    <label for="txtidCliente">Cliente:</label>
    <select name="idCliente" class="form-control">
        <option selected>Choose...</option>
         @foreach($clientes as $cliente)
        <option value="{{$cliente->id}}">{{$cliente->nombreCliente}}</option>
        @endforeach
      </select>
      </div>
      <div class="col-6">
    <label for="txtidUsuario">Cliente:</label>
    <select name="idUsuario" class="form-control">
        <option selected>Choose...</option>
         @foreach($usuarios as $usuario)
        <option value="{{$usuario->id}}">{{$usuario->nombre}}</option>
        @endforeach
      </select>
    </div>
    </div>
    <div class="row">
    <div class="col-6">
    <label for="fechaVenta">Fecha Venta:</label>
    <input type="date" class="form-control" id="fechaVenta" name="fechaVenta" />
      </div>
    
    </div>
   
   
</div>
<button type="submit" class="btn btn-primary">Registrar</button>
</form>
</div>
<div class="col-lg-2"></div>
</div>
@endsection