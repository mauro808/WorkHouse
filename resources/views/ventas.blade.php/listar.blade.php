@extends('layouts.app')
@section('content')

<div class="row w-50" style="padding-left:60px; "> 
    <div class="col-lg-11 p-5 m-2" align="center" >
        <h2 class="text-monospace">Listado de Ventas</h2>
    </div>
</div class="">
    <table class="table table-striped table-bordered w-75" id="example" align="center">
    <thead>
        <tr>
            <th>Id</th>
            <th>Cliente</th>
            <th>Fecha Venta</th>
            <th>Vendedor</th>
            <th>Acciones</th>
            
        </tr>
    </thead>
        <tbody>
            @foreach($ventas as $venta)
                <tr>
                    <td>{{$venta->id}}</td>
                    
                    @foreach($clientes as $cliente)
                    @if($cliente->idCliente == $cliente->id)
                    <td>{{$cliente->nombreCliente}}</td>
                        @endif 
                        @endforeach 
                     @foreach($usuarios as $usuario)
                    @if($usuario->idUsuario == $usuario->id)
                    <td>{{$usuario->nombre}}</td>
                        @endif 
                        @endforeach 
                    <td>
                        <form action="" method="POST">
                            <a class="btn btn-info" href="{{ route('venta.detalle', $venta) }}">Ver</a>
                           
                            @csrf 
                       
                        @csrf
                        
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div align="center">
        <a class="btn btn-success p-3 " href="{{ route('agregarVenta')}}">Registrar Nueva Venta</a>
    </div>
    </div>

    </div>



@endsection