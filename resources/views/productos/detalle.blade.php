@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-lg-11">
        <h2>Producto</h2>
    </div>
        <div class="col-lg-11">
            <a class="btn btn-primary" href="{{url('productos')}}">Atrás</a>
        </div>
</div>
<table class="table table-bordered">
    
        <tr>
            <td>Id:</td>
            <td>{{$producto->id}}</td>
        </tr>
        <tr>
            <td>Categoría:</td>
            <td>{{$categoria->nombreCategoria}}</td>
        </tr>
        <tr>
            <td>Nombre:</td>
            <td>{{$producto->nombreProducto}}</td>
        </tr>
        <tr>
            <td>Existencias:</td>
            <td>{{$producto->existencias}}</td>
        </tr>
        <tr>
            <td>Unidad de Medida:</td>
            <td>{{$producto->medida}}</td>
        </tr>
        <tr>
            <td>Iva:</td>
            <td>{{$producto->porcentajeIva}}</td>
        </tr>
        <tr>
            <td>Precio Unitario:</td>
            <td>{{$producto->precio	}}</td>
        </tr>
</table>
@endsection