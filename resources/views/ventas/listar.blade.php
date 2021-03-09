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
            <th>Valor venta</th>
            <th>Vendedor</th>
            <th>Acciones</th>
            
        </tr>
    </thead>
        <tbody>
            @foreach($ventas as $venta)
                <tr>
                    <td>{{$venta->id}}</td>
                    @foreach($clientes as $cliente)
                    @if($venta->idCliente == $cliente->id)
                    <td>{{$cliente->nombreCliente}}</td>
                    @endif 
                    @endforeach 
                    <td>{{$venta->fechaVenta}}</td>
                    <td>{{$venta->precioTotal}}</td>
                     @foreach($usuarios as $usuario)
                    @if($venta->idUsuario == $usuario->id)
                    <td>{{$usuario->nombre}}</td>
                        @endif 
                        @endforeach 
                        <td>
                        <form action="" method="POST">
                            <a class="btn btn-dark" href="" style="margin-left: 10px">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
  <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
  <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
</svg> Ver</a>
                            <a class="btn btn-dark" href=""style="margin-left: 10px">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg> Editar</a>
                            @csrf 
                        @if ($venta->Estado=="Activo")
                            <a class="btn btn-danger" href=""style="margin-left: 10px">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-toggle-off" viewBox="0 0 16 16">
  <path d="M11 4a4 4 0 0 1 0 8H8a4.992 4.992 0 0 0 2-4 4.992 4.992 0 0 0-2-4h3zm-6 8a4 4 0 1 1 0-8 4 4 0 0 1 0 8zM0 8a5 5 0 0 0 5 5h6a5 5 0 0 0 0-10H5a5 5 0 0 0-5 5z"/>
</svg> 
Inhabilitar</a>
                        @endif
                        @if ($venta->Estado=="Inactivo")
                            <a type="submit" class="btn btn-success" href=""style="margin-left: 10px">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-toggle-on" viewBox="0 0 16 16">
  <path d="M5 3a5 5 0 0 0 0 10h6a5 5 0 0 0 0-10H5zm6 9a4 4 0 1 1 0-8 4 4 0 0 1 0 8z"/>
</svg> Habilitar</a>
                        @endif
                        @csrf
                            
                        </form>
                               
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div align="center">
        <a class="btn btn-dark btn-lg active"   href="">
        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-bag-plus-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zM8.5 8a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V12a.5.5 0 0 0 1 0v-1.5H10a.5.5 0 0 0 0-1H8.5V8z"/>
</svg> Agregar Venta</a>
    </div>
    </div>

    </div>



@endsection