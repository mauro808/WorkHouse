@extends('layouts.app')
@section('content')

<div class="card">
    <div class="card-body" style="background-color:#E5E8E8;">
<div class="row w-30" style="padding-left:60px; "> 

    <div class="col-lg-10 p-2 m-2" align="left" >
    
   
       <h1 class="text-lucida"><strong>Compras</strong></h1>
  
    </div>
</div class="">

   <div align="right">
        <a class="btn btn-dark btn-lg active"   href="{{ route('compras.create') }}">
        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-bag-plus-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zM8.5 8a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V12a.5.5 0 0 0 1 0v-1.5H10a.5.5 0 0 0 0-1H8.5V8z"/>
</svg><strong> Agregar Compra</strong></a>


    </div>
  
    <table class="table table-striped table-bordered w-80" id="example" align="center">
    <thead>
        <tr>
            <th>Id</th>
            <th>Usuario</th>
            <th>Fecha Compra</th>
            <th>Valor Total</th>
            <th>Estado</th>
            <th>Acciones</th>
            
        </tr>
    </thead>
        <tbody>
            @foreach($compras as $compra)
                <tr>
                    <td>{{$compra->id}}</td>
                    @foreach($usuarios as $usuario)
                    @if($compra->idUsuario == $usuario->id)
                    <td>{{$usuario->nombreUsuario}}</td>
                    @endif 
                    @endforeach 
                    <td>{{$compra->created_at}}</td>
                    <td>{{$compra->precioTotal}}</td>  
                    <td>{{$compra->estado}}</td>  
                     <td>
                        <form action="" method="POST">
                            <a class="btn btn-dark" href="{{ route('compras.show', $compra) }}" style="margin-left: 10px">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
  <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
  <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
</svg> </a>

@csrf 
@if ($compra->estado=="Activo")
<a class="btn btn-danger" id="anular"  href="{{route('change.status.compras', $compra->id)}}"style="margin-left: 10px; -moz-border-radius:18px; -webkit-border-radius:18px;">
    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
      </svg> 
Anular</a>
@endif
@if ($compra->estado=="Inactivo")
<a type="submit" id="anulada" onclick="anulada()" class="btn btn-warning" href="{{route('change.status.compras', $compra)}}" style="margin-left: 10px; -moz-border-radius:18px; -webkit-border-radius:18px;">
    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
      </svg>  Anulada </a>
@endif



                        @csrf
                            
                        </form>
                    </td>    
                  
                </tr>
            @endforeach
        </tbody>
    </table>

 

   <div align="right">
        <a href="{{ route('PdfCompras') }}" target="_blank" class="btn btn-lg active btn-dark">
        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-file-earmark-arrow-down" viewBox="0 0 16 16">
  <path d="M8.5 6.5a.5.5 0 0 0-1 0v3.793L6.354 9.146a.5.5 0 1 0-.708.708l2 2a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0-.708-.708L8.5 10.293V6.5z"/>
  <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"/>
</svg> Descargar PDF</a>

</div>
</div>  
    </div>

    </div>

    </div>

</div>
</div>

</div>

<script>

$(document).ready(function() {
    $("#compraAnulada").click(function() {
        anulada_C();
    });
});

function anulada(){

   
        Swal.fire({
            icon: 'error',
            title: 'Compra Anulada',
            text: 'No es posible reactivar una compra anulada',
            showConfirmButton: false, 
            confirmButtonColor: '#1C2833',
            timer: 15000
          })
}


 $(document).ready(function () {
    $('.btn-danger').on('click',function(e){
        e.preventDefault(); 

        Swal.fire({
            title: 'Anular Compra ',
            text: "No se podrá deshacer el cambio!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#1C2833',
            confirmButtonText: 'Anular',
            cancelButtonText: 'Cancelar' 
        }).then((result) => {
        if (result.value) {
            window.location = $(this).attr('href'); 
           
           Swal.fire({
            title:'Compra Anulada!',
            text:'Acción irreversible',
            icon:'success',
            showConfirmButton: false,
            timer: 1500,
            })
            
        }
        })
    });
});



</script>

@endsection