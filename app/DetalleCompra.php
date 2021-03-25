<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleCompra extends Model
{
   /* public $timestamps = false;

    protected $table = 'detalle_compra';

    protected $fillable = [
        'id',
        'idProducto ',
        'cantidad',
        'precio',
        'idCompra',
    ];

    public function compra(){
        return $this->belongsTo(Compra::class);
    }

    public function producto(){
        return $this->belongsTo(Producto::class);
    }*/

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