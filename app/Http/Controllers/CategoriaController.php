<?php

namespace App\Http\Controllers;
use App;
use Barryvdh\DomPDF\Facade as PDF;
use App\Categoria;

use Illuminate\Http\Request;

class CategoriaController extends Controller
{

    public function listarCategorias()
    {
        $categorias = Categoria::all();
        return view('categorias/listar',compact('categorias'));
    }

    public function agregarCategoria()
    {
        return view('categorias.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombreCategoria'=>'required|string',
            'Descripcion'=>'required',
        ],
            [
                'nombreCategoria.required' => 'Por Favor Ingresa el Nombre de la Categoría',
                'Descripcion.required' => 'Por Favor Ingresa una Descripción',
            ]
    
    );

        $categoriaNueva = new App\Categoria;
        $categoriaNueva->id = $request->id;
        $categoriaNueva->nombreCategoria = $request->nombreCategoria;
        $categoriaNueva->Descripcion = $request->Descripcion;
        $categoriaNueva->estado = $request->estado;

        $categoriaNueva->save();
        return redirect('/categorias')->with('success','Registro Exitoso');
    }

    public function detalleCategoria($idCategoria)
    {
        $categoria = App\Categoria::findOrFail($idCategoria);
        return view('categorias.detalle', compact('categoria'));
    }

    public function edit($id)
    {
        $categoria = App\Categoria::findOrFail($id);
        return view('categorias.editar', compact('categoria'));
    }

    public function update(Request $request, $id)
    {
        $categoria= App\Categoria::findOrFail($id); //buscar producto por id
        $categoria->id = $request->id;
        $categoria->nombreCategoria = $request->nombreCategoria;
        $categoria->Descripcion = $request->Descripcion;
        $categoria->save();
           
           return redirect('/categorias')->with('Mensaje', 'Categoria actualizado');
    }

    public function habilitar(Request $request, $id)
    {
           $categoria= App\Categoria::findOrFail($id); //buscar producto por id
           $categoria->estado="Activo";
           $categoria->update();
           
           return redirect('/categorias')->with('Mensaje', 'categoria actualizada');
    }

    public function inhabilitar(Request $request, $id)
    {
           $categoria= App\Categoria::findOrFail($id); //buscar producto por id
           $categoria->estado="Inactivo";
           $categoria->update();
           
           return redirect('/categorias')->with('Mensaje', 'categoria actualizadao');
    }

    public function pdfCategorias()
    {
       $categorias = Categoria::all();
        $pdf = PDF::loadView('categorias.pdf',compact('categorias'));
        return $pdf->stream('categorias.pdf');
    }
   
}
