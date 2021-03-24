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
        $categorias = Categoria::where('estado', 'Activo')->get();
        return view('productos/listar',compact('productos','categorias'));
    }

    public function agregarProducto()
    {
        $categorias = Categoria::where('estado', 'Activo')->get();
        return view('productos.create', compact('categorias'));
    }

    
    public function store(Request $request)
    {
       
        $request->validate([
            'idCategoria'=>'required',
            'nombreProducto'=>'required|unique:productos|regex:/^[\pL\s\-]+$/u',
            'existencias'=>'required|integer',
            'medida'=>'required|integer',
            'precio'=>'required|integer',
        ],

    [
            'idCategoria.required' => '*Rellena este campo',
            'nombreProducto.required' => '*Rellena este campo',
            'nombreProducto.unique' => '*Producto ya existe',
            'nombreProducto.regex' => '*Ingresa sólo letras',
            'existencias.required' => '*Rellena este campo',
            'existencias.integer' => '*Ingresa sólo números',
            'medida.required' => '*Rellena este campo',
            'medida.integer' => '*Ingresa sólo números',
            'medida.integer' => '*Ingresa sólo números',
            'precio.required' => '*Rellena este campo',
          
         
          
        ]
    );
        $productoNuevo = new App\Producto;
        $productoNuevo->idCategoria = $request->idCategoria;
        $productoNuevo->nombreProducto = $request->nombreProducto;
        $productoNuevo->existencias = $request->existencias;
        $productoNuevo->medida = $request->medida;
        $productoNuevo->porcentajeIva = $request->porcentajeIva;
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

        $request->validate([
            'idCategoria'=>'required',
            'nombreProducto'=>'required|unique:productos|regex:/^[\pL\s\-]+$/u',
            'existencias'=>'required|integer',
            'medida'=>'required|integer',
            'precio'=>'required|integer',
        ],

    [
            'idCategoria.required' => '*Rellena este campo',
            'nombreProducto.required' => '*Rellena este campo',
            'nombreProducto.unique' => '*Producto ya existe',
            'nombreProducto.regex' => '*Ingresa sólo letras',
            'existencias.required' => '*Rellena este campo',
            'existencias.integer' => '*Ingresa sólo números',
            'medida.required' => '*Rellena este campo',
            'medida.integer' => '*Ingresa sólo números',
            'medida.integer' => '*Ingresa sólo números',
            'precio.required' => '*Rellena este campo',
          
         
          
        ]
    );

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
        $pdf = PDF::loadView('productos.pdf',compact('productos','categorias'))->setOptions(['defaultFont' => 'sans-serif']); 
        return $pdf->stream('productos.pdf');
    }
   
}
