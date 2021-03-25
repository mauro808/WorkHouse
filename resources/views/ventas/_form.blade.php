</br>
</br>
<div class="row">
<div class="col-6">
<label for="idCliente">Cliente:</label>
<select name="idCliente" class="form-control" required >
        <option selected>Seleccione</option>
         @foreach($clientes as $cliente)
        <option value="{{$cliente->id}}">{{$cliente->nombreCliente}}</option>
        @endforeach
</select>
</div>
<div class="col-6">
<label for="idUsuario">Usuario:</label>
<select name="idUsuario" class="form-control" required >
        <option selected>Seleccione</option>
         @foreach($usuarios as $usuario)
        <option value="{{$usuario->id}}">{{$usuario->nombre}}</option>
        @endforeach
</select>
</div>
</div>
</br>
<div class="row">
<div class="col-6">
<label for="idProducto">Producto:</label>
<select name="idProducto" id="idProducto" class="form-control" required>
        <option selected>Seleccione</option>
         @foreach($productos as $producto)
        <option value="{{$producto->id}}">{{$producto->nombreProducto}}</option>
        @endforeach
</select>
</div>
<div class="col-6">
    <label for="cantidad">Cantidad:</label>
    
    <input type="number" class="form-control" id="cantidad" name="cantidad" placeholder="Digite la cantidad" min="1" pattern="^[0-9]+"/>
</div>
</div>
</br>
<div class="row">
<div class="col-12">
    <label for="valorProducto">Precio:</label>
    <input type="number" class="form-control" id="valorProducto" name="valorProducto" min="1" pattern="^[0-9]+"/>
    <input type="hidden" class="form-control" id="Estado" name="Estado" value="Activo"/>
</div>
</div>
</br>
<div class="form-group">
<button type="button" id="agregar" class="btn btn-outline-dark btn-lg float-right">
    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
        <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
        <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
      </svg> Agregar Producto</button>
</div>
<div class="form-group" style="margin-top:150px">

    <h3 class="card-title"><strong>Detalle de Venta</strong></h3>
<div class="table-responsive col-md-12">
    <table id="detallesVenta" class="table table-striped">
    <thead>
        <tr>
            <th>Eliminar</th>
            <th>Producto</th>
            <th>Precio</th>
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
                <p align="right"><span id="total">$/ </span></p>
            </th>
        </tr>
        <tr>
            <th colspan="4">
                <p align="right">Total a pagar</p>
            </th>
            <th colspan="4">
                <p align="right"><span id="total_pagar_html" name="total_pagar_html">$/ </span>
                <input readonly name="precioTotal" id="precioTotal" name="precioTotal"></p>
            </th>
        </tr>
    </tfoot>
    <tbody>
    </tbody>
    </table>
</div>

</div>