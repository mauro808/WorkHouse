<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    public $timestamps = false;

    protected $fillable = [
    'idRol',
    'nombre',
    'tipoDocumento',
    'identificacion',
    'correo',
    'telefonoFijo',
    'celular',
    'direccion',
    'nombreUsuario',
    'contrasena',
    'contrasenac',
    'Estado',
    ];
}
