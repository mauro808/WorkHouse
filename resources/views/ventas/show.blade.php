@extends('layouts.app')
@section('content')

<div class="content-wrapper">
    <div class="page-header">
   
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card" style="background-color:#E5E8E8;">
                <div class="card-body" >
                   
                    <div class="form-group row">
                       
                        <div class="col-md-4 text-center">
                            <h4 class="form-control-label" for="num_compra"><strong>Venta N° {{$venta->id}}</strong></h4>
                       
                        </div>
                        <div align="right">
                        <a href="{{route('PdfDetalleV', $venta) }}" target="_blank" class="btn btn-sm active btn-dark" >
                            <i class="bi bi-printer"></i> PDF</a>     
                        </div>
                    </div>
                    <br /><br />
                    <div class="form-group row ">
                        <h4 class="card-title ml-3"><strong></strong></h4>
                        <div class="table-responsive col-md-12">
                            <table id="detalles" class="table">
                                <thead>
                                    <tr>
                                        <th>Producto</th>
                                        <th>Precio</th>
                                        <th>Cantidad</th>
                                        <th>SubTotal</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th colspan="3">
                                            <p align="right" style="display:none;">SUBTOTAL:</p>
                                        </th>
                                        <th>
                                            <p align="right" style="display:none;">$/{{number_format($subtotal,2)}}</p>
                                        </th>
                                    </tr>
                                    
                                        <th colspan="3">
                                            <p align="right">TOTAL:</p>
                                        </th>
                                        <th>
                                            <p align="right">$/{{number_format($venta->precioTotal,2)}}</p>
                                        </th>
                                    </tr>
                    
                                </tfoot>
                                <tbody>
                                    @foreach($detalleVentas as $detalleVenta)
                                    <tr>
                                        @foreach ($productos as $producto)
                                       @if($detalleVenta->idProducto == $producto->id)
                                       <td>{{$producto->nombreProducto}}</td>
                                       @endif
                                       @endforeach
                                        <td>s/{{$detalleVenta->precio}}</td>
                                        <td>{{$detalleVenta->cantidad}}</td>
                                        <td>s/{{number_format($detalleVenta->cantidad*$detalleVenta->precio,2)}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                    <div class="col-md-4 text-center">
                        <p class="form-control-label" for="idUsuario"><strong>Elaborado por Usuario:  
                            @foreach ($usuarios as $usuario)
                            @if($venta->idUsuario == $usuario->id)
                            {{$usuario->nombre}}
                            @endif
                            @endforeach
                            </strong></p>
                        <p class="form-control-label" for="created_at"><strong>Fecha:  {{$venta->created_at}} </strong></p>
                        <p class="form-control-label" for="Estado"><strong>Estado:  {{$venta->Estado}} </strong></p>
                    
                    </div>

                </div>
                <div class="card-footer text-muted">
                    <a href="{{route('ventas.index')}}" class="btn btn-dark float-right btn-lg"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-skip-backward-fill" viewBox="0 0 16 16">
                        <path d="M.5 3.5A.5.5 0 0 0 0 4v8a.5.5 0 0 0 1 0V8.753l6.267 3.636c.54.313 1.233-.066 1.233-.697v-2.94l6.267 3.636c.54.314 1.233-.065 1.233-.696V4.308c0-.63-.693-1.01-1.233-.696L8.5 7.248v-2.94c0-.63-.692-1.01-1.233-.696L1 7.248V4a.5.5 0 0 0-.5-.5z"/>
                      </svg> Regresar</a>
                
                </div>
            </div>
        </div>
    </div>

</div>
@endsection