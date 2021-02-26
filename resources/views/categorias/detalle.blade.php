@extends('layouts.app')
@section('content')

<<div class="row">
    <div class="col-lg-11" align="center">
          <h2 class="text-monospace">{{$categoria->nombreCategoria}}</h2>
    </div>
        
</div>
<table class="table table-striped table-hover w-60 mx-auto" style="margin-top:50px">
    
        <tr>
            <td>Id:</td>
            <td>{{$categoria->id}}</td>
        </tr>
    
        <tr>
            <td>Descripción:</td>
            <td>{{$categoria->Descripcion}}</td>
        </tr>
        <tr>
</table>
<div class="col-lg-11" align="center">
            <a class="btn btn-primary mx-auto" style="width:200px" href="{{url('categorias')}}">Atrás</a>
        </div>
@endsection