<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermisosModulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permisos_modulos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('idRol'); 
            $table->foreign('idRol')->references('id')->on('rols');
            $table->unsignedBigInteger('idModulo'); 
            $table->foreign('idModulo')->references('id')->on('modulos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permisos_modulos');
    }
}
