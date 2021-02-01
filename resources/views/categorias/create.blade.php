@extends('layouts.app')
@section('content')
<div class="row"> 
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
    <div class="col-lg-11" align="center">
        <h2>Registrar Nueva Categoria</h2>
    </div>
    <div class="col-lg-11">
        <a class="btn btn-success" href="{{ url ('categorias') }}">Atrás</a>
    </div>
</div>  
<div class="row">
<div class="col-lg-4"></div>
<div class="col-lg-6">
<form action="{{ route('agregarCategoria') }}" method="POST" class="w-50 p-3 mr-3 text-center">
@csrf 
<div class="form-group">
    <label for="idUsuario">Nombre Categoria:</label>
    <input type="text" class="form-control" id="nombreCategoria" name="nombreCategoria" placeholder="nombre de la categoria"/>
    </br>
    <label for="nombreCliente">Descripcion Categoria:</label>
    <textarea class="form-control" id="Descripcion" name="Descripcion" rows="5" placeholder="Descripcion categoria"></textarea>
</div>
<button type="submit" class="btn btn-primary">Registrar</button>
</form>
</div>
<div class="col-lg-2"></div>
</div>
@endsection