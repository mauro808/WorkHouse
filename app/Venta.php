<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    const UPDATED_AT = null;

    protected $fillable = [
        'idCliente',
        'created_at',
        'idUsuario',
        'precioTotal',
        'Estado'
    ];

    public function usuario(){
        return $this -> belongsTo(Usuario::class);
    }

    public function cliente(){
        return $this -> belongsTo(Cliente::class);
    }

    public function detalleVenta(){
        return $this -> hasMany(DetalleVenta::class);
    }
}
