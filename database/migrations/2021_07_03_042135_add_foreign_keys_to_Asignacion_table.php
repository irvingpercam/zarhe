<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToAsignacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Asignacion', function (Blueprint $table) {
            $table->foreign('Numero', 'Asignacion_Distribuidor_Numero_fk')->references('Numero')->on('Distribuidor')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('NivelID', 'Asignacion_Nivel_NivelID_fk')->references('NivelID')->on('Nivel')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Asignacion', function (Blueprint $table) {
            $table->dropForeign('Asignacion_Distribuidor_Numero_fk');
            $table->dropForeign('Asignacion_Nivel_NivelID_fk');
        });
    }
}
