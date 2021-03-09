<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
<<<<<<< HEAD
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
=======
    public $timestamps = true;

>>>>>>> 445ebdebebf1cccaa12d7be21ac7f558d3ad8f32
}
