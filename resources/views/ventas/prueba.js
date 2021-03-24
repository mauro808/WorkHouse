const { Button } = require("bootstrap");

$(document).ready(function() {
    $("#agregar").click(function() {
        agregar();
    });
});

var cont=0;
total=0;
subtotal=0;

$("#guardar").hide();

function agregar(){
    idProducto = $("#idProducto").val();
    nombreProducto = $("#idProducto option:selected").text();
    cantidad = $("#cantidad").val();
    precio = $("#precio").val();
    if(idProducto != "" && cantidad != "" && cantidad > 0) {
        subtotal[cont] = cantidad * precio;
        total = total + subtotal[cont];
        var fila = "<tr class='selected' id='fila'" + cont + "'><td><button type='button' class='btn btn-danger btn-sm' onclick='eliminar("+ cont + ");><i class='fa fa times'></i></button></td><td><input type='hidden' name='idProducto[]' value='" + idProducto + "'>" + nombreProducto + "</td><td><input type='hidden' name='precio[]' id='precio[]' value='" + precio + "'><input class='form-control' type='number' id='price[]' value='" + precio + "'disabled></td><td><input type='hidden' name='cantidad[]' id='cantidad[]' value='" + cantidad + "'><input class='form-control' type='number' value='" + cantidad + "'disabled></td><td align='right'>/s" + subtotal[cont] + "<td></tr>";
        cont++;
        limpiar();
        totales();
        evaluar();
        $('#detallesVenta').append(fila);
    }else {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Faltan Campos por diligencias.',
          })
    }
}

function limpiar(){
    $('#cantidad').val("");
    $('#precio').val('');
}

function totales(){
    $('#total').html("COL " + total.toFixed(2));
    total_pagar=total;
    $("#total_pagar_html").html("COL " + total_pagar.toFixed(2));
    $("#total_pagar").val(total_pagar.toFixed(2));
}

function evaluar(){
    if(total > 0) {
        $("#guardar").show();
    }else {
        $("#guardar").hide();
    }
}