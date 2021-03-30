</br>
</br>
<div class="row">
<div class="col-4">
<label for="idCliente"><strong>Cliente:</strong></label>
<select name="idCliente" class="form-control" required >
        <option selected value="">Seleccione el Cliente</option>
         @foreach($clientes as $cliente)
        <option value="{{$cliente->id}}">{{$cliente->nombreCliente}}</option>
        @endforeach
</select>
</div>
<div class="col-4">
<label for="idUsuario"><strong>Usuario:</strong></label>
<select name="idUsuario" class="form-control"  >
        <option selected value="">Seleccione</option>
         @foreach($usuarios as $usuario)
        <option value="{{$usuario->id}}">{{$usuario->nombre}}</option>
        @endforeach
</select>
</div>
<div class="col-4">
<label for="idProducto"><strong>Producto:</strong></label>
<select name="idProducto" id="idProducto" class="form-control" required>
        <option selected value="">Seleccione</option>
         @foreach($productos as $producto)
         <option value="{{$producto->id}}_{{$producto->existencias}}_{{$producto->valorProducto}}">{{$producto->nombreProducto}}</option>    
        @endforeach
</select>
</div>
<div class="col-4">
    <label for="cantidad"><strong>Cantidad:</strong></label>
    
    <input type="number" class="form-control" id="cantidad" name="cantidad" placeholder="Digite la cantidad" min="1" pattern="^[0-9]+" />
</div>

<div class="col-4" >
    <label for="existencias"><strong>Stock Actual:</strong></label>
    <input type="number" disabled id="existencias" name="existencias" class="form-control" readonly/>
   
</div>
<div class="col-4">
    <label for="valorProducto">Precio:</label>
    <input type="number" class="form-control" readonly id="valorProducto" name="valorProducto"  min="1" pattern="^[0-9]+" />
    <input type="hidden" class="form-control" id="Estado" name="Estado" value="Activo"/>


<div class="col-4">
    <h4 class="card-title" align="right"><strong>Venta Actual</strong></h4>
</div>
<div class="table-responsive col-md-12">
    <table id="detallesVenta" class="table table-striped">
    <thead>
        <tr>
            <th>Eliminar</th>
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

