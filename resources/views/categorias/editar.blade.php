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
        <h2 class="text-monospace">Editar Categoría</h2>
    </div>
    <div class="col-lg-11">
       
    </div>
</div>  
<div class="row">
<div class="col-lg-4"></div>
<div class="col-lg-6">
<form action="{{ route('categoria.update', $categoria->id) }}" method="POST" class="w-50 p-3 mr-3 text-center">
@method('PUT')
@csrf 

@error('nombreCategoria')
    <div class="alert alert-danger">
        El nombre es obligatorio
    </div>
@enderror
<div class="form-group">
    
    <label for="nombreCategoria">Nombre:</label>
    <input type="text" class="form-control" id="nombreCategoria" name="nombreCategoria" value="{{ $categoria->nombreCategoria }}"/>
    </br>
    <label for="Descripcion">Descripcion:</label>
    <input type="text" class="form-control" id="Descripcion" name="Descripcion" value="{{ $categoria->Descripcion }}"/>
   
</div>
</br>
<button type="submit" class="btn btn-primary">Actualizar</button>
 <a class="btn btn-warning" href="{{ url ('categorias') }}">Cancelar</a>
</form>
</div>
<div class="col-lg-2"></div>
</div>
@endsection