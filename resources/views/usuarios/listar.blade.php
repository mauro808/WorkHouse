@extends('layouts.app')
@section('content')

<div class="row w-50" style="padding-left:60px; "> 
    <div class="col-lg-11 p-5 m-2" align="center" >
        <h2 class="text-monospace">Listado de Usuarios</h2>
    </div>
</div class="">
    <table class="table table-striped table-bordered w-75" id="example" align="center">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombres</th>
            <th>Rol</th>
            <th>Estado</th>
            <th>Acciones</th>
            
        </tr>
    </thead>
        <tbody>
            @foreach($usuarios as $usuario)
                <tr>
                    <td>{{$usuario->id}}</td>
                    <td>{{$usuario->nombre}}</td>
                    <td>{{$usuario->idRol}}</td>
                    <td>{{$usuario->Estado}}</td>
                    <td>
                        <form action="" method="POST"> 
                            <a class="btn btn-info" href="{{ route('usuario.detalle', $usuario) }}">Ver</a>
                            <a class="btn btn-warning" href="{{ route('usuario.editar', $usuario) }}">Editar</a>
                            @csrf 
                        @if ($usuario->Estado=="Activo")
                            <a class="btn btn-danger" href="{{ route('usuario.inhabilitacion', $usuario->id) }}">Inhabilitar</a>
                        @endif
                        @if ($usuario->Estado=="Inactivo")
                            <a type="submit" class="btn btn-danger" href="{{ route('usuario.habilitacion', $usuario->id) }}">Habilitar</a>
                        @endif
                        @csrf
                        
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div align="center">
        <a class="btn btn-success p-3 " href="{{ route('agregarUsuario')}}">Registrar Nuevo usuario</a>
    </div>
    </div>

    </div>



@endsection