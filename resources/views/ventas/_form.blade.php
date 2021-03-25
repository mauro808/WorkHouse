<div class="col-12 mt-5">
<label for="idCliente">Cliente:</label>
<select name="idCliente" class="form-control" required >
        <option selected>Seleccione</option>
         @foreach($clientes as $cliente)
        <option value="{{$cliente->id}}">{{$cliente->nombreCliente}}</option>
        @endforeach
</select>
</div>
<div class="col-12 mt-5">
<label for="idUsuario">Usuario:</label>
<select name="idUsuario" class="form-control" required >
        <option value="0" selected>Seleccione</option>
         @foreach($usuarios as $usuario)
        <option value="{{$usuario->id}}">{{$usuario->nombre}}</option>
        @endforeach
</select>
</div>
<div class="row mt-5">
<div class="col-6" >
<label for="idProducto">Producto:</label>
<select name="idProducto" id="idProducto" class="form-control" required>
        <option selected>Seleccione</option>
         @foreach($productos as $producto)
        <option value="{{$producto->id}}">{{$producto->nombreProducto}}</option>
        @endforeach
</select>
</div>
<div class="col-3 " >
    <label for="cantidad">Cantidad:</label>
    
    <input type="number" class="form-control" id="cantidad" name="cantidad" placeholder="Digite la cantidad"/>
</div>
<div class="col-3 " >
    <label for="valorProducto">Precio:</label>
    <input type="number" class="form-control" id="valorProducto" name="valorProducto"/>
    <input type="hidden" class="form-control" id="Estado" name="Estado" value="Activo"/>
</div>
</div>
<div class="form-group">
<button type="button" id="agregar" class="btn btn-dark float-right mt-5 mb-5">
<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
  <path d="M8 15A7 1 1 7 0 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
</svg> Agregar Producto</button>
</div>
<div class="form-group" style="margin-top:150px">

<h4 class="card-title">Detalle de venta</h4>
<div class="table-responsive col-md-12">
    <table id="detallesVenta" class="table table-striped">
    <thead>
        <tr>
            <th>Eliminar</th>
            <th>Producto</th>
            <th>Precio(COL$)</th>
            <th>Cantidad</th>
            <th>Subtotal</th>     
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th colspan="4">
                <p align="right">Total</p>
            </th>
            <th colspan="4">
                <p align="right"><span id="total">Col:0$</span></p>
            </th>
        </tr>
        <tr>
            <th colspan="4">
                <p align="right">Total a pagar</p>
            </th>
            <th colspan="4">
                <p align="right"><span id="total_pagar_html" name="total_pagar_html">Col:0$</span>
                <input type="number" name="precioTotal" id="precioTotal" name="precioTotal"></p>
            </th>
        </tr>
    </tfoot>
    <tbody>
    </tbody>
    </table>
</div>

</div>