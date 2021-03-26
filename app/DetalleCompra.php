<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleCompra extends Model
{
   
    protected $fillable = [
        'idCompra',
        'idProducto',
        'cantidad',
        'precio',
        'estado'
    ];

    public $timestamps = false;

    public function compra(){
        return $this -> belongsTo(Compra::class);
    }

    public function productos(){
        return $this -> belongsTo(Producto::class);
    }

}