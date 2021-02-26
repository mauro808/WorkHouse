@extends('layouts.app')
@section('content')

<div class="row w-30" style="padding-left:40px; "> 
    <div class="col-lg-10 p-5 m-2" align="center" >
        <h2 class="text-monospace">Usuarios</h2>
    </div>

</div class="">
     <div align="right">
        <a class="btn btn-primary btn-lg active" href="{{ route('agregarUsuario')}}">Agregar Usuario</a>
    </div>
    <table class="table table-striped table-bordered w-80" id="example" align="center">
  
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
                    @foreach($rols as $rol)
                    @if($usuario->idRol == $rol->id)
                    <td>{{$rol->descripcion}}</td>
                        @endif 
                        @endforeach 
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
                            <a type="submit" class="btn btn-success" href="{{ route('usuario.habilitacion', $usuario->id) }}">Habilitar</a>
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