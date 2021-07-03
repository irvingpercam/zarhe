<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTituloTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Titulo', function (Blueprint $table) {
            $table->integer('TituloID', true);
            $table->integer('NivelID')->nullable()->index('zahre_Titulo_Nivel_NivelID_fk');
            $table->integer('NRequeridoID')->nullable()->index('zahre_Titulo_NRequerido_NRequeridoID_fk');
            $table->integer('Cantidad')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Titulo');
    }
}
