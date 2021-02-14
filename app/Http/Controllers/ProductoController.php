<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App;
//use App\Producto;


class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $producto = Producto::all(); 
        return view('producto.listar',compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('producto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'idCategoria'=>'required',
            'nombreProducto'=>'required',
            'existencias'=>'required',
            'medida'=>'required',
            'porcentajeIva'=>'required',
            'precio'=>'required',
        ]);

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

    /**
     * Display the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('producto.detalle',compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit($idProducto)
    {
        $producto = App\Producto::findOrFail($idProducto);
        return view('productos.editar', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */


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
   
   /* public function destroy( $id)
    {
        $producto = App\Producto::find($id);
        $producto -> delete();
        return redirect('/productos')->with('success','Registro Exitoso');
    }*/

    public function destroy($id)
    {
        $producto->delete();
        return redirect('/producto');
    }
}
