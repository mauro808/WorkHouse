<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App;
use App\Producto;
use App\Categoria;
use Barryvdh\DomPDF\Facade as PDF;


class ProductoController extends Controller
{

    public function listarProductos(){
        $productos = Producto::all();
        $categorias = Categoria::all();
        return view('productos/listar',compact('productos','categorias'));
    }

    public function agregarProducto()
    {
        $categorias = Categoria::all();
        return view('productos.create', compact('categorias'));
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'idCategoria'=>'required',
            'nombreProducto'=>'required',
            'existencias'=>'required|integer',
            'medida'=>'required',
            'precio'=>'required',
        ],

    [
            'idCategoria.required' => 'Por Favor Selecciona La Categoría',
            'nombreProducto.required' => 'Ingresa Nombre',
            'existencias.required' => 'Ingresa Existencias',
            'existencias.integer' => 'Ingresa sólo números',
            'medida.required' => 'Selecciona Medida',
            //'porcentajeIva.integer' => 'Ingresa sólo números',
            'precio.required' => 'Ingresa Precio',
            //'precio.integer' => 'Ingresa sólo números',
         
          
        ]
    );

        $productoNuevo = new App\Producto;
        $productoNuevo->idCategoria = $request->idCategoria;
        $productoNuevo->nombreProducto = $request->nombreProducto;
        $productoNuevo->existencias = $request->existencias;
        $productoNuevo->medida = $request->medida;
        $productoNuevo->precio = $request->precio;
        $productoNuevo->Estado = $request->estado;

        $productoNuevo->save();
        return redirect('/productos')->with('success','Registro Exitoso');
    }

    public function detalleProducto($idProducto)
    {
        $producto = App\Producto::findOrFail($idProducto);
        $categoria = App\Categoria::find($producto->idCategoria);
        return view('productos.detalle', compact('producto','categoria'));
    }

   
    public function edit($idProducto)
    {
        $producto = App\Producto::findOrFail($idProducto);
        $categorias = App\Categoria::all();
        return view('productos.editar', compact('producto','categorias'));
    }

    public function update(Request $request,  $id)
    {
        $producto= App\Producto::findOrFail($id); //buscar producto por id
        $producto->idCategoria = $request->idCategoria;
        $producto->nombreProducto = $request->nombreProducto;
        $producto->existencias = $request->existencias;
        $producto->medida = $request->medida;
        $producto->porcentajeIva = $request->porcentajeIva;
        $producto->precio = $request->precio;
        $producto->save();
           
           return redirect('/productos')->with('Mensaje', 'Producto actualizado');
    }

    public function habilitar(Request $request, $id)
    {
           $producto= App\Producto::findOrFail($id); //buscar producto por id
           $producto->Estado="Activo";
           $producto->update();
           
           return redirect('/productos')->with('Mensaje', 'Producto actualizado');
    }

    public function inhabilitar(Request $request, $id)
    {
           $producto= App\Producto::findOrFail($id); //buscar producto por id
           $producto->Estado="Inactivo";
           $producto->update();
           
           return redirect('/productos')->with('Mensaje', 'Producto actualizado');
    }
    public function pdfProductos()
    {
       $productos = Producto::all();
       $categorias = Categoria::all();
        $pdf = PDF::loadView('productos.pdf',compact('productos','categorias'));
        return $pdf->stream('productos.pdf');
    }
   
}
