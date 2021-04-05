<?php

namespace App;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;


class User extends Authenticatable
{
    use Notifiable;

    public $timestamps = false;

    protected $table = 'usuarios';

    protected $fillable = [
    'idRol',
    'nombre',
    'tipoDocumento',
    'identificacion',
    'email',
    'telefonoFijo',
    'celular',
    'direccion',
    'nombreUsuario',
    'password',
    'passwordc',
    'Estado',
    ];
}
