<?php

namespace App\Http\Controllers;

use App\Compra;
use App\Usuario;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

class CompraController extends Controller
{
  
    public function listarCompras(){
        $compras = Compra::all();
        $usuarios = Usuario::all();
        return view('compras.listar',compact('compras','usuarios'));
      
    }

    public function detalleCompra($idCompra)
    {
        $compra = Compra::findOrFail($idCompra);
        $usuario = Usuario::find($compra->idUsuario);
        return view('compras.detalle', compact('compra','usuario'));
    }
    
    public function pdfCompras()
    {
       $compras = Compra::all();
       $usuarios = Usuario::all();
        $pdf = PDF::loadView('compras.pdf',compact('compras','usuarios'));
        return $pdf->stream('compras.pdf');
    }
}
