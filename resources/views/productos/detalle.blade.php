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
            <td>{{$producto->idProducto}}</td>
        </tr>
        <tr>
            <td>Id Rol:</td>
            <td>{{$producto->idCategoria}}</td>
        </tr>
        <tr>
            <td>Nombres:</td>
            <td>{{$producto->nombreProducto}}</td>
        </tr>
        <tr>
            <td>Tipo Documento:</td>
            <td>{{$producto->existencias}}</td>
        </tr>
        <tr>
            <td>Identificacion:</td>
            <td>{{$producto->medida}}</td>
        </tr>
        <tr>
            <td>Correo Electrónico:</td>
            <td>{{$producto->porcentajeIva}}</td>
        </tr>
        <tr>
            <td>Teléfono Fijo:</td>
            <td>{{$producto->precio	}}</td>
        </tr>
</table>
@endsection