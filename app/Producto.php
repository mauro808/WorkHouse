<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{

    public $timestamps = false;

<<<<<<< HEAD
    protected $table = 'productos';

    protected $fillable = ['idCategoria','nombreProducto','existencias','medida','precio','estado'];
=======
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
>>>>>>> c942a46fcccc909796afd6e688e060782bfc9ea6
}
