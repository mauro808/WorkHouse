<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AyudaController extends Controller
{
    public function index()
    {
       
        return view('ayuda/index');
    }

    public function musuarios()
    {
       
        return view('ayuda/musuarios');
    }

    public function mclientes()
    {
       
        return view('ayuda/mclientes');
    }
    public function mcategorias()
    {
       
        return view('ayuda/mcategorias');
    }
    public function mproductos()
    {
       
        return view('ayuda/mproductos');
    }
    public function mcompras()
    {
       
        return view('ayuda/mcompras');
    }
    public function mventas()
    {
       
        return view('ayuda/mventas');
    }
}
