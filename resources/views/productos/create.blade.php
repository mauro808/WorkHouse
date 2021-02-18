@extends('layouts.app')
@section('content')
<div class="row"> 
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
    <div class="col-lg-11" align="center">
        <h2>Registrar Nuevo Producto</h2>
    </div>
    <div class="col-lg-11">
        <a class="btn btn-success" href="{{ url ('productos') }}">Atrás</a>
    </div>
</div>  
<div class="row">
<div class="col-lg-4"></div>
<div class="col-lg-6">
<form action="{{ route('agregarProducto') }}" method="POST" class="w-50 p-3 mr-3 text-center">
@csrf 

@error('nombreProducto')
    <div class="alert alert-danger">
        El nombre es obligatorio
    </div>
@enderror
<div class="form-group">
    <div class="row">
    <div class="col-6">
    <input type="hidden" name="estado" id="estado" value="Activo">
    <label for="txtidCategoria">Categoría:</label>
    <select name="idCategoria" class="form-control">
        <option selected>Choose...</option>
         @foreach($categorias as $categoria)
        <option value="{{$categoria->id}}">{{$categoria->nombreCategoria}}</option>
        @endforeach
      </select>
      </div>
      <div class="col-6">
    <label for="nombreProducto">Nombre:</label>
    <input type="text" class="form-control" id="nombreProducto" name="nombreProducto" placeholder="Digite el Nombre"/>
    </div>
    </div>
    <div class="row">
    <div class="col-6">
    <label for="existencias">Existencias:</label>
    <input type="text" class="form-control" id="existencias" name="existencias" placeholder="Digite las existencias"/>
      </div>
    <div class="col-6">
    <label for="medida">Medida:</label>
    <input type="text" class="form-control" id="medida" name="medida" placeholder="Digite la medida"/>
    </div>
    </div>
    <label for="porcentajeIva">Iva:</label>
    <input type="text" class="form-control" id="porcentajeIva'" name="porcentajeIva" placeholder="Digite el IVA"/>
    <label for="precio">Precio:</label>
    <input type="text" class="form-control" id="precio'" name="precio" placeholder="Digite el Precio"/>
   
</div>
<button type="submit" class="btn btn-primary">Registrar</button>
</form>
</div>
<div class="col-lg-2"></div>
</div>
@endsection