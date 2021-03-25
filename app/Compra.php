<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    /*const UPDATED_AT=null;

    protected $table = 'compras';

    protected $fillable = [
        'id',
        'created_at',
        'idUsuario',
        'total',
        'estado',
    ];

    
    public function usuario(){
        return $this->belongsTo(Usuario::class);
    }

    public function detalleCompras(){
        return $this->hasMany(DetalleCompra::class);
    } */

    const UPDATED_AT = null;

    protected $fillable = [
       
        'created_at',
        'idUsuario',
        'precioTotal',
        'estado'
    ];

    public function usuario(){
        return $this -> belongsTo(Usuario::class);
    }

  
    public function detalleCompra(){
        return $this -> hasMany(DetalleCompra::class);
    }

}