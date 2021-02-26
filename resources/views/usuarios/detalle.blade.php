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
            <a class="btn btn-primary btn-lg active" style="width:200px" href="{{url('usuarios')}}">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-skip-backward-fill" viewBox="0 0 16 16">
  <path d="M.5 3.5A.5.5 0 0 0 0 4v8a.5.5 0 0 0 1 0V8.753l6.267 3.636c.54.313 1.233-.066 1.233-.697v-2.94l6.267 3.636c.54.314 1.233-.065 1.233-.696V4.308c0-.63-.693-1.01-1.233-.696L8.5 7.248v-2.94c0-.63-.692-1.01-1.233-.696L1 7.248V4a.5.5 0 0 0-.5-.5z"/>
</svg>  Atrás</a>
        </div>
@endsection