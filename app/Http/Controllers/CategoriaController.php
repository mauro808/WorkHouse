<?php

namespace App\Http\Controllers;
use App;

use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($idCategoria)
    {
        $categoria = App\Categoria::findOrFail($idCategoria);
        return view('categorias.detalle', compact('categoria'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

        ]);

        $categoriaNueva = new App\Categoria;
        $categoriaNueva->id = $request->id;
        $categoriaNueva->nombreCategoria = $request->nombreCategoria;
        $categoriaNueva->Descripcion = $request->Descripcion;

        $categoriaNueva->save();
        return redirect('/categorias')->with('success','Registro Exitoso');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categoria = App\Categoria::findOrFail($id);
        return view('categorias.editar', compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $categoria= App\Categoria::findOrFail($id); //buscar producto por id
        $categoria->id = $request->id;
        $categoria->nombreCategoria = $request->nombreCategoria;
        $categoria->Descripcion = $request->Descripcion;
        $categoria->save();
           
           return redirect('/categorias')->with('Mensaje', 'Categoria actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categoria = App\Categoria::find($id);
        $categoria -> delete();
        return redirect('/categorias')->with('success','Registro Exitoso');
    }
}
