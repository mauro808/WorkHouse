@extends('layouts.app')
@section('content')

<div class="row">
       <div class="col-lg-11" align="center">
    </br>
        <h2 class="text-monospace">{{$cliente->nombreCliente}}</h2>
    </div>
       
</div>
<table class="table table-striped table-hover w-50 mx-auto" style="margin-top:50px">
    
  

 <tr class="">
           <td><strong>Id:</strong></td>
            <td>{{$cliente->id}}</td>
             <td><strong>Creado por:</strong></td>
            <td>{{$cliente->idUsuario}}</td>
        </tr>
       
       
        <tr>
            <td><strong>Tipo Documento:</strong></td>
            <td>{{$cliente->tipoIdentificacion}}</td>
             <td><strong>Identificación:</strong></td>
            <td>{{$cliente->numeroIdentificacion}}</td>
        </tr>
       
        <tr>
            <td><strong>Dirección:</strong></td>
            <td>{{$cliente->direccion}}</td>
             <td><strong>Teléfono Fijo:</strong></td>
            <td>{{$cliente->telefonoFijo}}</td>
        </tr>
        
        <tr>
            
            <td><strong>Celular:</strong></td>
            <td>{{$cliente->celular}}</td>
             <td><strong>Correo Electrónico:</strong></td>
            <td>{{$cliente->correo}}</td>
        </tr>
       

</table>
</br>
    <div class="col-lg-11" align="center">
            <a class="btn btn-dark btn-lg active" style="width:200px" href="{{url('clientes')}}">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-skip-backward-fill" viewBox="0 0 16 16">
  <path d="M.5 3.5A.5.5 0 0 0 0 4v8a.5.5 0 0 0 1 0V8.753l6.267 3.636c.54.313 1.233-.066 1.233-.697v-2.94l6.267 3.636c.54.314 1.233-.065 1.233-.696V4.308c0-.63-.693-1.01-1.233-.696L8.5 7.248v-2.94c0-.63-.692-1.01-1.233-.696L1 7.248V4a.5.5 0 0 0-.5-.5z"/>
</svg>  Atrás</a>
        </div>
@endsection