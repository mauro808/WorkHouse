<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleVentasTable extends Migration
{
 
    public function up()
    {
        Schema::create('detalle_ventas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idVenta');
            $table->foreign('idVenta')->references('id')->on('ventas')->onDelete('cascade');
            $table->unsignedBigInteger('idProducto');
            $table->foreign('idProducto')->references('id')->on('productos');
            $table->integer('cantidad');
            $table->decimal('Precio',11,2);
            
        });
    }

 
    public function down()
    {
        Schema::dropIfExists('detalle_ventas');
    }
}
