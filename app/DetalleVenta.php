<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleVenta extends Model
{

    protected $fillable = [
        'idVenta',
        'idProducto',
        'cantidad',
        'valorProducto',
        'Estado'
    ];

    public $timestamps = false;

}
