@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-lg-11">
        <h2>Usuario</h2>
    </div>
        <div class="col-lg-11">
            <a class="btn btn-primary" href="{{url('usuarios')}}">Atrás</a>
        </div>
</div>
<table class="table table-bordered">
    
        <tr>
           <td>Id:</td>
            <td>{{$usuario->id}}</td>
        </tr>
        <tr>
            <td>Rol:</td>
            <td>{{$rol->descripcion}}</td>
        </tr>
        <tr>
        <td>Estado:</td>
        <td>{{$usuario->Estado}}</td>
        </tr>
        <tr>
            <td>Nombres:</td>
            <td>{{$usuario->nombre}}</td>
        </tr>
        <tr>
            <td>Tipo Documento:</td>
            <td>{{$usuario->tipoDocumento}}</td>
        </tr>
        <tr>
            <td>Identificacion:</td>
            <td>{{$usuario->identificacion}}</td>
        </tr>
        <tr>
            <td>Correo Electrónico:</td>
            <td>{{$usuario->correo}}</td>
        </tr>
        <tr>
            <td>Teléfono Fijo:</td>
            <td>{{$usuario->telefonoFijo}}</td>
        </tr>
        <tr>
            <td>Celular:</td>
            <td>{{$usuario->celular}}</td>
        </tr>
        <tr>
            <td>Dirección:</td>
            <td>{{$usuario->direccion}}</td>
        </tr>
        <tr>
            <td>Usuario:</td>
            <td>{{$usuario->nombreUsuario}}</td>
        </tr>
</table>
@endsection