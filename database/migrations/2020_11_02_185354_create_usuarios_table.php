<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rols', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('descripcion');
        });

        Schema::create('usuarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('idRol'); // Relación con categorias
            $table->foreign('idRol')->references('id')->on('rols');
            $table->string('nombre',30);
            $table->string('tipoDocumento',10);
            $table->integer('identificacion');
            $table->string('correo',25);
            $table->integer('telefonoFijo');
            $table->integer('celular');
            $table->string('direccion',30);
            $table->string('nombreUsuario',25);
            $table->string('contrasena',20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
        Schema::dropIfExists('rols');
    }
}
