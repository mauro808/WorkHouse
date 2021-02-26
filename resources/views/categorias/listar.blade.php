@extends('layouts.app')
@section('content')

<div class="row w-30" style="padding-left:40px; "> 
    <div class="col-lg-10 p-5 m-2" align="center" >
        <h2 class="text-monospace">Categorías</h2>
    </div>
</div class="">
 <div align="right">
    <a class="btn btn-primary btn-lg active" href="{{ route('agregarCategoria')}}">Agregar Categoria</a>
    </div>
    <table class="table table-striped table-bordered w-80" id="example" align="center">
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
                            <a class="btn btn-warning" href="{{ route('categorias.editar', $categoria) }}">Editar</a>   
                            
                            @csrf
                            @method('DELETE')
                            
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