<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\Usuario;
use App\Rol;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
 
   
    public function listarUsuario()
    {
        $usuarios = Usuario::all();
        $rols = Rol::all();
        return view('usuarios/listar',compact('usuarios','rols'));
      
    }

    public function agregarUsuario()
    {
        $rols = App\Rol::all();
        return view('usuarios.create', compact('rols'));
    }

    public function store(Request $request)
    {

    
        $request->validate([
            'idRol'=>'required',
            'nombre'=>'required|regex:/^[\pL\s\-]+$/u|max:50',
            'tipoDocumento'=>'required',
            'identificacion'=>'required',
            'correo'=>'required|email',
            'telefonoFijo'=>'required',
            'celular'=>'required',
            'direccion'=>'required',
            'nombreUsuario'=>'required|regex:/^[\pL\s\-]+$/u|max:8',
            'contrasena'=>'required|min:8|',
            'contrasenac'=>'required|min:8|same:contrasena',
        ],

        [
            'idRol.required'=>'*Rellena este campo',
            'nombre.required' => '*Rellena este campo',
            'nombre.max' => '*Máximo 50 caracteres',
            'nombre.regex' => '*Ingresa sólo letras',
            'tipoDocumento.required' => '*Rellena este campo',
            'identificacion.required' => '*Rellena este campo',
            'correo.required' => '*Rellena este campo',
            'correo.email' => '*Ingresa un correo válido',
            'telefonoFijo.required' => '*Rellena este campo',
            'celular.required' => '*Rellena este campo',
            'direccion.required' => '*Rellena este campo',
            'nombreUsuario.required' => '*Rellena este campo',
            'nombreUsuario.regex' => '*Ingresa sólo letras',
            'nombreUsuario.max' => '*Ingresa máximo 8 caracteres',
            'contrasena.required' => '*Rellena este campo',
            'contrasenac.required' => '*Rellena este campo',
            'contrasenac.same' => '*Las contraseñas no coinciden',
            'contrasena.min' => '*Mínimo 8 caracteres',
            'contrasenac.min' => '*Mínimo 8 caracteres',
        ]

        );

    

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
        $usuarioNuevo->contrasena = Hash::make($request->contrasena);
        $usuarioNuevo->contrasenac = Hash::make($request->contrasenac);
        $usuarioNuevo->estado = $request->estado;

        $usuarioNuevo->save();
        return redirect('/usuarios')->with('success','Registro Exitoso');
    
    }

    
    public function detalleUsuario($idUsuario)
    {
        $usuario = App\Usuario::findOrFail($idUsuario);
        $rol = App\Rol::find($usuario->idRol);
        return view('usuarios.detalle', compact('usuario','rol'));
    }

    public function edit($idUsuario){
        $usuario = App\Usuario::findOrFail($idUsuario);
        $rols = App\Rol::all();
        return view('usuarios.editar', compact('usuario', 'rols'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'idRol'=>'required',
            'nombre'=>'required|regex:/^[\pL\s\-]+$/u|max:50',
            'tipoDocumento'=>'required',
            'identificacion'=>'required',
            'correo'=>'required|email',
            'telefonoFijo'=>'required',
            'celular'=>'required',
            'direccion'=>'required',
            'nombreUsuario'=>'required|regex:/^[\pL\s\-]+$/u|max:8',
           
        ],

        [
            'idRol.required'=>'*Rellena este campo',
            'nombre.required' => '*Rellena este campo',
            'nombre.max' => '*Máximo 50 caracteres',
            'nombre.regex' => '*Ingresa sólo letras',
            'tipoDocumento.required' => '*Rellena este campo',
            'identificacion.required' => '*Rellena este campo',
            'correo.required' => '*Rellena este campo',
            'correo.email' => '*Ingresa un correo válido',
            'telefonoFijo.required' => '*Rellena este campo',
            'celular.required' => '*Rellena este campo',
            'direccion.required' => '*Rellena este campo',
            'nombreUsuario.required' => '*Rellena este campo',
            'nombreUsuario.regex' => '*Ingresa sólo letras',
            'nombreUsuario.max' => '*Ingresa máximo 8 caracteres',
     
           
        ]

        );
       
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
        $pdf = PDF::loadView('usuarios.pdf',compact('usuarios','rols'))->setOptions(['defaultFont' => 'sans-serif']); 
        return $pdf->setPaper('a4','landscape')->stream('usuarios.pdf');
    }
}
