<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Producto', function (Blueprint $table) {
            $table->integer('ProductoID', true);
            $table->integer('TipoID')->nullable()->index('zahre_Producto_Tipo_TipoID_fk');
            $table->integer('Clave')->nullable();
            $table->string('Descripcion', 50)->nullable();
            $table->integer('Puntos')->nullable();
            $table->integer('Precio')->nullable();
            $table->integer('VolNegocio')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Producto');
    }
}
