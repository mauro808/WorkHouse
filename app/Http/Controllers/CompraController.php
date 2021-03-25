<?php

namespace App\Http\Controllers;

use App\Compra;
use App\Usuario;
use App\Producto;
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
  
    /* public function index()
    {
        $compras = Compra::get();
        $usuarios = Usuario::get();
        return view('compras.index',compact('compras','usuarios'));
      
    }
    public function create()
    {
        $usuarios = Usuario::get();
        $productos = Producto::where('estado', 'Activo')->get();
        return view('compras.create',compact('usuarios','productos'));
      
    }
     public function store(Request $request)
    {
        // +[ //'idUsuario'=>Auth::usuario()->id,   
      // 'fechaCompra'=>Carbon::now('America/Bogota'),] 
     
       $compra = Compra::create($request->all());
        foreach ($request->idProducto as $key=> $idProducto){
       dd($request);
        $results[] = array(
        "idProducto"=>$request->idProducto[$key],
        "cantidad"=>$request->cantidad[$key], 
        "precio"=>$request->precio[$key]);
       }
      
       $compra->detalleCompras()->createMany($results);
       return redirect()->route('compras.index');
       
    } 
    
    public function show(Compra $compra)
    {   
         $subtotal = 0;
         $detalleCompras = $compra->detalleCompras;
         foreach ($detalleCompras as $detalleCompra){
            $subtotal += $detalleCompra->cantidad *  $detalleCompra->precio;
         }
        return view('compras.show', compact('compra', 'detalleCompras', 'subtotal'));
    }
    
    public function show(Compra $compra)
    {
        return view('compras.show', compact('compra'));
    } */ 

    public function index()
    {
        $compras = Compra::all();
        $usuarios = Usuario::all();
        return view('compras.index',compact('compras','usuarios'));
      
    }

   /* public function show($idCompra){
        $compra = Compra::findOrFail($idCompra);
        $usuario = Usuario::find($compra->idUsuario);
        $producto = Producto::find($compra->idProducto);
        return view('compras.show', compact('compra','usuario','producto'));
    } */

    public function show(Compra $compra)
    {   
         $subtotal = 0;
         $detalleCompras = $compra->detalleCompras;
         foreach ($detalleCompras as $detalleCompra){
            $subtotal += $detalleCompra->cantidad *  $detalleCompra->precio;
         }
        return view('compras.show', compact('compra', 'detalleCompras', 'subtotal'));
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
           // var_dump($request->idProducto, $request->precio);
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
        $detalleCompras = $compra->detalleCompras;
        foreach ($detalleCompras as $detalleCompra) {
            $subtotal += $detalleCompra->cantidad *  $detalleCompra->precio;
        }
        $pdf = PDF::loadView('detallecompra.pdf', compact('compra', 'subtotal', 'detalleCompras'))->setOptions(['defaultFont' => 'sans-serif']); 
        return $pdf->stream('Compronbante_Compra'.$compra->id.'.pdf');
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