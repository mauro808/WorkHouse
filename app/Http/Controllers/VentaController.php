<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Usuario;
use App\Cliente;
use App\Venta;
use App\Producto;
use App\Http\Requests\venta\StoreRequest;

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

    public function edit(Venta $venta)
    {
        $clientes = Cliente::get();
        return view('ventas.editar', compact('venta'));
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
