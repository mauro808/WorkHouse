<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'id',
        'idRol',
        'nombre',
        'tipoDpcumento',
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
