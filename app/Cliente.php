<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    public $timestamps = false;

<<<<<<< HEAD
    protected $table = 'clientes';

    protected $fillable = [
=======
    protected $fillable = [
        'id',
>>>>>>> c942a46fcccc909796afd6e688e060782bfc9ea6
        'idUsuario',
        'nombreCliente',
        'tipoIdentificacion',
        'numeroIdentificacion',
        'direccion',
<<<<<<< HEAD
        'telefonoFijo',
        'celular'
=======
        'celular',
        'telefonoFijo',
        'correo',
>>>>>>> c942a46fcccc909796afd6e688e060782bfc9ea6
    ];
}
