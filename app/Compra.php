<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    public $timestamps = false;

    protected $table='detalle__compras';
    
    protected $fillable = [
        'id',
        'idUsuario',
        'fechaCompra',
        'estadoCompra',
        'facturaCompra',
        'valorCompra',
    ];


}
