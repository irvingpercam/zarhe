<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsignacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Asignacion', function (Blueprint $table) {
            $table->integer('EstatusID', true);
            $table->integer('Numero')->nullable()->index('Asignacion_Distribuidor_UsuarioID_fk');
            $table->integer('NivelID')->nullable()->index('Asignacion_Nivel_NivelID_fk');
            $table->date('Fecha')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Asignacion');
    }
}
