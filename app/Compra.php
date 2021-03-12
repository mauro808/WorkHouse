<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    public $timestamps = false;

    protected $table = 'compras';

    protected $fillable = [
        'id',
        'fechaCompra',
        'idUsuario',
        'estadoCompra',
        'facturaCompra',
        'valorCompra',
    ];
}
