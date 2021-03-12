<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle__compras', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('idProducto');
            $table->foreign('idProducto')->references('id')->on('productos');
            $table->integer('cantidadProducto');
            $table->decimal('costoProducto',11,2);
            $table->unsignedBigInteger('idCompra');
            $table->foreign('idCompra')->references('id')->on('compras');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle__compras');
    }
}
