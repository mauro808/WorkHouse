@extends('layouts.app')
@section('content')
<div class="row w-30" style="padding-left:60px; "> 
    <div class="col-lg-10 p-5 m-2" align="left" >
        <h2 class="text-lucida"><strong>Productos</strong></h2>
    </div>
</div class="">
    <div align="right">
        <a class="btn btn-dark btn-lg active"   href="{{ route('agregarProducto')}}">
        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-bag-plus-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zM8.5 8a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V12a.5.5 0 0 0 1 0v-1.5H10a.5.5 0 0 0 0-1H8.5V8z"/>
</svg> <strong>Agregar Producto</strong></a>
    </div>
    <table class="table table-striped table-bordered w-80   " id="example" align="center">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Categoría</th>
            <th>Stock</th>
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
                            <a class="btn btn-dark" href="{{ route('producto.detalle', $producto) }}"style="margin-left: 10px">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
  <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
  <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
</svg> </a>
                            <a class="btn btn-light" href="{{ route('producto.editar', $producto) }}"style="margin-left: 10px">
                             <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg> </a>
                            @csrf 
                        @if ($producto->estado=="Activo")
                            <a class="btn btn-danger" href="{{ route('producto.inhabilitacion', $producto->id) }}"style="margin-left: 10px; -moz-border-radius:18px; -webkit-border-radius:18px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-toggle-off" viewBox="0 0 16 16">
  <path d="M11 4a4 4 0 0 1 0 8H8a4.992 4.992 0 0 0 2-4 4.992 4.992 0 0 0-2-4h3zm-6 8a4 4 0 1 1 0-8 4 4 0 0 1 0 8zM0 8a5 5 0 0 0 5 5h6a5 5 0 0 0 0-10H5a5 5 0 0 0-5 5z"/>
</svg>  Inactivar</a>
                        @endif
                        @if ($producto->estado=="Inactivo")
                            <a type="submit" class="btn btn-success" href="{{ route('producto.habilitacion', $producto->id) }}"style="margin-left: 10px; -moz-border-radius:18px; -webkit-border-radius:18px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-toggle-on" viewBox="0 0 16 16">
  <path d="M5 3a5 5 0 0 0 0 10h6a5 5 0 0 0 0-10H5zm6 9a4 4 0 1 1 0-8 4 4 0 0 1 0 8z"/>
</svg> Activar</a>
                        @endif
                        @csrf
                        @endforeach
                        
                        </form>
                    </td>
                </tr>
        </tbody>
    </table>
  <div align="right">
       <a href="#" >
        <a href="{{ route('PdfProductos') }}" target="_blank" class="btn btn-lg active btn-dark">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-file-earmark-arrow-down" viewBox="0 0 16 16">
      <path d="M8.5 6.5a.5.5 0 0 0-1 0v3.793L6.354 9.146a.5.5 0 1 0-.708.708l2 2a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0-.708-.708L8.5 10.293V6.5z"/>
      <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"/>
    </svg> Descargar PDF</a>
     
        </div>
    </div>
</div>
</div>
@endsection