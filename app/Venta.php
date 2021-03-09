<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $table = 'ventas';

    protected $fillable = [
        'idCliente',
        'fechaVenta',
        'idUsuario',
        'precioTotal',
        'Estado'
    ];

    public function usuario(){
        return $this -> belongsTo('App/Usuario');
    }

    public function cliente(){
        return $this -> belongsTo('App/Cliente');
    }
}
