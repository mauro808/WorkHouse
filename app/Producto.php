<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'id',
        'idCategoria',
        'nombreProducto',
        'existencias',
        'medida',
        'porcentajeIva',
        'precio',
        'estado',
    ];
}
