<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'id',
        'idUsuario',
        'nombreCliente',
        'tipoIdentificacion',
        'numeroIdentificacion',
        'direccion',
        'celular',
        'telefonoFijo',
        'correo',
    ];
}
