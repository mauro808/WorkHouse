<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
 
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idUsuario');
            $table->foreign('idUsuario')->references('id')->on('usuarios');
            $table->string('nombreCliente',50);
            $table->string('tipoIdentificacion',30);
            $table->integer('numeroIdentificacion');
            $table->string('direccion',50);
            $table->biginteger('celular');
            $table->integer('telefonoFijo');
            $table->string('correo',50);

        });
    }


    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
