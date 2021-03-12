<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'id',
        'fechaCompra',
        'idUsuario',
        'estadoCompra',
        'facturaCompra',
        'valorCompra',
    ];
}
