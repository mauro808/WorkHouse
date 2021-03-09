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
   <select name="idCategoria" class="form-control" required>
   
        @foreach($categorias as $categoria)
             @if($producto->idCategoria == $categoria->id)
             <option value="{{$categoria->id}}" selected>{{$categoria->nombreCategoria}}</td>
            @endif 
            @endforeach  
        @foreach($categorias as $categoria)
        @if($categoria->estado == "Activo")
        <option value="{{$categoria->id}}">{{$categoria->nombreCategoria}}</td>
         @endif 
        @endforeach 
        </select>
      </div>
      
   <div class="col-6">
    <label for="nombre">Nombre:</label>
    <input type="text" class="form-control" value="{{ $producto->nombreProducto }}" id="nombreProducto" name="nombreProducto" placeholder="Digite el Nombre" required/>
    </div>
   </div>
    <div class="row">
    <div class="col-6">
    <label for="existencias">Existencias:</label>
    <input type="text" class="form-control" value="{{ $producto->existencias }}" id="existencias" name="existencias" placeholder="Digite existencias"/>
      </div>
    <div class="col-6">
     <label for="medida">Und Medida:</label>
    <select name="medida" class="form-control" required>
        <option @if ($producto->medida=="Metro") selected @endif>Metro</option>
        <option @if ($producto->medida=="Unidad") selected @endif>Unidad</option>
        <option @if ($producto->medida=="Galón") selected @endif>Galón</option>
        <option @if ($producto->medida=="Litro") selected @endif>Litro</option>
        <option @if ($producto->medida=="Mililitro") selected @endif>Mililitro</option>
        <option @if ($producto->medida=="Kilogramo") selected @endif>Kilogramo</option>
        <option @if ($producto->medida=="Gramo") selected @endif>Gramo</option>
        <option @if ($producto->medida=="Rollo") selected @endif>Rollo</option>
        <option @if ($producto->medida=="Pliego") selected @endif>Pliego</option>
        <option @if ($producto->medida=="Lámina") selected @endif>Lámina</option>
        <option @if ($producto->medida=="Bulto") selected @endif>Bulto</option>
        <option @if ($producto->medida=="Paquete") selected @endif>Paquete</option>
        <option @if ($producto->medida=="Sobre") selected @endif>Sobre</option>
      </select>
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
<button type="submit" class="btn btn-dark" style="margin: 20px">
<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
</svg> Actualizar</button>
  <a class="btn btn-light" href="{{ url ('productos') }}" style="margin: 20px">
  <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
</svg> Cancelar</a>
</form>
</div>
<div class="col-lg-2"></div>
</div>
@endsection