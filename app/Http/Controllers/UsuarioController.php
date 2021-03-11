<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\Usuario;
use App\Rol;
use Barryvdh\DomPDF\Facade as PDF;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuario = Usuario::all(); 
        return view('usuario.listar',compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuario.create');
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
            'nombre'=>'required',
            'tipoDocumento'=>'required',
            'identificacion'=>'required',
            'correo'=>'required',
            'telefonoFijo'=>'required',
            'celular'=>'required',
            'direccion'=>'required',
            'nombreUsuario'=>'required',
            'contrasena'=>'required',
            'contrasenac'=>'required',
        ]);

        $usuarioNuevo = new App\Usuario;
        $usuarioNuevo->idRol = $request->idRol;
        $usuarioNuevo->nombre = $request->nombre;
        $usuarioNuevo->tipoDocumento = $request->tipoDocumento;
        $usuarioNuevo->identificacion = $request->identificacion;
        $usuarioNuevo->correo = $request->correo;
        $usuarioNuevo->telefonoFijo = $request->telefonoFijo;
        $usuarioNuevo->celular = $request->celular;
        $usuarioNuevo->direccion = $request->direccion;
        $usuarioNuevo->nombreUsuario = $request->nombreUsuario;
        $usuarioNuevo->contrasena = $request->contrasena;
        $usuarioNuevo->contrasenac = $request->contrasenac;
        $usuarioNuevo->estado = $request->estado;
    
    
        $usuarioNuevo->save();
        return redirect('/usuarios')->with('success','Registro Exitoso');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idUsuario){
        $usuario = App\Usuario::findOrFail($idUsuario);
        $rols = App\Rol::all();
        return view('usuarios.editar', compact('usuario', 'rols'));
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
           $usuario= App\Usuario::findOrFail($id); //buscar producto por id
           $usuario->idRol=$request->idRol;
           $usuario->nombre=$request->nombre;
           $usuario->tipoDocumento=$request->tipoDocumento;
           $usuario->identificacion=$request->identificacion;
           $usuario->correo=$request->correo;
           $usuario->telefonoFijo=$request->telefonoFijo;
           $usuario->celular=$request->celular;
           $usuario->direccion=$request->direccion;
           $usuario->nombreUsuario=$request->nombreUsuario;
           $usuario->save();

           return redirect('/usuarios')->with('Mensaje', 'Usuario actualizado');
    }

    public function habilitar(Request $request, $id)
    {
           $usuario= App\Usuario::findOrFail($id); //buscar producto por id
           $usuario->Estado="Activo";
           $usuario->update();
           
           return redirect('/usuarios')->with('Mensaje', 'Usuario actualizado');
    }

    public function inhabilitar(Request $request, $id)
    {
           $usuario= App\Usuario::findOrFail($id); //buscar producto por id
           $usuario->Estado="Inactivo";
           $usuario->update();
           
           return redirect('/usuarios')->with('Mensaje', 'Usuario actualizado');
    }

    public function pdfUsuarios()
    {
       $usuarios = Usuario::all();
       $rols = Rol::all();
        $pdf = PDF::loadView('usuarios.pdf',compact('usuarios','rols'));
        return $pdf->setPaper('a4','landscape')->stream('usuarios.pdf');
    }
}
