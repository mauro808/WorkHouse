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
        $usuarios = Usuario::all();
        return view('clientes.create',compact('usuarios'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'idUsuario'=>'required',
            'nombreCliente'=>'required',
            'tipoIdentificacion'=>'required',
            'numeroIdentificacion'=>'required|integer',
            'telefonoFijo'=>'required|integer',
            'celular'=>'required|integer',
            'direccion'=>'required',
            'correo'=>'required|email',
        ],

        [
            'idUsuario.required' => 'Por Favor Selecciona Tu Usuario',
            'nombreCliente.required' => 'Ingresa Nombres',
            'tipoIdentificacion.required' => 'Selecciona Tipo Identificación',
            'numeroIdentificacion.required' => 'Ingresa Documento',
            'numeroIdentificacion.integer' => 'Ingresa sólo números',
            'telefonoFijo.required' => 'Ingresa Teléfono Fijo',
            'telefonoFijo.integer' => 'Ingresa sólo números',
            'celular.required' => 'Ingresa Celular',
            'celular.integer' => 'Ingresa sólo números',
            'direccion.required' => 'Ingresa Dirección',
            'correo.required' => 'Ingresa E-Mail',
            'correo.email' => 'Ingresa un correo válido',
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
        $pdf = PDF::loadView('clientes.pdf',compact('clientes'));
        return $pdf->setPaper('a4','landscape')->stream('clientes.pdf');
    }
   
 
}