@extends('layouts.app')
@section('content')
<div class="row"> 
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
    
</div>  
<div class="row w-100" align="center">
<div class="col-lg-12">
        <h2 class="text-lucida"><strong>Registrar Venta</strong></h2>
</div>
<div class="w-75 mx-auto">

    
    @if ($errors->any())
    @foreach ($errors->all as $error) 
    <p>{{ $error }}</p>
    @endforeach
@endif

{!! Form::open(['route'=>'agregarVenta', 'method'=>'POST']) !!}
    @include('ventas._form')

</div>
<div class="card-footer text-muted col-12" align="center" id="ventaRegistrada">
<button type="submit" class="btn btn-dark btn-lg" style="margin: 10px">
<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
  <path d="M8 15A7 1 1 7 0 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
</svg> Registrar</button>
{!! Form::close() !!}
<a class="btn btn-light btn-lg" href="{{ url ('ventas') }}" style="margin: 20px">
 <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
</svg> Cancelar</a>
</div>

@endsection
@section('scripts')
<script>
$(document).ready(function() {
    $("#agregar").click(function() {
        agregar();
    });
});

var cont=0;
total=0;
subtotal=[];

$("#guardar").hide();

function agregar(){
    idProducto = $("#idProducto").val();
    nombreProducto = $("#idProducto option:selected").text();
    cantidad = $("#cantidad").val();
    precio = $("#valorProducto").val();

    if(idProducto != "" && cantidad != "" && cantidad > 0) {
        subtotal[cont] = cantidad * precio;
        total = total + subtotal[cont];
        var fila = "<tr class='selected' id='fila" + cont + "'><td><button type='button' class='btn btn-danger btn-sm' onclick='eliminar("+ cont + ")';><i class='bi bi-trash'><strong></strong></i></button></td><td><input type='hidden' name='idProducto[]' value='" + idProducto + "'>" + nombreProducto + "</td><td><input type='hidden' name='precio[]' id='precio[]' value='" + precio + "'><input class='form-control' type='number' id='precio[]' value='" + precio + "'disabled></td><td><input type='hidden' name='cantidad[]' id='cantidad[]' value='" + cantidad + "'><input class='form-control' type='number' value='" + cantidad + "'disabled></td><td align='right'>$/ " + subtotal[cont] + "<td></tr>";
        cont++;
        console.log(cantidad, precio, subtotal[cont], total);
        limpiar();
        totales();
        evaluar();
        $('#detallesVenta').append(fila);
    }else {
        Swal.fire({
            type: 'error',
            icon: 'error',
            text: 'Rellene todos los campos del detalle de la venta',
            confirmButtonColor: '#1C2833',
          })
    }
}

function limpiar(){
    $('#cantidad').val("");
    $('#valorProducto').val('');
}

function totales(){
    $('#total').html("$/ " + total.toFixed(2));
    precioTotal=total;
    $("#total_pagar_html").html("$/ " + precioTotal.toFixed(2));
    $("#precioTotal").val(precioTotal.toFixed(2));
}

function evaluar(){
    if(total > 0) {
        $("#guardar").show();
    }else {
        $("#guardar").hide();
    }
}

function eliminar(index){
    total = total - subtotal[index];
    total_pagar_html = total;
    $("#total").html("$/ " + total);
    $("#total_pagar_html").html("$/ " + total_pagar_html);
    $("#total_pagar").val(total_pagar_html.toFixed(2));
    $("#precioTotal").val(total_pagar_html.toFixed(2));
    $("#fila" + index).remove();
    evaluar();
}
    
</script>



<script>
    $(document).ready(function() {
        $("#ventaRegistrada").click(function() {
            ventaRegistrada();
        });
    });
    
    
    function ventaRegistrada(){
        
        precioTotal = $("#precioTotal").val();
    
        if(precioTotal != ""  && precioTotal > 0) {
            Swal.fire({
                position: 'top-center',
                icon: 'success',
                title: 'Registro exitoso',
                showConfirmButton: false, 
                confirmButtonColor: '#1C2833',
               
              })
        }else {
            Swal.fire({
                type: 'error',
                icon: 'error',
                text: 'Compra no registrada',
                confirmButtonColor: '#1C2833',
              })
        }
    }
    
    
    </script>
    
@endsection