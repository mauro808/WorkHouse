<?php

namespace App\Http\Controllers;
use App;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function listarUsuario(){
        $usuarios = App\Usuario::all();
        return view('usuarios/listar',compact('usuarios'));
    }
    public function listarClientes(){
        $clientes = App\Cliente::all();
        return view('clientes/listar',compact('clientes'));
    }

    public function listarCategorias(){
        $categorias = App\Categoria::all();
        return view('categorias/listar',compact('categorias'));
    }

    public function listarProductos(){
        $productos = App\Producto::all();
        return view('productos/listar',compact('productos'));
    }

    public function detalleUsuario($idUsuario){
        $usuario = App\Usuario::findOrFail($idUsuario);
        return view('usuarios.detalle', compact('usuario'));
    }

    public function detalleCategoria($idCategoria){
        $categoria = App\Categoria::findOrFail($idCategoria);
        return view('categorias.detalle', compact('categoria'));
    }

    public function detalleProducto($idProducto){
        $producto = App\Producto::findOrFail($idProducto);
        return view('productos.detalle', compact('producto'));
    }

    public function agregarUsuario(){
        return view('usuarios.create');
    }

    public function agregarCliente(){
        return view('clientes.create');
    }

    public function agregarCategoria(){
        return view('categorias.create');
    }

    public function agregarProducto(){
        return view('productos.create');
    }

}
