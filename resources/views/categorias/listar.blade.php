@extends('layouts.app')
@section('content')

<div class="row w-50" style="padding-left:60px; "> 
    <div class="col-lg-11 p-5 m-2" align="center" >
        <h2 class="text-monospace">Listado de Categorias</h2>
    </div>
</div class="">
    <table class="table table-striped table-bordered w-75" id="example" align="center">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre categoria</th>
            <th>Acciones</th>
        </tr>
    </thead>
        <tbody>
            @foreach($categorias as $categoria)
                <tr>
                    <td>{{$categoria->id}}</td>
                    <td>{{$categoria->nombreCategoria}}</td>
                    <td>
                        <form action="" method="POST"> 
                            <a class="btn btn-info" href="{{ route('categorias.detalle', $categoria) }}">Ver</a>
                            <a class="btn btn-warning" href="">Editar</a>   
                            
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div align="center">
    <a class="btn btn-success p-3 " href="{{ route('agregarCategoria')}}">Registrar Nueva categoria</a>
    </div>
    </div>

    </div>


























@endsection