<?php

namespace App\Http\Controllers;
use App;

use Illuminate\Http\Request;

class PagesController extends Controller
{
   
    public function listarVentas()
    {
        $ventas = App\Venta::all();
        $clientes = App\Cliente::all();
        $usuarios = App\Usuario::all();
        return view('ventas.listar',compact('ventas','clientes','usuarios'));
      
    }

    public function detalleVenta($idVenta){
        $venta = App\Venta::findOrFail($idVenta);
        $cliente = App\Cliente::find($venta->idCliente);
        $usuario = App\Usuario::find($venta->idUsuario);
        return view('ventas.detalle', compact('venta','cliente','usuario'));
    }

}
