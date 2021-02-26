@extends('layouts.app')
@section('content')

<div class="row">
       <div class="col-lg-11" align="center">
    </br>
        <h2 class="text-monospace">{{$cliente->nombreCliente}}</h2>
    </div>
       
</div>
<table class="table table-striped table-hover w-60 mx-auto" style="margin-top:50px">
    
        <tr>
            <td>Id:</td>
            <td>{{$cliente->id}}</td>
        </tr>
        <tr>
            <td>Creado por:</td>
            <td>{{$cliente->idUsuario}}</td>
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

        <div class="col-lg-11" align="center">
            <a class="btn btn-primary mx-auto" style="width:200px" href="{{url('clientes')}}">Atrás</a>
        </div>
@endsection