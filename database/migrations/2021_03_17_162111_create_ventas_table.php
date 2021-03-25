<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVentasTable extends Migration
{
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idCliente');
            $table->foreign('idCliente')->references('id')->on('clientes');
            $table->dateTime('fechaVenta');
            $table->decimal('porcentajeIva',11,2);
            $table->decimal('total',11,2);
            $table->unsignedBigInteger('idUsuario');
            $table->foreign('idUsuario')->references('id')->on('usuarios');
            $table->timestamps();
        });
    }

  
    public function down()
    {
        Schema::dropIfExists('ventas');
    }
}