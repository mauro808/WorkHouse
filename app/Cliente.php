<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    public $timestamps = false;

    protected $table = 'clientes';

    protected $fillable = [
        'idUsuario',
        'nombreCliente',
        'tipoIdentificacion',
        'numeroIdentificacion',
        'direccion',
        'telefonoFijo',
        'celular'
    ];
}
