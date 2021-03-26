<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriasTable extends Migration
{

    public function up()
    {
        Schema::create('categorias', function (Blueprint $table) {
            $table->id();
            $table->string('nombreCategoria',30);
            $table->string('Descripcion',250);
            $table->string('estado',15);
        });
    }


    public function down()
    {
        Schema::dropIfExists('categorias');
    }
}
