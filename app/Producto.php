<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    public $timestamps = false;

    protected $fillable = ['idCategoria','nombreProducto','existencias','medida','valorProducto','estado'];
}
