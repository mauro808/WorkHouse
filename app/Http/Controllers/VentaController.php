<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Usuario;
use App\Cliente;
use App\Venta;
use App\Producto;
use App\Http\Requests\venta\StoreRequest;
use Barryvdh\DomPDF\Facade as PDF;

class VentaController extends Controller
{
   
  public function create()
    {
        $productos = Producto::where('estado', 'Activo')->get();
        $clientes = Cliente::get();
        $usuarios = Usuario::get();
        return view('ventas.create', compact('productos','clientes','usuarios'));
    }

   
    public function store(Request $request)
    {
        $venta = Venta::create($request->all());
        
        foreach ($request->idProducto as $key => $idProducto) {
            var_dump($request->idProducto, $request->precio);
            $results[] = array("idProducto"=>$request->idProducto[$key],"cantidad"=>$request->cantidad[$key], "precio"=>$request->precio[$key]);
        }
        $venta->detalleVenta()->createMany($results);
        return redirect('/ventas')->with('success','Registro Exitoso');
    }

   
    public function show(Venta $venta)
    {
        return view('ventas.detalle', compact('venta'));
    }

    public function pdfVentas()
    {
        $ventas = Venta::all();
        $usuarios = Usuario::all();
        $clientes = Cliente::all();
        $pdf = PDF::loadView('ventas.pdf',compact('ventas','usuarios','clientes'))->setOptions(['defaultFont' => 'sans-serif']);;
        return $pdf->stream('ventas.pdf');
    }
}
