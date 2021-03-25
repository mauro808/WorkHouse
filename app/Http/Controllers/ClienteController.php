<?php

namespace App\Http\Controllers;
use App;
use App\Cliente;
use App\Usuario;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;


class ClienteController extends Controller
{
 
    public function listarClientes()
    {
        $clientes = Cliente::all();
        $usuarios = Usuario::all();
        return view('clientes/listar',compact('clientes','usuarios'));
    }


    public function agregarCliente(){
        $usuarios = Usuario::where('estado', 'Activo')->get();
        return view('clientes.create',compact('usuarios'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'idUsuario'=>'required',
            'nombreCliente'=>'required|regex:/^[\pL\s\-]+$/u',
            'tipoIdentificacion'=>'required',
            'numeroIdentificacion'=>'required|integer|unique:clientes|min:15',
            'telefonoFijo'=>'required|integer|min:7',
            'celular'=>'required|integer|min:10',
            'direccion'=>'required',
            'correo'=>'required|email|unique:clientes',
        ],

        [
            'idUsuario.required' => '*Rellena este campo',
            'nombreCliente.required' => '*Rellena este campo',
            'nombreCliente.regex' => '*Ingresa sólo letras',
            'tipoIdentificacion.required' => '*Rellena este campo',
            'numeroIdentificacion.required' => '*Rellena este campo',
            'numeroIdentificacion.integer' => '*Ingresa sólo números',
            'numeroIdentificacion.min' => '*Máximo 15 dígitos',
            'numeroIdentificacion.unique' => '*Documento ya registrado',
            'telefonoFijo.required' => '*Rellena este campo',
            'telefonoFijo.integer' => '*Ingresa sólo números',
            'telefonoFijo.max' => '*Este campo es de 7 dígitos',
            'celular.required' => '*Rellena este campo',
            'celular.integer' => '*Ingresa sólo números',
            'celular.max' => '*Este campo es de 10 dígitos',
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
        $usuario = App\Usuario::find($cliente->idUsuario);
        return view('clientes.detalle', compact('cliente','usuario'));
    }

    public function edit($idCliente)
    {
        $cliente = App\Cliente::findOrFail($idCliente);
        $usuarios = Usuario::all();
        return view('clientes.editar', compact('cliente','usuarios'));
    }

   
    public function update(Request $request, $id)
    {
        $request->validate([
            'idUsuario'=>'required',
            'nombreCliente'=>'required|regex:/^[\pL\s\-]+$/u',
            'tipoIdentificacion'=>'required',
            'numeroIdentificacion'=>'required|integer|',
            'telefonoFijo'=>'required|integer',
            'celular'=>'required|integer',
            'direccion'=>'required',
            'correo'=>'required|email|',
        ],

        [
            'idUsuario.required' => '*Rellena este campo',
            'nombreCliente.required' => '*Rellena este campo',
            'nombreCliente.regex' => '*Ingresa sólo letras',
            'tipoIdentificacion.required' => '*Rellena este campo',
            'numeroIdentificacion.required' => '*Rellena este campo',
            'numeroIdentificacion.integer' => '*Ingresa sólo números',
            'telefonoFijo.required' => '*Rellena este campo',
            'telefonoFijo.integer' => '*Ingresa sólo números',
            'celular.required' => '*Rellena este campo',
            'celular.integer' => '*Ingresa sólo números',
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