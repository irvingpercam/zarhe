<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Venta', function (Blueprint $table) {
            $table->integer('Folio', true);
            $table->integer('ProductoID')->nullable()->index('Venta_Producto_ProductoID_fk');
            $table->integer('Numero')->nullable()->index('Venta_Distribuidor_UsuarioID_fk');
            $table->date('Fecha')->nullable();
            $table->integer('Cantidad')->nullable();
            $table->integer('Importe')->nullable();
            $table->integer('Puntos')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Venta');
    }
}
