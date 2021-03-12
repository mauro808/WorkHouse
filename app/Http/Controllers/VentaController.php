<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clientes=DB::table('clientes')->get();
        $productos=DB::table('productos')
        ->select(DB::raw('CONCAT(productos.id," ",productos.nombreProducto) AS producto'), 'productos.id')
        ->where('productos.estado', '=', 'Activo')->get();
        return view('ventas.create',['clientes'=>$clientes,'productos'=>$productos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
