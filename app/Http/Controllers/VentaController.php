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
        //
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
