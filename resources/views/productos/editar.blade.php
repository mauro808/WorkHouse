@extends('layouts.app')
@section('content')

@if (session('mensaje'))
<div class="alert alert-success">{{ session('mensaje') }} </div>
@endif
<div class="row"> 
    <div class="col-lg-11" align="center">
    </br>
        <h2 class="text-monospace">Editar Producto</h2>
    </div>
</div>

<div class="row">
<div class="col-lg-3"></div>
<div class="col-lg-6">
<form action="{{ route('producto.update', $producto->id) }}" method="POST" class="w-60 p-3 mr-3 text-center">
@method('PUT')
@csrf 
<div class="form-group">

<div class="row">
<div class="col-6">
<label for="txtidCategoria">Categoría:</label>
   <select name="idCategoria" class="form-control">
        @foreach($categorias as $categoria)
             @if($producto->idCategoria == $categoria->id)
             <option value="{{$categoria->id}}" selected>{{$categoria->nombreCategoria}}</td>
            @endif 
            @endforeach  
        @foreach($categorias as $categoria)
        <option value="{{$categoria->id}}">{{$categoria->nombreCategoria}}</td>
        @endforeach 
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
        <div class="row">
    <div class="col-6">
    <label for="porcentajeIva">Iva:</label>
    <input type="text" class="form-control" value="{{ $producto->porcentajeIva }}" id="porcentajeIva'" name="porcentajeIva" placeholder="Digite IVA"/>
   </div>
   <div class="col-6">
    <label for="precio">Precio:</label>
    <input type="text" class="form-control" value="{{ $producto->precio }}" id="precio'" name="precio" placeholder="Digite el Precio"/>
      </div>
      </div> 
</br>
<button type="submit" class="btn btn-primary">Actualizar</button>
  <a class="btn btn-warning" href="{{ url ('productos') }}">Cancelar</a>
</form>
</div>
<div class="col-lg-2"></div>
</div>
@endsection