<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


class VentaController extends Controller
{
   
  /*  public function create()
    {
        $clientes=DB::table('clientes')->get();
        $productos=DB::table('productos')
        ->select(DB::raw('CONCAT(productos.id," ",productos.nombreProducto) AS producto'), 'productos.id')
        ->where('productos.estado', '=', 'Activo')->get();
        return view('ventas.create',['clientes'=>$clientes,'productos'=>$productos]);
    } */

   
    public function store(Request $request)
    {
        try{
            DB::beginTransaction();

            $mytime = Carbon::now("America/Bogota");
            $venta = new Venta();
            $venta->idCliente = $request->idCliente;
            $venta->idUsuario = \Auth::user()->id;
            $venta->fechaVenta = $mytime->toDateString();
            $venta->precioTotal = $request->precioTotal;
            $venta->Estado = 'Registrada';
            $venta->save();

            $idProducto=$request->idProducto;
            $cantidad=$request->cantidad;
            $valorProducto=$request->valorProducto;

            $cont=0;
            while($cont < count($idProducto)){
                $detalle = new DetalleVenta();
                $detalle->idVenta = $venta->id;
                $detalle->idProducto = $idProducto[$cont];
                $detalle->cantidad = $cantidad[$cont];
                $detalle->valorProducto= $valorProducto[$cont];
                $detalle->save();
                $cont=$contr+1;
            }
        };
    }

   
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

   
    public function destroy($id)
    {
        //
    }
}
