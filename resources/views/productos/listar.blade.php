@extends('layouts.app')
@section('content')

<div class="row w-30" style="padding-left:40px; "> 
    <div class="col-lg-10 p-5 m-2" align="center" >
        <h2 class="text-monospace">Productos</h2>
    </div>
</div class="">
    <div align="right">
        <a class="btn btn-primary btn-lg active" href="{{ route('agregarProducto')}}">Agregar Producto</a>
    </div>
    <table class="table table-striped table-bordered w-80" id="example" align="center">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Categoría</th>
            <th>Existencias</th>
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
                     @foreach($categorias as $categoria)
                    @if($producto->idCategoria == $categoria->id)
                    <td>{{$categoria->nombreCategoria}}</td>
                        @endif 
                        @endforeach 
                   
                    <td>{{$producto->existencias}}</td>
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
                            <a type="submit" class="btn btn-success" href="{{ route('producto.habilitacion', $producto->id) }}">Habilitar</a>
                        @endif
                        @csrf
                        
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
  <div align="center">
        <a class="btn btn-primary btn-lg active" href="#">Descargar PDF</a>
    </div>
    </div>

    </div>



@endsection