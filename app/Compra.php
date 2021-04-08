<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    

    const UPDATED_AT = null;

    protected $fillable = [
       
        'created_at',
        'idUsuario',
        'precioTotal',
        'estado'
    ];

    public function usuario(){
        return $this -> belongsTo(Users::class);
    }

  
    public function detalleCompra(){
        return $this -> hasMany(DetalleCompra::class);
    }

}