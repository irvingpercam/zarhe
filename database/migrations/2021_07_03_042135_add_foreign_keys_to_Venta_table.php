<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToVentaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Venta', function (Blueprint $table) {
            $table->foreign('Numero', 'Venta_Distribuidor_Numero_fk')->references('Numero')->on('Distribuidor')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('ProductoID', 'Venta_Producto_ProductoID_fk')->references('ProductoID')->on('Producto')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Venta', function (Blueprint $table) {
            $table->dropForeign('Venta_Distribuidor_Numero_fk');
            $table->dropForeign('Venta_Producto_ProductoID_fk');
        });
    }
}
