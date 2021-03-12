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
           
            'nombre'=>'required',
            'tipoDocumento'=>'required',
            'identificacion'=>'required|integer',
            'correo'=>'required|email',
            'telefonoFijo'=>'required|integer',
            'celular'=>'required|integer',
            'direccion'=>'required',
            'nombreUsuario'=>'required',
            'contrasena'=>'required',
            'contrasenac'=>'required',
        ],

        [
            
            'nombre.required' => 'Ingresa Nombres',
            'tipoDocumento.required' => 'Selecciona Tipo Documento',
            'identificacion.required' => 'Ingresa Documento',
            'identificacion.integer' => 'Ingresa sólo números',
            'correo.required' => 'Ingresa Correo',
            'correo.email' => 'Ingresa un Correo Válido',
            'telefonoFijo.required' => 'Ingresa Teléfono Fijo',
            'telefonoFijo.integer' => 'Ingresa sólo números',
            'celular.required' => 'Ingresa Celular',
            'celular.integer' => 'Ingresa sólo números',
            'direccion.required' => 'Ingresa Dirección',
            'nombreUsuario.required' => 'Ingresa un Alias',
            'contrasena.required' => 'Ingresa La contraseña',
            'contrasenac.required' => 'Confirma La contraseña',
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
