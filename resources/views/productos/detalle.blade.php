@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-lg-11" align="center">
          <h2 class="text-monospace">{{$producto->nombreProducto}}</h2>
    </div>
     
</div>
<table class="table table-striped table-hover w-60 mx-auto" style="margin-top:50px">
    
        <tr>
            <td>Id:</td>
            <td>{{$producto->id}}</td>
        </tr>
        <tr>
            <td>Categoría:</td>
            <td>{{$categoria->nombreCategoria}}</td>
        </tr>
      
        <tr>
            <td>Existencias:</td>
            <td>{{$producto->existencias}}</td>
        </tr>
        <tr>
            <td>Unidad de Medida:</td>
            <td>{{$producto->medida}}</td>
        </tr>
        <tr>
            <td>Iva:</td>
            <td>{{$producto->porcentajeIva}}</td>
        </tr>
        <tr>
            <td>Precio Unitario:</td>
            <td>{{$producto->precio	}}</td>
        </tr>
</table>
 <div class="col-lg-11" align="center">
            <a class="btn btn-primary mx-auto" style="width:200px" href="{{url('productos')}}">Atrás</a>
        </div>
@endsection