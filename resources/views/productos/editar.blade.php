@extends('layouts.app')
@section('content')

@if (session('mensaje'))
<div class="alert alert-success">{{ session('mensaje') }} </div>
@endif
<div class="row"> 
    <div class="col-lg-11" align="center">
        <h2>Editar Producto</h2>
    </div>
    <div class="col-lg-11">
        <a class="btn btn-success" href="{{ url ('productos') }}">Atrás</a>
    </div>
</div>  
<div class="row">
<div class="col-lg-4"></div>
<div class="col-lg-6">
<form action="{{ route('producto.update', $producto->id) }}" method="POST" class="w-50 p-3 mr-3 text-center">
@method('PUT')
@csrf 
<div class="form-group">
<div class="row">
<div class="col-6">
<label for="txtidCategoria">Categoría:</label>
    <select name="idCategoria" class="form-control">
        <option value="2" @if ($producto->idCategoria==2) selected @endif>Herramientas Electricas</option>
        <option value="1" @if ($producto->idCategoria==1) selected @endif>Herramientas de Mano</option>
        
      </select>
      </div>
      <div class="col-6">
    <label for="nombre">Nombre:</label>
    <input type="text" class="form-control" value="{{ $producto->nombreProducto }}" id="nombreProducto" name="nombreProducto" placeholder="Digite el Nombre"/>
    </div>
    </div>
    <div class="row">
    <div class="col-6">
    <label for="existencias">Existencias:</label>
    <input type="text" class="form-control" value="{{ $producto->existencias }}" id="existencias" name="existencias" placeholder="Digite existencias"/>
      </div>
    <div class="col-6">
    <label for="medida">Medida:</label>
    <input type="text" class="form-control" value="{{ $producto->medida }}" id="medida" name="medida" placeholder="Digite Unidad de Medida"/>
    </div>
    </div>
    <label for="porcentajeIva">Iva:</label>
    <input type="text" class="form-control" value="{{ $producto->porcentajeIva }}" id="porcentajeIva'" name="porcentajeIva" placeholder="Digite IVA"/>
    <label for="precio">Precio:</label>
    <input type="text" class="form-control" value="{{ $producto->precio }}" id="precio'" name="precio" placeholder="Digite el Precio"/>
    
</div>
<button type="submit" class="btn btn-primary">Actualizar Producto</button>
</form>
</div>
<div class="col-lg-2"></div>
</div>
@endsection