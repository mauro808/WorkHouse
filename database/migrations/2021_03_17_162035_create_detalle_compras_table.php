<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleComprasTable extends Migration
{
   
    public function up()
    {
        Schema::create('detalle_compras', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idProducto');
            $table->foreign('idProducto')->references('id')->on('productos');
            $table->integer('cantidad');
            $table->decimal('precio',11,2);
            $table->unsignedBigInteger('idCompra');
            $table->foreign('idCompra')->references('id')->on('compras');
        });
    }

  
    public function down()
    {
        Schema::dropIfExists('detalle_compras');
    }
}
