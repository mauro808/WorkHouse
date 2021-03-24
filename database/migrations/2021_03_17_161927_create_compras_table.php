<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComprasTable extends Migration
{
   
    public function up()
    {
        Schema::create('compras', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->timestamps('created_at');
            $table->unsignedBigInteger('idUsuario');
            $table->foreign('idUsuario')->references('id')->on('usuarios');
            $table->decimal('total',11,2);
            $table->enum('estado',['Activo','Inactivo'])->default('Activo');
        });
    }

 
    public function down()
    {
        Schema::dropIfExists('compras');
    }
}
