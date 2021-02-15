@extends('layouts.app')
@section('content')

<div class="row w-50" style="padding-left:60px; "> 
    <div class="col-lg-11 p-5 m-2" align="center" >
        <h2 class="text-monospace">Listado de Clientes</h2>
    </div>
</div class="">
    <table class="table table-striped table-bordered w-75" id="example" align="center">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombres</th>
            <th>Identificacion:</th>
            <th>Celular</th>
            <th>Acciones</th>
            
        </tr>
    </thead>
        <tbody>
            @foreach($clientes as $cliente)
                <tr>
                    <td>{{$cliente->id}}</td>
                    <td>{{$cliente->nombreCliente}}</td>
                    <td>{{$cliente->numeroIdentificacion}}</td>
                    <td>{{$cliente->celular}}</td>
                    <td>
                        <form action="{{ route('cliente.destroy', $cliente->id) }}" method="POST"> 
                            <a class="btn btn-info" href="{{ route('cliente.detalle', $cliente) }}">Ver</a>
                            <a class="btn btn-warning" href="{{ route('cliente.editar', $cliente) }}">Editar</a>   
                            
                            @csrf
                            @method('DELETE')
      
                           
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div align="center">
    <a class="btn btn-success p-3 " href="{{ route('agregarCliente')}}">Registrar Nuevo cliente</a>
    </div>
    </div>

    </div>



@endsection