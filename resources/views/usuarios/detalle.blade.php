@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-lg-11" align="center">
    </br>
        <h2 class="text-monospace">{{$usuario->nombre}}</h2>
    </div>
        
</div>
<table class="table table-striped table-hover w-60 mx-auto" style="margin-top:50px">
    
        <tr class="">
           <td>Id:</td>
            <td>{{$usuario->id}}</td>
             <td>Rol:</td>
            <td>{{$rol->descripcion}}</td>
        </tr>
       
        <tr>
        <td>Estado:</td>
        <td>{{$usuario->Estado}}</td>
          <td>Usuario:</td>
            <td>{{$usuario->nombreUsuario}}</td>
        </tr>
       
        <tr>
            <td>Tipo Documento:</td>
            <td>{{$usuario->tipoDocumento}}</td>
             <td>Identificacion:</td>
            <td>{{$usuario->identificacion}}</td>
        </tr>
       
        <tr>
            <td>Celular:</td>
            <td>{{$usuario->celular}}</td>
             <td>Teléfono Fijo:</td>
            <td>{{$usuario->telefonoFijo}}</td>
        </tr>
        
        <tr>
            
            <td>Correo Electrónico:</td>
            <td>{{$usuario->correo}}</td>
             <td>Dirección:</td>
            <td>{{$usuario->direccion}}</td>
        </tr>
       
      
</table>
<div class="col-lg-11" align="center">
            <a class="btn btn-primary mx-auto" style="width:200px" href="{{url('usuarios')}}">Atrás</a>
        </div>
@endsection