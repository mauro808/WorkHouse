<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleCompra extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'id',
        'idProducto',
        'cantidadProducto',
        'costoProducto',
        'idCompra',
        
    ];

    
}
