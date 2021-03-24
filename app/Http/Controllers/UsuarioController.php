<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\Usuario;
use App\Rol;
use Barryvdh\DomPDF\Facade as PDF;

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
            'nombre'=>'required|max:50|regex:/^[\pL\s\-]+$/u',
            'tipoDocumento'=>'required',
            'identificacion'=>'required|integer|unique:usuarios',
            'correo'=>'required|email|unique:usuarios',
            'telefonoFijo'=>'required|integer|min:8',
            'celular'=>'required|integer|min:10',
            'direccion'=>'required',
            'nombreUsuario'=>'required|unique:usuarios|max:8|alpha',
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
            'identificacion.integer' => '*Ingresa sólo números',
            'identificacion.unique' => '*Documento ya registrado',
            'correo.required' => '*Rellena este campo',
            'correo.email' => '*Ingresa un correo válido',
            'correo.unique' => '*Correo ya registrado',
            'telefonoFijo.required' => '*Rellena este campo',
            'telefonoFijo.integer' => '*Ingresa sólo números',
            'telefonoFijo.min' => '*El fijo contiene 7 dígitos',
            'celular.required' => '*Rellena este campor',
            'celular.integer' => '*Ingresa sólo números',
            'celular.min' => '*El celular contiene 10 dígitos',
            'direccion.required' => '*Rellena este campo',
            'nombreUsuario.required' => '*Rellena este campo',
            'nombreUsuario.unique' => '*Alias ya Existe',
            'nombreUsuario.max' => '*Ingresa máximo 8 caracteres',
            'nombreUsuario.alpha' => '*Ingresa sólo letras',
            'contrasena.required' => '*Rellena este campo',
            'contrasenac.required' => '*Rellena este campo',
            'contrasenac.same' => '*Las contraseñas no coinciden',
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
        $usuarioNuevo->contrasena = $request->contrasena;
        $usuarioNuevo->contrasenac = $request->contrasenac;
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
            'nombre'=>'required|max:50|regex:/^[\pL\s\-]+$/u',
            'tipoDocumento'=>'required',
            'identificacion'=>'required|integer|unique:usuarios',
            'correo'=>'required|email|unique:usuarios',
            'telefonoFijo'=>'required|integer|min:8',
            'celular'=>'required|integer|min:10',
            'direccion'=>'required',
            'nombreUsuario'=>'required|unique:usuarios|max:8|alpha',
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
            'identificacion.integer' => '*Ingresa sólo números',
            'identificacion.unique' => '*Documento ya registrado',
            'correo.required' => '*Rellena este campo',
            'correo.email' => '*Ingresa un correo válido',
            'correo.unique' => '*Correo ya registrado',
            'telefonoFijo.required' => '*Rellena este campo',
            'telefonoFijo.integer' => '*Ingresa sólo números',
            'telefonoFijo.min' => '*El fijo contiene 7 dígitos',
            'celular.required' => '*Rellena este campor',
            'celular.integer' => '*Ingresa sólo números',
            'celular.min' => '*El celular contiene 10 dígitos',
            'direccion.required' => '*Rellena este campo',
            'nombreUsuario.required' => '*Rellena este campo',
            'nombreUsuario.unique' => '*Alias ya Existe',
            'nombreUsuario.max' => '*Ingresa máximo 8 caracteres',
            'nombreUsuario.alpha' => '*Ingresa sólo letras',
            'contrasena.required' => '*Rellena este campo',
            'contrasenac.required' => '*Rellena este campo',
            'contrasenac.same' => '*Las contraseñas no coinciden',
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
