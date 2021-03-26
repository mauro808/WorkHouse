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
    public function index()
    {
        $ventas = Venta::all();
        $clientes = Cliente::all();
        $usuarios = Usuario::all();
        return view('ventas.index',compact('ventas','clientes','usuarios'));
      
    }


  
  
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
            $results[] = array("idProducto"=>$request->idProducto[$key],"cantidad"=>$request->cantidad[$key], "precio"=>$request->precio[$key]);
        }
        $venta->detalleVenta()->createMany($results);
        return redirect('/ventas')->with('success','Registro Exitoso');
    }

   
    public function show(Venta $venta)
    {
        $subtotal = 0 ;
        $detalleVentas = $venta->detalleVenta;
        foreach ($detalleVentas as $detalleVenta) {
            $subtotal += $detalleVenta->cantidad * $detalleVenta->precio;
        }
        return view('ventas.show', compact('venta', 'detalleVentas', 'subtotal')); 
    }

    public function habilitar(Request $request, $id)
    {
           $venta= Venta::findOrFail($id); //buscar producto por id
           $venta->Estado="Activo";
           $venta->update();
           
           return redirect('/ventas')->with('Mensaje', 'Usuario actualizado');
    }

    public function inhabilitar(Request $request, $id)
    {
           $venta= Venta::findOrFail($id); //buscar producto por id
           $venta->Estado="Inactivo";
           $venta->update();
           
           return redirect('/ventas')->with('Mensaje', 'Usuario actualizado');
    }


    public function pdfVentas()
    {
        $ventas = Venta::all();
        $usuarios = Usuario::all();
        $clientes = Cliente::all();
        $pdf = PDF::loadView('ventas.pdf',compact('ventas','usuarios','clientes'))->setOptions(['defaultFont' => 'sans-serif']);;
        return $pdf->stream('ventas.pdf');
    }

    public function pdfDetalle(Venta $venta)
    {
        $subtotal = 0 ;
        var_dump($venta);
        $detalleVentas = $venta->detalleVenta;
        foreach ($detalleVentas as $detalleVenta) {
            $subtotal += $detalleVenta->cantidad *  $detalleVenta->precio;
        }
        $pdf = PDF::loadView('ventas.pdfDetalle', compact('venta', 'subtotal', 'detalleVentas'))->setOptions(['defaultFont' => 'sans-serif']); 
        return $pdf->stream('Comprobante_Venta'.$venta->id.'.pdf');
    }

    
}
