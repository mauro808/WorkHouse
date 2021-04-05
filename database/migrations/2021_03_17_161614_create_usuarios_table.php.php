<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{

    public function up()
    {
     
        Schema::create('usuarios', function (Blueprint $table) 
        {
            $table->id();
            $table->unsignedBigInteger('idRol'); 
            $table->foreign('idRol')->references('id')->on('rols');
            $table->string('nombre',30);
            $table->string('tipoDocumento',20);
            $table->biginteger('identificacion');
            $table->string('email',50)->unique();
            $table->integer('telefonoFijo');
            $table->biginteger('celular');
            $table->string('direccion',30);
            $table->string('nombreUsuario',8)->unique();
            $table->string('password',255);
            $table->string('passwordc',255);
            $table->string('Estado',15);
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}