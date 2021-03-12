<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    public $timestamps = false;
<<<<<<< HEAD

    protected $table = 'usuarios';

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
=======
>>>>>>> 60e845988dfea17ff9c3adfef7e102770ba01097
}
