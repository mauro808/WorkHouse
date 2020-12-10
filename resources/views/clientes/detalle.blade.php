@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-lg-11">
        <h2>Cliente</h2>
    </div>
        <div class="col-lg-11">
            <a class="btn btn-primary" href="{{url('clientes')}}">Atrás</a>
        </div>
</div>
<table class="table table-bordered">
    
        <tr>
            <td>Id:</td>
            <td>{{$cliente->id}}</td>
        </tr>
        <tr>
            <td>Id User Create:</td>
            <td>{{$cliente->idUsuario}}</td>
        </tr>
        <tr>
            <td>Nombres:</td>
            <td>{{$cliente->nombreCliente}}</td>
        </tr>
        <tr>
            <td>Tipo Documento:</td>
            <td>{{$cliente->tipoIdentificacion}}</td>
        </tr>
        <tr>
            <td>Identificacion:</td>
            <td>{{$cliente->numeroIdentificacion}}</td>
        </tr>
        <tr>
            <td>Direccion:</td>
            <td>{{$cliente->direccion}}</td>
        </tr>
        <tr>
            <td>Teléfono Fijo:</td>
            <td>{{$cliente->telefonoFijo}}</td>
        </tr>
        <tr>
            <td>Celular:</td>
            <td>{{$cliente->celular}}</td>
        </tr>
        <tr>
</table>
@endsection