@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-lg-11" align="center">
        <h2 class="display-1 text-primary">Usuario</h2>
    </div>
        
</div>
<table class="table table-striped table-hover w-50" style="margin-top:50px; margin-left:370px" align="center">
    
        <tr class="">
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
<div class="col-lg-11" align="center">
            <a class="btn btn-primary" style="margin-left:65px; width:200px" href="{{url('usuarios')}}">Atrás</a>
        </div>
@endsection