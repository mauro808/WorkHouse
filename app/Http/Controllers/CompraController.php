<?php

namespace App\Http\Controllers;

use App\Compra;
use App\User;
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
        $usuarios = User::all();
        return view('compras.index',compact('compras','usuarios'));
      
    }

    public function create()
    {
        $compras = Compra::where('estado', 'Activo')->get();
        $usuarios = User::where('estado', 'Activo')->get();
        $productos = Producto::where('estado', 'Activo')->get();

      return view('compras.create',["usuarios"=>$usuarios,"productos"=>$productos]);
    }

   
    public function store(Request $request)
    {
                    
        $request->validate([
            'precioTotal'=>'required',
            'idUsuario'=>'required',
         
        ],

        [
            
        ]

        );

        $compra = Compra::create($request->all()+[
            //'user_id'=>Auth::user()->id,
            'created_at'=>Carbon::now('America/Bogota'),
        ]);
        
        foreach ($request->idProducto as $key => $idProducto) {
           
            $results[] = array("idProducto"=>$request->idProducto[$key],"cantidad"=>$request->cantidad[$key], "precio"=>$request->precio[$key]);
        }
        $compra->detalleCompra()->createMany($results);
        //return redirect()->route('compras.index'.);
        $productos = Producto::get();
        $usuarios = User::get(); 
        $subtotal = 0 ;
        $detalleCompras = $compra->detalleCompra;
        foreach ($detalleCompras as $detalleCompra) {
            $subtotal += $detalleCompra->cantidad * $detalleCompra->valorProducto;
        }
      
        return view('compras.show', compact('compra', 'detalleCompras', 'subtotal','productos','usuarios')); 
    }

    public function show(Compra $compra, User $idUsuario, Producto $idProducto )
    {
       
        $productos = Producto::get();
        $usuarios = User::get(); 
        $subtotal = 0 ;
        $detalleCompras = $compra->detalleCompra;
        foreach ($detalleCompras as $detalleCompra) {
            $subtotal += $detalleCompra->cantidad * $detalleCompra->valorProducto;
        }
      
        return view('compras.show', compact('compra', 'detalleCompras', 'subtotal','productos','usuarios')); 
  
    }

    public function pdfCompras()
    {
       $compras = Compra::all();
       $usuarios = User::all();
        $pdf = PDF::loadView('compras.pdf',compact('compras','usuarios'))->setOptions(['defaultFont' => 'sans-serif']);;
        return $pdf->stream('compras.pdf');
    }

    public function pdfDetalle(Compra $compra, User $idUsuario, Producto $idProducto)
    {
        $productos = Producto::get();
        $usuarios = User::get(); 
        $subtotal = 0 ;
        $detalleCompras = $compra->detalleCompra;
        foreach ($detalleCompras as $detalleCompra) {
            $subtotal += $detalleCompra->cantidad *  $detalleCompra->precio;
        }
        $pdf = PDF::loadView('compras.pdfDetalle', compact('compra', 'detalleCompras', 'subtotal','productos','usuarios')) ->setOptions(['defaultFont' => 'sans-serif']); 
        return $pdf->stream('Comprobante_Compra'.$compra->id.'.pdf');
    }

    public function change_status (Compra $compra)
    {
        if ($compra->estado == 'Activo') {
            $compra->update(['estado'=>'Inactivo']);
            return redirect()->back();
        } else {
            $compra->update(['estado'=>'Inactivo']);
            return redirect()->back();
        } 
    }
}