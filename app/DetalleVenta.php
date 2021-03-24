<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleVenta extends Model
{

    protected $fillable = [
        'idVenta',
        'idProducto',
        'cantidad',
        'precio',
        'Estado'
    ];

    public $timestamps = false;

    public function venta(){
        return $this -> belongsTo(Venta::class);
    }

    public function productos(){
        return $this -> belongsTo(Producto::class);
    }

}
