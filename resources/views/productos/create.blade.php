@extends('layouts.app')
@section('content')
<div class="row"> 
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
    <div class="col-lg-11" align="center">
    </br>
        <h2 class="text-lucida"><strong>Registrar Producto</strong></h2>
    </div>
    <div class="col-lg-11">
       
    </div>
</div>  
<div class="row">
<div class="col-lg-3"></div>
<div class="col-lg-9">
<form action="{{ route('agregarProducto') }}" method="POST" class="w-50 p-3 mr-3 text-center">
@csrf 

<div class="form-group">
    <div class="row">
    <div class="col-6">
    <input type="hidden" name="estado" id="estado" value="Activo">
    <label for="txtidCategoria">Categoría:</label>
    <select name="idCategoria" class="form-control" required>
        <option selected>Seleccione</option>
         @foreach($categorias as $categoria)
         @if($categoria->estado == "Activo")
        <option value="{{$categoria->id}}">{{$categoria->nombreCategoria}}</option>
         @endif 
        @endforeach
      </select>
      </div>
      <div class="col-6">
    <label for="nombreProducto">Nombre:</label>
    <input type="text" class="form-control" id="nombreProducto" name="nombreProducto" placeholder="Digite el Nombre" value="{{old('nombreProducto')}}"/>
    {!! $errors->first('nombreProducto','<small><strong> :message</strong></small></br>') !!}
    </div>
    </div>
    <div class="row">
    <div class="col-6">
    <label for="existencias">Existencias:</label>
    <input type="text" class="form-control" id="existencias" name="existencias" placeholder="Digite las existencias" value="{{old('existencias')}}"/>
    {!! $errors->first('existencias','<small><strong> :message</strong></small></br>') !!}
    </div>
    <div class="col-6">
    <label for="medida">Medida:</label>
    <select name="medida" class="form-control" required>
        <option selected>Seleccione</option>
        <option>Metro</option>
        <option>Unidad</option>
        <option>Galón</option>
        <option>Litro</option>
        <option>Mililitro</option>
        <option>Kilogramo</option>
        <option>Gramo</option>
        <option>Rollo</option>
        <option>Pliego</option>
        <option>Lámina</option>
        <option>Bulto</option>
        <option>Paquete</option>
        <option>Sobre</option>
        
      </select>
    </div>
    </div>
    <div class="row">
    <div class="col-6">
    <label for="porcentajeIva">Iva:</label>
    <input type="text" class="form-control" id="porcentajeIva'" name="porcentajeIva" placeholder="Digite el IVA" value="{{old('porcentajeIva')}}"/>
     {!! $errors->first('porcentajeIva','<small><strong> :message</strong></small></br>') !!}
    </div>
    <div class="col-6">
    <label for="precio">Precio:</label>
    <input type="text" class="form-control" id="precio'" name="precio" placeholder="Digite el Precio" value="{{old('precio')}}"/>
    {!! $errors->first('precio','<small><strong> :message</strong></small></br>') !!}
    </div>
    </div>
</div>
<button type="submit" class="btn btn-dark" style="margin: 10px">
<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
</svg> Registrar</button>
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