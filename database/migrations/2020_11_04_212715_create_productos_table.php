<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('categorias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('nombreCategoria');
        });
        Schema::create('productos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('idCategoria'); 
            $table->foreign('idCategoria')->references('id')->on('categorias');
            $table->string('nombreProducto',30);
            $table->integer('existencias');
            $table->string('medida',20);
            $table->integer('porcentajeIva');
            $table->integer('precio');
            $table->string('estado',15);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
