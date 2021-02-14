<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

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
            'idRol'=>'required',
            'nombre'=>'required',
            'tipoDocumento'=>'required',
            'identificacion'=>'required',
            'correo'=>'required',
            'telefonoFijo'=>'required',
            'celular'=>'required',
            'direccion'=>'required',
            'nombreUsuario'=>'required',
            'contrasena'=>'required'
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
        $usuarioNuevo->estado = $request->estado;
    
        /**$request->validate([
            'idRol'=>'required',
            'nombre'=>'required',
            'tipoDocumento'=>'required',
            'identificacion'=>'required',
            'correo'=>'required',
            'telefonoFijo'=>'required',
            'celular'=>'required',
            'direccion'=>'required',
            'nombreUsuario'=>'required',
            'contrasena'=>'required'
    
           ]);
    
           //Llevar los valores de los campos del form a un objeto
           $usuario = new Usuario([
               'idRol'=>$request->get('idRol'),
               'nombre'=>$request->get('nombre'),
               'tipoDocumento'=>$request->get('tipoDocumento'),
               'identificacion'=>$request->get('identificacion'),
               'correo'=>$request->get('correo'),
               'telefonoFijo'=>$request->get('telefonoFijo'),
               'celular'=>$request->get('celular'),
               'direccion'=>$request->get('direccion'),
               'nombreUsuario'=>$request->get('nombreUsuario'),
               'contrasena'=>$request->get('contrasena')
           ]);
           */
    
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
        return view('usuario.detalle',compact('usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idUsuario){
        $usuario = App\Usuario::findOrFail($idUsuario);
        return view('usuarios.editar', compact('usuario'));
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario->delete();
        return redirect('/usuario');
    }
}
