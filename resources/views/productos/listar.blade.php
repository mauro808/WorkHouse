@extends('layouts.app')
@section('content')

<div class="row w-50" style="padding-left:60px; "> 
    <div class="col-lg-11 p-5 m-2" align="center" >
        <h2 class="text-monospace">Listado de Productos</h2>
    </div>
</div class="">
    <table class="table table-striped table-bordered w-75" id="example" align="center">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Existencias</th>
            <th>Und Medida</th>
            <th>Precio</th>
            <th>Estado</th>
            <th>Acciones</th>
            
        </tr>
    </thead>
        <tbody>
            @foreach($productos as $producto)
                <tr>
                    <td>{{$producto->id}}</td>
                    <td>{{$producto->nombreProducto}}</td>
                    <td>{{$producto->existencias}}</td>
                     <td>{{$producto->medida}}</td>
                      <td>{{$producto->precio}}</td>
                    <td>{{$producto->estado}}</td>
                    <td>
                        <form action="" method="POST"> 
                            <a class="btn btn-info" href="{{ route('producto.detalle', $producto) }}">Ver</a>
                            <a class="btn btn-warning" href="{{ route('producto.editar', $producto) }}">Editar</a>
                            @csrf 
                        @if ($producto->estado=="Activo")
                            <a class="btn btn-danger" href="{{ route('producto.inhabilitacion', $producto->id) }}">Inhabilitar</a>
                        @endif
                        @if ($producto->estado=="Inactivo")
                            <a type="submit" class="btn btn-danger" href="{{ route('producto.habilitacion', $producto->id) }}">Habilitar</a>
                        @endif
                        @csrf
                        
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div align="center">
        <a class="btn btn-success p-3 " href="{{ route('agregarProducto')}}">Registrar Nuevo Producto</a>
    </div>
    </div>

    </div>



@endsection