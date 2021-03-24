@extends('layouts.app')
@section('content')
    <div class="row">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="col-lg-12" align="center">

            </br>
            </br>
            <h2 class="text-lucida"><strong>Registrar Compra</strong></h2>
            </br>
            <div class="row">
                <div class="col-lg-4"></div>
                <div class="col-lg-12">
                    <form action="{{ route('compras.store') }}" method="POST" class="w-60 p-3 mr-3 text-center">
                        @csrf
                        <div class="form-group">

                            <div class="row">
                                <div class="col-12">
                                    
                                    <label for="idUsuario">Usuario que registra:</label>
                                    <select class="form-control" name="idUsuario" id="idUsuario" />
                                   
                                    @foreach ($usuarios as $usuario)
                                        <option value="{{ $usuario->id }}">{{ $usuario->nombreUsuario }}</option>
                                    @endforeach
                                    </select>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <label for="idProducto">Producto:</label>
                                    <select class="form-control" name="idProducto" id="idProducto" />
                                 
                                    @foreach ($productos as $producto)
                                        <option value="{{ $producto->id }}">{{ $producto->nombreProducto }}</option>
                                    @endforeach
                                    </select>
                                </div>
                                <div class="col-4">
                                    <label for="cantidad">Cantidad:</label>
                                    <input type="number" min="1" pattern="^[0-9]+" class="form-control" name="cantidad" id="cantidad" 
                                        placeholder="Ingrese Cantidad de Producto" />
                                </div>
                                
                                    <div class="col-4">
                                        <label for="precio">Valor Unidad:</label>
                                        <input type="number" min="1" pattern="^[0-9]+" class="form-control" name="precio" id="precio" 
                                            placeholder="Ingrese Precio de Compra del Producto" />
                                    </div>
                            </div>
                           
                               
                            </div>
                            </br>
                            <div class="form-group">
                                <button type="button"  id="agregar" class="btn btn-outline-dark btn-lg float-right">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                        <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                                        <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                                      </svg> Agregar Producto</button>
                            </div>
                        </div>
       
                        <div class="col-lg-12" align="center">
                            <div class="form-group">
                            </br>
                        </br>
                
                                <h2 class="text-lucida"><strong>Detalles Compra</strong></h2>
                                </br>
                                <div class="table-responsive col-md-12">
                                    <table id="detalles" class="table table-stripped">
                                        <thead>
                                            <tr>
                                                <th><strong>Acciones</strong></th>
                                                <th><strong>Producto</strong></th>
                                                <th><strong>Precio</strong></th>
                                                <th><strong>Cantidad</strong></th>
                                                <th><strong>Subtotal</strong></th>
                                            </tr>
                                        </thead>
                                
                                        <tbody>

                                        </tbody>

                                        <tfoot>
                                         
                                            <th colspan="4">
                                                <p align="right">TOTAL COMPRA:</p>
                                            </th>
                                            <th>
                                                <p align="right"><span align="right" id="total_pagar_html">$ 0.00</span> <input type="hidden"
                                                        name="total" id="total_pagar"></p>
                                            </th>
                                        </tr>
                                        </tfoot>
                                        
                                    </table>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            </br>
            <div class="col-lg-12" align="center">
                <button type="submit" id="guardar" class="btn btn-dark btn-lg" 
                    style="margin: 20px">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                        class="bi bi-check-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                        <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                    </svg> Registrar</button>
                <a class="btn btn-light btn-lg" href="{{route('compras.index')}}" style="margin: 20px">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                        class="bi bi-x-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                    </svg> Cancelar</a>
                </form>
            </div>
       
      
        
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

            <script>
                $(document).ready(function() {
                    $("#agregar").click(function() {
                        agregar();
                    });
                });

                var cont = 0;
                total = 0;
                subtotal = [];


                $("#guardar").hide();

                function agregar() {

                    idProducto = $("#idProducto").val();
                    nombreProducto  = $("#idProducto option:selected").text();
                    cantidad = $("#cantidad").val();
                    precio = $("#precio").val();
                   
                    

                    if (idProducto != "" && cantidad != "" && cantidad > 0 && precio != "") {
                        subtotal[cont] = cantidad * precio;
                        total = total + subtotal[cont];

                        

                        var fila = '<tr class="selected" id="fila' + cont +
                            '"><td><button type="button" class="btn btn-danger btn-sm" onclick="eliminar(' + cont +
                            ');"><i class="bi bi-trash"><strong> Eliminar</strong></i></button></td><td><input type="hidden" name="idProducto[]" value="' +
                            idProducto + '">' + nombreProducto  +
                            '</td><td><input type="hidden" id="precio[]" name="precio[]" value="' +
                                precio + '"><input class="form-control" type="number" id="precio[]" value="' +
                                precio + '" disabled></td><td><input type="hidden" name="cantidad[]" id="cantidad[]" value="' +
                                cantidad + '"><input class="form-control" type="number" value="' + cantidad +
                            '" disabled></td><td align="right">$/' + subtotal[cont] + '</td></tr>';


                        cont++;
                     
                        limpiar();
                        totales();
                        evaluar();
                        $('#detalles').append(fila);
                    } else {
                        Swal.fire({
                            type: 'error',
                            icon: 'error',
                            text: 'Rellene todos los campos del detalle de la compra',
                            confirmButtonColor: '#1C2833',
                        })
                    }
                }

                function limpiar() {
                    $("#cantidad").val("");
                    $("#precio").val("");
                }

                function totales() {
                    $("#total").html("$ " + total.toFixed(2));
                    total_pagar = total;
                    $("#total_pagar_html").html("$ " + total_pagar.toFixed(2));
                    $("#total_pagar").val(total_pagar.toFixed(2));
                   
                }

                function evaluar() {
                    if (total > 0) {
                        $("#guardar").show();
                    } else {
                        $("#guardar").hide();
                    }
                }

                function eliminar(index) {
                    total = total - subtotal[index];
                    total_pagar_html = total;
                    $("#total").html("$" + total);
                    $("#total_pagar_html").html("$" + total_pagar_html);
                     $("#total_pagar").val(total_pagar_html.toFixed(2));
                    $("#fila" + index).remove();
                    evaluar();
                }

            </script>
      
            @endsection