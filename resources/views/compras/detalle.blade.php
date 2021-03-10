@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-lg-11" align="center">
    </br>
        <h2 class="text-monospace">Compra N. {{$compra->idCompra}}</h2>
    </div>
        
</div>
<table class="table table-striped table-hover w-50 mx-auto" style="margin-top:50px">
    
    <thead>
        <tr>
            <th><strong>Producto</strong></th>
            <th><strong>Cantidad</strong></th>
            <th><strong>Valor Unitario</strong></th>
            <th><strong>Subtotal</strong></th>
        </tr>
    </thead>
        
    <tbody>
        <tr>
            <td>

        </tr>
            </td>

    </tbody>
    
      
</table>
</br>
<div class="col-lg-11" align="center">
            <a class="btn btn-dark btn-lg active" style="width:200px" href="{{url('compras')}}" style="margin-left: 10px">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-skip-backward-fill" viewBox="0 0 16 16">
  <path d="M.5 3.5A.5.5 0 0 0 0 4v8a.5.5 0 0 0 1 0V8.753l6.267 3.636c.54.313 1.233-.066 1.233-.697v-2.94l6.267 3.636c.54.314 1.233-.065 1.233-.696V4.308c0-.63-.693-1.01-1.233-.696L8.5 7.248v-2.94c0-.63-.692-1.01-1.233-.696L1 7.248V4a.5.5 0 0 0-.5-.5z"/>
</svg>  Atrás</a>

<a class="btn btn-warning btn-lg active" href="#" style="margin-left: 10px">
        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-file-earmark-arrow-down" viewBox="0 0 16 16">
  <path d="M8.5 6.5a.5.5 0 0 0-1 0v3.793L6.354 9.146a.5.5 0 1 0-.708.708l2 2a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0-.708-.708L8.5 10.293V6.5z"/>
  <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"/>
</svg> Descargar PDF</a>

        </div>

    
@endsection