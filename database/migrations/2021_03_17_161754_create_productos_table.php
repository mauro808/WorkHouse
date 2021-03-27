<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
  
    public function up()
    {

        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idCategoria'); 
            $table->foreign('idCategoria')->references('id')->on('categorias');
            $table->string('nombreProducto',50);
            $table->integer('existencias');
            $table->string('medida',20);
            $table->decimal('precio',11,2);
            $table->string('estado',15);
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
