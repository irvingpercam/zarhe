<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNivelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Nivel', function (Blueprint $table) {
            $table->integer('NivelID', true);
            $table->string('Nombre', 50)->nullable();
            $table->integer('PuntosPersonales')->nullable();
            $table->integer('PuntosGrupales')->nullable();
            $table->integer('PuntosDescendientes')->nullable();
            $table->integer('LineasActivas')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Nivel');
    }
}
