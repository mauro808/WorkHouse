<?php

namespace App\Http\Controllers;

use App\Compra;
use App\Usuario;
use App\Producto;
use App\DetalleCompra;
use Illuminate\Http\Request;
use App\Http\Requests\Compras\StoreRequest;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade as PDF;
use Carbon\Carbon;

class CompraController extends Controller
{

   /* public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('can:compras.create')->only(['create','store']);
        $this->middleware('can:compras.index')->only(['index']);
        $this->middleware('can:compras.show')->only(['show']);
        $this->middleware('can:change.status.compras')->only(['change_status']);
        $this->middleware('can:compras.pdf')->only(['pdf']);
    } */
  

    public function index()
    {
        $compras = Compra::all();
        $usuarios = Usuario::all();
        return view('compras.index',compact('compras','usuarios'));
      
    }


    public function show(Compra $compra)
<<<<<<< HEAD
    {   
         $detalleCompras = DetalleCompra::where('compra_id' , $compra->id);
         $productos=Producto::all();
         var_dump($detalleCompras, $compra->id);
        return view('compras.show', compact('detalleCompras', 'productos'));
=======
    {
        
        $subtotal = 0 ;
        $detalleCompras = $compra->detalleCompra;
        foreach ($detalleCompras as $detalleCompra) {
            $subtotal += $detalleCompra->cantidad * $detalleCompra->precio;
        }
        return view('compras.show', compact('compra', 'detalleCompras', 'subtotal')); 
>>>>>>> ca94032d2d88316786f5f7c1ffed743a0694bb6d
    }

    public function create()
    {
        $compras = Compra::where('estado', 'Activo')->get();
        $usuarios = Usuario::get();
        $productos = Producto::get();
        return view('compras.create', compact('productos','usuarios'));
    }

   
    public function store(Request $request)
    {
        $compra = Compra::create($request->all());
        
        foreach ($request->idProducto as $key => $idProducto) {
           
            $results[] = array("idProducto"=>$request->idProducto[$key],"cantidad"=>$request->cantidad[$key], "precio"=>$request->precio[$key]);
        }
        $compra->detalleCompra()->createMany($results);
        return redirect()->route('compras.index');
    }


    public function pdfCompras()
    {
       $compras = Compra::all();
       $usuarios = Usuario::all();
        $pdf = PDF::loadView('compras.pdf',compact('compras','usuarios'))->setOptions(['defaultFont' => 'sans-serif']);;
        return $pdf->stream('compras.pdf');
    }

    public function pdfDetalle(Compra $compra)
    {
        $subtotal = 0 ;
        $detalleCompras = $compra->detalleCompra;
        foreach ($detalleCompras as $detalleCompra) {
            $subtotal += $detalleCompra->cantidad *  $detalleCompra->precio;
        }
        $pdf = PDF::loadView('compras.pdfDetalle', compact('compra', 'subtotal', 'detalleCompras'))->setOptions(['defaultFont' => 'sans-serif']); 
        return $pdf->stream('Comprobante_Compra'.$compra->id.'.pdf');
    }

    public function change_status (Compra $compra)
    {
        if ($compra->estado == 'Activo') {
            $compra->update(['estado'=>'Inactivo']);
            return redirect()->back();
        } else {
            $compra->update(['estado'=>'Activo']);
            return redirect()->back();
        } 
    }
}