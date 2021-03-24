@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-lg-11">
        <h2>Venta</h2>
    </div>
        <div class="col-lg-11">
            <a class="btn btn-primary" href="{{url('ventas')}}">Atrás</a>
        </div>
</div>
<table class="table table-bordered">
    
        <tr>
           <td>Id:</td>
            <td>{{$venta->id}}</td>
        </tr>
        <tr>
            <td>Cliente:</td>
            <td>{{$cliente->nombreCliente}}</td>
        </tr>
        <tr>
        <td>Fecha Venta:</td>
        <td>{{$venta->fechaVenta}}</td>
        </tr>
     
        <tr>
            <td>Usuario:</td>
            <td>{{$usuario->nombreUsuario}}</td>
        </tr>
</table> 
@endsection