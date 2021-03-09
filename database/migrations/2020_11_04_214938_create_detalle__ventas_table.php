<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle__ventas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('idVenta')->unsigned();
            $table->foreign('idVenta')->references('id')->on('ventas')->onDelete('cascade');
            $table->integer('idProducto')->unsigned();
            $table->foreign('idProducto')->references('id')->on('productos');
            $table->integer('cantidad');
            $table->integer('Precio',11,2);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle__ventas');
    }
}
