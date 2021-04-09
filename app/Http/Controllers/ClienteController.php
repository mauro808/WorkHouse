<?php

namespace App\Http\Controllers;
use App;
use App\Cliente;
use App\User;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;


class ClienteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('can:agregarCliente')->only(['agregarCliente','store']);
        $this->middleware('can:cliente.listar')->only(['listarClientes']);
        $this->middleware('can:cliente.editar')->only(['edit','update']);
        $this->middleware('can:cliente.detalle')->only(['detalleCliente']);
        $this->middleware('can:cliente.destroy')->only(['destroy']);
    }
 
    public function listarClientes()
    {
        $clientes = Cliente::all();
        $usuarios = User::all();
        return view('clientes/listar',compact('clientes','usuarios'));
    }


    public function agregarCliente(){
        $usuarios = User::where('estado', 'Activo')->get();
        return view('clientes.create',compact('usuarios'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'idUsuario'=>'required',
            'nombreCliente'=>'required|regex:/^[\pL\s\-]+$/u',
            'tipoIdentificacion'=>'required',
            'numeroIdentificacion'=>'required|unique:clientes',
            'telefonoFijo'=>'required',
            'celular'=>'required',
            'direccion'=>'required',
            'correo'=>'required|email|unique:clientes',
        ],

        [
            'idUsuario.required' => '*Rellena este campo',
            'nombreCliente.required' => '*Rellena este campo',
            'nombreCliente.regex' => '*Ingresa sólo letras',
            'tipoIdentificacion.required' => '*Rellena este campo',
            'numeroIdentificacion.required' => '*Rellena este campo',      
            'numeroIdentificacion.unique' => '*Documento ya registrado',
            'telefonoFijo.required' => '*Rellena este campo',
            'celular.required' => '*Rellena este campo',
            'direccion.required' => '*Rellena este campo',
            'correo.required' => '*Rellena este campo',
            'correo.email' => '*Correo inválido',
            'correo.unique' => '*Correo ya existe',
        ]
    );

        $clienteNuevo = new App\Cliente;
        $clienteNuevo->id = $request->id;
        $clienteNuevo->idUsuario = $request->idUsuario;
        $clienteNuevo->nombreCliente = $request->nombreCliente;
        $clienteNuevo->tipoIdentificacion = $request->tipoIdentificacion;
        $clienteNuevo->numeroIdentificacion = $request->numeroIdentificacion;
        $clienteNuevo->telefonoFijo = $request->telefonoFijo;
        $clienteNuevo->celular = $request->celular;
        $clienteNuevo->direccion = $request->direccion;
        $clienteNuevo->correo = $request->correo;

        $clienteNuevo->save();
        return redirect('/clientes')->with('success','Registro Exitoso');
    }

    

    public function detalleCliente($idCliente)
    {
        $cliente = App\Cliente::findOrFail($idCliente);
        $usuario = App\User::find($cliente->idUsuario);
        return view('clientes.detalle', compact('cliente','usuario'));
    }

    public function edit($idCliente)
    {
        $cliente = App\Cliente::findOrFail($idCliente);
        $usuarios = User::all();
        return view('clientes.editar', compact('cliente','usuarios'));
    }

   
    public function update(Request $request, $id)
    {
        $request->validate([
            'idUsuario'=>'required',
            'nombreCliente'=>'required|regex:/^[\pL\s\-]+$/u',
            'tipoIdentificacion'=>'required',
            'numeroIdentificacion'=>'required',
            'telefonoFijo'=>'required',
            'celular'=>'required',
            'direccion'=>'required',
            'correo'=>'required|email|',
        ],

        [
            'idUsuario.required' => '*Rellena este campo',
            'nombreCliente.required' => '*Rellena este campo',
            'nombreCliente.regex' => '*Ingresa sólo letras',
            'tipoIdentificacion.required' => '*Rellena este campo',
            'numeroIdentificacion.required' => '*Rellena este campo',
            'telefonoFijo.required' => '*Rellena este campo',
            'celular.required' => '*Rellena este campo',
            'direccion.required' => '*Rellena este campo',
            'correo.required' => '*Rellena este campo',
            'correo.email' => '*Correo inválido',
        ]
    );


        $cliente= App\Cliente::findOrFail($id); //buscar producto por id
        $cliente->idUsuario = $request->idUsuario;
        $cliente->nombreCliente = $request->nombreCliente;
        $cliente->tipoIdentificacion = $request->tipoIdentificacion;
        $cliente->numeroIdentificacion = $request->numeroIdentificacion;
        $cliente->telefonoFijo = $request->telefonoFijo;
        $cliente->celular = $request->celular;
        $cliente->direccion = $request->direccion;
        $cliente->correo = $request->correo;
        $cliente->save();
           
           return redirect('/clientes')->with('Mensaje', 'Cliente actualizado');
    }

    public function pdfClientes()
    {
       $clientes = Cliente::all();
        $pdf = PDF::loadView('clientes.pdf',compact('clientes'))->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->setPaper('a4','landscape')->stream('clientes.pdf');
    }
   
 
}