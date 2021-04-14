<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\User;
use App\Role_user;
use Caffeinated\Shinobi\Models\Role;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('can:agregarUsuario')->only(['agregarUsuario','store']);
        $this->middleware('can:usuario.listar')->only(['listarUsuario']);
        $this->middleware('can:usuario.editar')->only(['edit']);
        $this->middleware('can:usuario.update')->only(['update']);
        $this->middleware('can:usuario.detalle')->only(['detalleUsuario']);
        $this->middleware('can:usuario.habilitacion')->only(['habilitar']);
        $this->middleware('can:usuario.inhabilitacion')->only(['inhabilitar']);
        

    }
   
    public function listarUsuario()
    {
        $usuarios = User::all();
        $roles = Role::get();
        return view('usuarios/listar',compact('usuarios','roles'));
      
    }

    public function agregarUsuario()
    {
        $usuarios = User::all();
        $roles = Role::get();
        return view('usuarios.create', compact('roles'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'idRol'=>'required',
            'nombreUsuario'=>'required|regex:/^[\pL\s\-]+$/u|max:8',
            'nombre'=>'required|regex:/^[\pL\s\-]+$/u|max:50',
            'tipoDocumento'=>'required',
            'identificacion'=>'required|unique:users',
            'email'=>'required|email|unique:users',
            'telefonoFijo'=>'required',
            'celular'=>'required',
            'direccion'=>'required',
            'password'=>'required|min:8|',
            'passwordc'=>'required|min:8|same:password',
        ],

        [
            'nombreUsuario.max' => '*Maximo 8 caracteres',
            'idRol.required'=>'*Rellena este campo',
            'nombre.required' => '*Rellena este campo',
            'nombre.max' => '*Máximo 50 caracteres',
            'nombre.regex' => '*Ingresa sólo letras',
            'tipoDocumento.required' => '*Rellena este campo',
            'identificacion.required' => '*Rellena este campo',
            'identificacion.unique' => '*Documento ya registrado',
            'email.required' => '*Rellena este campo',
            'email.unique' => '*Correo ya registrado',
            'email.email' => '*Ingresa un E-mail válido',
            'telefonoFijo.required' => '*Rellena este campo',
            'celular.required' => '*Rellena este campo',
            'direccion.required' => '*Rellena este campo',
            'nombreUsuario.required' => '*Rellena este campo',
            'nombreUsuario.regex' => '*Ingresa sólo letras',
            'nombreUsuario.unique' => '*Alias ya registrado',
            'nombreUsuario.max' => '*Ingresa máximo 8 caracteres',
            'password.required' => '*Rellena este campo',
            'passwordc.required' => '*Rellena este campo',
            'password.same' => '*Las contraseñas no coinciden',
            'password.min' => '*Mínimo 8 caracteres',
            'passwordc.min' => '*Mínimo 8 caracteres',
        ]

        );

    
        $usuarios = User::all();
        $usuarioNuevo = new App\User;
        $usuarioNuevo->idRol = $request->idRol;
        $usuarioNuevo->nombre = $request->nombre;
        $usuarioNuevo->tipoDocumento = $request->tipoDocumento;
        $usuarioNuevo->identificacion = $request->identificacion;
        $usuarioNuevo->email = $request->email;
        $usuarioNuevo->telefonoFijo = $request->telefonoFijo;
        $usuarioNuevo->celular = $request->celular;
        $usuarioNuevo->direccion = $request->direccion;
        $usuarioNuevo->nombreUsuario = $request->nombreUsuario;
        $usuarioNuevo->password = Hash::make($request->password);
        $usuarioNuevo->passwordc = Hash::make($request->passwordc);
        $usuarioNuevo->estado = $request->estado;

        $usuarioNuevo->save();
        $usuarioNuevo->roles()->sync($request->get("roles"));
        $usuarioNuevo->Role_user()->create([
            'role_id'=>$usuarioNuevo->idRol,
            'user_id'=>$usuarioNuevo->id,
        ]);
        return redirect('/usuarios')->with('success','Registro Exitoso');
    
    }

    
    public function detalleUsuario($idUsuario)
    {
        $usuario = App\User::findOrFail($idUsuario);
        $roles = Role::findOrFail($usuario->idRol);
        return view('usuarios.detalle', compact('usuario','roles'));
    }

    public function edit($idUsuario){
        $usuario = App\User::findOrFail($idUsuario);
        $roles = Role::get();
        return view('usuarios.editar', compact('usuario', 'roles'));
    }

    public function update(Request $request,  $id)
    {
        $request->validate([
            'nombreUsuario'=>'required|regex:/^[\pL\s\-]+$/u|max:8',
            'idRol'=>'required',
            'nombre'=>'required|regex:/^[\pL\s\-]+$/u|max:50',
            'tipoDocumento'=>'required',
            'identificacion'=>'required',
            'email'=>'required|email',
            'telefonoFijo'=>'required',
            'celular'=>'required',
            'direccion'=>'required',

        ],

        [
            'nombreUsuario.max' => '*Maximo 8 caracteres',
            'idRol.required'=>'*Rellena este campo',
            'nombre.required' => '*Rellena este campo',
            'nombre.max' => '*Máximo 50 caracteres',
            'nombre.regex' => '*Ingresa sólo letras',
            'tipoDocumento.required' => '*Rellena este campo',
            'identificacion.required' => '*Rellena este campo',
            'email.required' => '*Rellena este campo',
            'email.email' => '*Ingresa un E-mail válido',
            'telefonoFijo.required' => '*Rellena este campo',
            'celular.required' => '*Rellena este campo',
            'direccion.required' => '*Rellena este campo',
            'nombreUsuario.required' => '*Rellena este campo',
            'nombreUsuario.regex' => '*Ingresa sólo letras',
            'nombreUsuario.max' => '*Ingresa máximo 8 caracteres',
     
           
        ]

        );
           
           $usuario= App\User::findOrFail($id); 
           $usuario->idRol=$request->idRol;
           $usuario->nombre=$request->nombre;
           $usuario->tipoDocumento=$request->tipoDocumento;
           $usuario->identificacion=$request->identificacion;
           $usuario->email=$request->email;
           $usuario->telefonoFijo=$request->telefonoFijo;
           $usuario->celular=$request->celular;
           $usuario->direccion=$request->direccion;
           $usuario->nombreUsuario=$request->nombreUsuario;
           $usuario->save();
           $usuario->roles()->sync($request->get("roles"));

           return redirect('/usuarios')->with('Mensaje', 'Usuario actualizado');
    }

    public function habilitar(Request $request, $id)
    {
           $usuario= App\User::findOrFail($id); 
           $usuario->Estado="Activo";
           $usuario->update();
           
           return redirect('/usuarios')->with('Mensaje', 'Usuario actualizado');
    }

    public function inhabilitar(Request $request, $id)
    {
           $usuario= App\User::findOrFail($id); //buscar producto por id
           $usuario->Estado="Inactivo";
           $usuario->update();
           
           return redirect('/usuarios')->with('Mensaje', 'Usuario actualizado');
    }

    public function pdfUsuarios()
    {
       $usuarios = User::all();
       $roles = Role::get();
        $pdf = PDF::loadView('usuarios.pdf',compact('usuarios','roles'))->setOptions(['defaultFont' => 'sans-serif']); 
        return $pdf->setPaper('a4','landscape')->stream('usuarios.pdf');
    }
}