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
=======
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
>>>>>>> c942a46fcccc909796afd6e688e060782bfc9ea6
    ];
}
