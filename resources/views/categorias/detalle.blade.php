@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-lg-11">
        <h2>Categoria</h2>
    </div>
        
</div>
<table class="table table-bordered">
    
        <tr>
            <td>Id:</td>
            <td>{{$categoria->id}}</td>
        </tr>
        <tr>
            <td>Nombre de categoria:</td>
            <td>{{$categoria->nombreCategoria}}</td>
        </tr>
        <tr>
            <td>Descripcion:</td>
            <td>{{$categoria->Descripcion}}</td>
        </tr>
        <tr>
</table>
<div class="col-lg-11">
            <a class="btn btn-primary" href="{{url('categorias')}}">Atrás</a>
        </div>
@endsection