<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'idUsuario',
        'nombreCliente',
        'tipoIdentificacion',
        'numeroIdentificacion',
        'direccion',
        'telefonoFijo',
        'celular',
        'correo'
    ];
}
